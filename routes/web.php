<?php

use App\Livewire\Login;
use App\Livewire\AdminDashboard;
use App\Livewire\CashierDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::post('/logout',[Login::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

Route::middleware(['auth', 'role:cashier'])->group(function () {
    Route::get('/cashier/dashboard', CashierDashboard::class)->name('cashier.dashboard');

    //    TODO Add order ID as parameter
    Route::get('/cashier/order/orderid/checkout', \App\Livewire\CheckoutPage::class)->name('checkout');
});
