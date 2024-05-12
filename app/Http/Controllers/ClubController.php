<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
     public function index()
    {
        $clubs = Club::all();
        return view('clubs', compact('clubs'));
    }
    public function edit(Club $club)
{
    return view('clubs.edit', compact('club'));
}
// public function Ajouter(Club $club)
// {
//     // Your edit logic here
//     return view('AjouterClub', compact('clubs'));
// }
public function destroy(Club $club)
{
    $club->delete();
    return redirect()->route('clubs.index')->with('success', 'Club deleted successfully');
}

public function create(){
    return view('clubs.create');
}

public function store(Request $request)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom_club' => 'required|string|max:255',
        'rspnsbl_club' => 'required|string|max:255',
        'description' => 'required|string',
    ]);
    // Créer le club dans la base de données
    $club = Club::create($validatedData);

    // Rediriger avec un message de succès
    return redirect()->route('clubs')->with('success', 'Club created successfully');
}

public function update(Request $request, Club $club)
    {
        $request->validate([
            'nom_club' => 'required|string|max:255',
            'rspnsbl_club' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $club->update([
            'nom_club' => $request->nom_club,
            'rspnsbl_club' => $request->rspnsbl_club,
            'description' => $request->description,
        ]);

        return redirect()->route('clubs')->with('success', 'Club updated successfully');
    }
}
