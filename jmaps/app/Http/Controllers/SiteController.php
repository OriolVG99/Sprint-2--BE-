<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\Debugbar\Facades\Debugbar;


class SiteController extends Controller
{
    public function home() 
    {
        Log::info('Bienvenido a jMaps - Log');
        Debugbar::info('Bienvenido a jMaps - Debugbar');
        return view('welcome');
    }
}