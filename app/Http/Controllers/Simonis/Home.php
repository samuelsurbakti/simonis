<?php

namespace App\Http\Controllers\Simonis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('simonis.home.index');
    }
}
