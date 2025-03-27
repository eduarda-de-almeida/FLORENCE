<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChameController extends Controller
{
    public function chamaChame (Request $request) {
        return view("chame");
    }
}
