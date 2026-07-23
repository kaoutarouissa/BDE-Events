<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\Ticket;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Str;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:events,id',
    ]);

    $exists = Reservation::where('user_id', Auth::id())
        ->where('event_id', $request->event_id)
        ->exists();

    if ($exists) {
        return back()->with([
            'error' => 'Vous avez déjà réservé cet événement.',
            'event_id' => $request->event_id,
        ]);
    }

    $reservation = Reservation::create([
        'user_id'  => Auth::id(),
        'event_id' => $request->event_id,
    ]);

    $code = 'RES-' . now()->format('His') . '-' . strtoupper(Str::random(3));

    Ticket::create([
        'code' => $code,
        'reservation_id' => $reservation->id,
    ]);

    return back()->with('success', 'Réservation effectuée avec succès.');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);

    }
    
    /**
     * Display the specified resource.
     */
    // public function show(Reservation $reservation)
    // {
    //     //
    //         // dd('ReservationController');
    //         $events=Event::all();

    //     // dd('show');
    //     $reservations=Reservation::join('events','events.id','=','reservations.event_id')    ->where('reservations.user_id', auth::id())
    //     ->select('events.title','events.heure')->get();
    //     // dd($reservation);
    //     // retrun view('etudiant',compact('reservation'));
    //     return view('etudiant',compact('reservations','events'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
