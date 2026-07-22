<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

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
        //
        $validate=$request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'time'=>'required|date_format:H:i',
            'date'=>'required|date',
            'lieu'=>'required|string|max:255',
            'prix'=>'required|numeric|min:0',
            'place'=>'required|integer|min:1',
        ]);
        $reservation=Reservation::create([$validate]);
        return view('bde-dacshboard',compact('reservation'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

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
