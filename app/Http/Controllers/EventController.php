<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
            // dd('Controller reached');*
            // dd($request->all());

        $validate=$request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'heure'=>'required|date_format:H:i',
            'date'=>'required|date',
            'lieu'=>'required|string|max:255',
            'prix'=>'required|numeric|min:0',
            'nombre_places'=>'required|integer|min:1',
            ]);
            $event=Event::create($validate);
            // dd($event);
            // dd($event);
        return view('bde',compact('event'));

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
    public function show(Event $event)
    {
        //
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
