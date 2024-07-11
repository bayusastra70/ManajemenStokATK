<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokiController extends Controller
{
    public function index()
    {
        return view('stoki');
    }
}
