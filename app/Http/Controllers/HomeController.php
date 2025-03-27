<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function chamaHome (Request $request) {
        return view("home");
    }
}
