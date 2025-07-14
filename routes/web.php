<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage;
use App\Livewire\ListSpots;
use App\Livewire\ShowSpot;

Route::get('/', LandingPage::class)->name('landing');
Route::get('/destinations', ListSpots::class)->name('spots.list');
Route::get('/destination/{id}', ShowSpot::class)->name('spots.show');
