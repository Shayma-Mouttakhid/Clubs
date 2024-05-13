<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function ResponsableDashboard(){
        return view('responsable.responsable_dashboard');
    }
}
