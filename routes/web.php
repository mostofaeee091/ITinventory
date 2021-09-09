<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GatepassController;

Route::get('/gatepass',[GatepassController::class,'index'])->name('index');
Route::get('/add-gatepass',[GatepassController::class,'create'])->name('create');
Route::get('/generategatepass/{id}',[GatepassController::class,'show'])->name('show');
Route::post('/add-gatepass',[GatepassController::class,'store'])->name('store');





