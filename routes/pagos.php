<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagosController;

Route::get('{course}/checkout', [PagosController::class, 'checkout'])->name('checkout');