<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
     public function clubs()
    {
        $clubs = Club::all();
        return view('clubs', compact('clubs'));
    }
}
