<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Show the landing page with the hero section.
     */
    public function index()
    {
        return view('landing');
    }
}
