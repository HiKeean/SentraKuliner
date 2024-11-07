<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeScreenController extends Controller
{
    public function index()
    {
        return view('screen.auth.login');
    }
}
