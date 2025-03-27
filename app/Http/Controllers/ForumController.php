<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function chamaForum (Request $request) {
        return view("forum");
    }
}
