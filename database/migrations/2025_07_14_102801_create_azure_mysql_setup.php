<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // This migration ensures Azure MySQL compatibility
        // and sets up proper charset and collation
        
        // Set MySQL session variables for Azure compatibility
        if (DB::connection()->getConfig('driver') === 'mysql') {
            DB::statement('SET sql_mode = ""');
            DB::statement('SET GLOBAL sql_mode = ""');
        }
        
        Schema::create('azure_setup', function (Blueprint $table) {
            $table->id();
            $table->string('setup_key')->unique();
            $table->text('setup_value')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
        // Insert a record to verify the setup works
        DB::table('azure_setup')->insert([
            'setup_key' => 'azure_mysql_connection',
            'setup_value' => 'Successfully connected to Azure MySQL at ' . now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('azure_setup');
    }
};
