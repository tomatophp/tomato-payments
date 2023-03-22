<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('payment')->group(function() {
    Route::get('/', 'PaymentController@index');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/khaleds-payment-methods', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'index'])->name('khaleds-payment-methods.index');
    Route::get('admin/khaleds-payment-methods/api', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'api'])->name('khaleds-payment-methods.api');
    Route::get('admin/khaleds-payment-methods/create', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'create'])->name('khaleds-payment-methods.create');
    Route::post('admin/khaleds-payment-methods', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'store'])->name('khaleds-payment-methods.store');
    Route::get('admin/khaleds-payment-methods/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'show'])->name('khaleds-payment-methods.show');
    Route::get('admin/khaleds-payment-methods/{model}/edit', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'edit'])->name('khaleds-payment-methods.edit');
    Route::post('admin/khaleds-payment-methods/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'update'])->name('khaleds-payment-methods.update');
    Route::delete('admin/khaleds-payment-methods/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentMethodController::class, 'destroy'])->name('khaleds-payment-methods.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/khaleds-payments', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'index'])->name('khaleds-payments.index');
    Route::get('admin/khaleds-payments/api', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'api'])->name('khaleds-payments.api');
    Route::get('admin/khaleds-payments/create', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'create'])->name('khaleds-payments.create');
    Route::post('admin/khaleds-payments', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'store'])->name('khaleds-payments.store');
    Route::get('admin/khaleds-payments/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'show'])->name('khaleds-payments.show');
    Route::get('admin/khaleds-payments/{model}/edit', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'edit'])->name('khaleds-payments.edit');
    Route::post('admin/khaleds-payments/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'update'])->name('khaleds-payments.update');
    Route::delete('admin/khaleds-payments/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentController::class, 'destroy'])->name('khaleds-payments.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/khaleds-payment-logs', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'index'])->name('khaleds-payment-logs.index');
    Route::get('admin/khaleds-payment-logs/api', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'api'])->name('khaleds-payment-logs.api');
    Route::get('admin/khaleds-payment-logs/create', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'create'])->name('khaleds-payment-logs.create');
    Route::post('admin/khaleds-payment-logs', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'store'])->name('khaleds-payment-logs.store');
    Route::get('admin/khaleds-payment-logs/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'show'])->name('khaleds-payment-logs.show');
    Route::get('admin/khaleds-payment-logs/{model}/edit', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'edit'])->name('khaleds-payment-logs.edit');
    Route::post('admin/khaleds-payment-logs/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'update'])->name('khaleds-payment-logs.update');
    Route::delete('admin/khaleds-payment-logs/{model}', [\TomatoPHP\TomatoPayments\Http\Controllers\KhaledsPaymentLogController::class, 'destroy'])->name('khaleds-payment-logs.destroy');
});
