<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartingController;
Route::get('/', function(){ return redirect()->route('kartings.index'); });
Route::resource('kartings', KartingController::class);
