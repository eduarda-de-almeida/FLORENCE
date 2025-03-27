<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdmController extends Controller
{

    public function chamaAdm (Request $request) {
        return view("adm");
    }
}
