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
        $event=Event::create($validate);
        return view('bde-dacshboard',compact('event'));

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
