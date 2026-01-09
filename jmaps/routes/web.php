<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'home']);