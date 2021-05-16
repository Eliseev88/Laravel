<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin(string $adminRole, string $adminLogin) {
        echo 'Hello! Your role is ' . $adminRole . ' and your login is ' . $adminLogin;
    }
}
