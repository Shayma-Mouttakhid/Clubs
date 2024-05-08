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
    public function edit(Club $club)
{
    // Your edit logic here
}
public function Ajouter(Club $club)
{
    // Your edit logic here
    return view('AjouterClub', compact('clubs'));
}
public function destroy(Club $club)
{
    $club->delete();
    return redirect()->route('clubs.index')->with('success', 'Club deleted successfully');
}
}
