<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\Ticket;
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
        $events = Event::withCount('reservation')->get();
        return view('bde', compact('events'));
        // return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        $events = Event::withCount('reservation')->get();
        $user = Auth::user();

        $reservationSInfo = Ticket::join('reservations', 'tickets.reservation_id', '=', 'reservations.id')
            ->join('events', 'reservations.event_id', '=', 'events.id')
            ->where('reservations.user_id', Auth::id())
            ->select(
                'tickets.code',
                'events.title as event_title',
                'events.date as event_date',
                'events.heure as event_heure',
                'events.lieu as event_lieu'
            )
            ->get();
        return view('Etudiant', compact('events', 'user', 'reservationSInfo'));
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
