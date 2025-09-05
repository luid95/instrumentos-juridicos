<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursosMaterialesController extends Controller
{
    public function index()
    {
        return view('r-materiales.index');
    }
}
