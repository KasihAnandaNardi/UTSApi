<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\SeiyuuController;

Route::get('/', function () {
    return view('welcome');
});
 
// use App\Http\Controllers\Api\PremierLeagueController; 
// // Route untuk mendapatkan semua tim 
// Route::get('api/teams', [PremierLeagueController::class, 
// 'getAllTeams']);



Route::get('/seiyuu', [SeiyuuController::class, 'index'])->name('seiyuu.index');
