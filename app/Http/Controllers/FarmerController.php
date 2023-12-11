<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function lihat_pertinjau()
    {
        return view('/user/pertinjau');
    }
}
