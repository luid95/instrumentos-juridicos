<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosGeneralesController extends Controller
{
    public function index()
    {
        return view('s-generales.index');
    }
}
