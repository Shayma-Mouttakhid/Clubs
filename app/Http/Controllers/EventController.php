<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Club;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

//create
    public function create()
    {
        $clubs=Club::all();
        return view('events.create', compact('clubs'));
    }
//store
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date',
            'club_id' => 'required|exists:clubs,id',
            'club_responsable' => 'string|max:255',
        ]);

        Event::create($validatedData);

        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }
//edit
    public function edit(Event $event)
    {
        $clubs=Club::all();
        return view('events.edit', compact('event', 'clubs'));
    }
//update
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date',
            'club_id' => 'required|exists:clubs,id',
            'club_responsable' => 'required|string|max:255',
        ]);
        
        $event->update($validatedData);

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }
}
