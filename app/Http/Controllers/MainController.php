<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
