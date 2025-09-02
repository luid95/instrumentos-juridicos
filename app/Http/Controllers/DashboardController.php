<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Mostrar la vista principal del dashboard.
     */
    public function index()
    {
        return view('dashboard');
    }
}
