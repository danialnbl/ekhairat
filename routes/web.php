<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Users Func
Route::get('/dashboard', function () {
    return view('/users/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/yuran', function () {
    return view('/users/yuran');
})->middleware(['auth', 'verified'])->name('yuran');

Route::get('/payment', function () {
    return view('/users/payment');
})->middleware(['auth', 'verified'])->name('payment');

//Admin Func
route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard')
    ->middleware(['auth', 'admin']);

route::get('/get/banks/FPX', [\App\Http\Controllers\testController::class, 'getBankFPX'])->name('get:banks');

route::get('/create/fee', [\App\Http\Controllers\FeeController::class,'createFee'])->name('create:fee');

Route::post('submit/yuran', [\App\Http\Controllers\FeeController::class, 'submitYuran'])->name('submit:yuran');

Route::get('/bill/payment/{bill_code}', [App\Http\Controllers\FeeController::class, 'billPaymentLink'])->name('bill:payment');
