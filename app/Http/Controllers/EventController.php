<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $events = Event::all();
// dd($events);
    return view('bde', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
           
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validate = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'heure' => 'required|date_format:H:i',
        'date' => 'required|date|after_or_equal:today',
        'lieu' => 'required|string|max:255',
        'prix' => 'required|numeric|min:0',
        'nombre_places' => 'required|integer|min:1',
    ]);

    Event::create($validate);

    return redirect()->route('bde-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $events)
    {
        //
        $events=Event::all();
        // dd($events);
        $user = Auth::user();
        return view('Etudiant',compact('events','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
