@if "%SCM_TRACE_LEVEL%" NEQ "4" @echo off

:: ----------------------
:: KUDU Deployment Script
:: Version: 1.0.17
:: ----------------------

:: Prerequisites
:: -------------

:: Verify node.js installed
where node 2>nul >nul
IF %ERRORLEVEL% NEQ 0 (
  echo Missing node.js executable, please install node.js, if already installed make sure it can be reached from current environment.
  goto error
)

:: Setup
:: -----

setlocal enabledelayedexpansion

SET ARTIFACTS=%~dp0%..\artifacts

IF NOT DEFINED DEPLOYMENT_SOURCE (
  SET DEPLOYMENT_SOURCE=%~dp0%.
)

IF NOT DEFINED DEPLOYMENT_TARGET (
  SET DEPLOYMENT_TARGET=%ARTIFACTS%\wwwroot
)

IF NOT DEFINED NEXT_MANIFEST_PATH (
  SET NEXT_MANIFEST_PATH=%ARTIFACTS%\manifest

  IF NOT DEFINED PREVIOUS_MANIFEST_PATH (
    SET PREVIOUS_MANIFEST_PATH=%ARTIFACTS%\manifest
  )
)

IF NOT DEFINED KUDU_SYNC_CMD (
  :: Install kudu sync
  echo Installing Kudu Sync
  call npm install kudusync -g --silent
  IF !ERRORLEVEL! NEQ 0 goto error

  :: Locally just running "kuduSync" would also work
  SET KUDU_SYNC_CMD=%appdata%\npm\kuduSync.cmd
)

::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:: Deployment
:: ----------

echo Handling Basic Web Site deployment.

:: 1. KuduSync
IF /I "%IN_PLACE_DEPLOYMENT%" NEQ "1" (
  call :ExecuteCmd "%KUDU_SYNC_CMD%" -v 50 -f "%DEPLOYMENT_SOURCE%" -t "%DEPLOYMENT_TARGET%" -n "%NEXT_MANIFEST_PATH%" -p "%PREVIOUS_MANIFEST_PATH%" -i ".git;.hg;.deployment;deploy.cmd"
  IF !ERRORLEVEL! NEQ 0 goto error
)

:: 2. Install Composer packages
IF EXIST "%DEPLOYMENT_TARGET%\composer.json" (
  echo Installing Composer packages
  pushd "%DEPLOYMENT_TARGET%"
  call composer install --no-dev --optimize-autoloader --no-interaction
  IF !ERRORLEVEL! NEQ 0 goto error
  popd
)

:: 3. Install npm packages and build
IF EXIST "%DEPLOYMENT_TARGET%\package.json" (
  echo Installing npm packages
  pushd "%DEPLOYMENT_TARGET%"
  call npm install --production
  IF !ERRORLEVEL! NEQ 0 goto error
  
  echo Building assets
  call npm run build
  IF !ERRORLEVEL! NEQ 0 goto error
  popd
)

:: 4. Laravel specific deployments
pushd "%DEPLOYMENT_TARGET%"

:: Generate application key if not exists
IF NOT EXIST ".env" (
  echo Copying .env.example to .env
  copy ".env.example" ".env"
)

:: Set proper permissions for storage
echo Setting up Laravel storage permissions
mkdir storage\app\public 2>nul
mkdir storage\framework\cache 2>nul
mkdir storage\framework\sessions 2>nul
mkdir storage\framework\views 2>nul
mkdir storage\logs 2>nul

:: Set up Laravel
echo Setting up Laravel
call php artisan key:generate --no-interaction --force

:: Clear all caches first
call php artisan config:clear
call php artisan cache:clear
call php artisan route:clear
call php artisan view:clear

:: Create storage link
call php artisan storage:link

:: Cache configurations for production
call php artisan config:cache
call php artisan route:cache
call php artisan view:cache

:: Run migrations (with retry logic for Azure MySQL)
echo Running migrations (this may take a few moments for Azure MySQL)
call php artisan migrate --force
IF !ERRORLEVEL! NEQ 0 (
  echo Retrying migration in 10 seconds...
  timeout /t 10 /nobreak
  call php artisan migrate --force
)

:: Seed the database
echo Seeding database
call php artisan db:seed --force

popd

::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
goto end

:: Execute command routine that will echo out when error
:ExecuteCmd
setlocal
set _CMD_=%*
call %_CMD_%
if "%ERRORLEVEL%" NEQ "0" echo Failed exitCode=%ERRORLEVEL%, command=%_CMD_%
exit /b %ERRORLEVEL%

:error
endlocal
echo An error has occurred during web site deployment.
call :exitSetErrorLevel
call :exitFromFunction 2>nul

:exitSetErrorLevel
exit /b 1

:exitFromFunction
()

:end
endlocal
echo Finished successfully.
