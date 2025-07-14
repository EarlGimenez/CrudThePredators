<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage;
use App\Livewire\ListSpots;
use App\Livewire\ShowSpot;
use Illuminate\Support\Facades\DB;

// Test route for Azure deployment
Route::get('/test', function () {
    try {
        $dbConnection = DB::connection()->getPdo();
        $dbStatus = 'Connected to ' . DB::connection()->getConfig('driver');
        $dbHost = DB::connection()->getConfig('host');
        $dbName = DB::connection()->getConfig('database');
        
        // Test query
        $spotsCount = DB::table('spots')->count();
        
    } catch (Exception $e) {
        $dbStatus = 'Connection failed: ' . $e->getMessage();
        $dbHost = 'Unknown';
        $dbName = 'Unknown';
        $spotsCount = 0;
    }
    
    return response()->json([
        'status' => 'success',
        'message' => 'Tourism App is running on Azure with MySQL!',
        'timestamp' => now(),
        'environment' => app()->environment(),
        'database' => [
            'status' => $dbStatus,
            'host' => $dbHost,
            'database' => $dbName,
            'spots_count' => $spotsCount
        ],
        'php_version' => phpversion(),
        'laravel_version' => app()->version()
    ]);
});

Route::get('/', LandingPage::class)->name('landing');
Route::get('/destinations', ListSpots::class)->name('spots.list');
Route::get('/destination/{id}', ShowSpot::class)->name('spots.show');
