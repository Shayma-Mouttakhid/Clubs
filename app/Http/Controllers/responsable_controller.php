<?php

namespace App\Http\Controllers;

use App\Models\Responsables;
use Illuminate\Http\Request;

class responsable_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsables::all();
        return view('Responsable', ['responsables' => $responsables]);
    }
    public function store(Request $request)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:responsables',
        // Add other fields as needed
    ]);

    // Create a new Responsable instance
    $responsable = new Responsable();
    $responsable->name = $request->name;
    $responsable->email = $request->email;
    // Set other fields
    $responsable->save();

    return redirect()->route('responsables.index')->with('success', 'Responsable created successfully');
}



    // Other controller methods (create, store, edit, update, destroy) go here...
}
