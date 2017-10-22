<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$variable = 'emre';
    	return view('welcome', compact('variable'));
    }
}
