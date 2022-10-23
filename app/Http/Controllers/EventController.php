<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events= Event::all();
        return view('Components.Event.eventsList',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $event= Event::create([
            'nom' => $request->nom,
            'type' => $request->type,
            'nbPersonnes' => 0,
            'nbPersonnesMax' => $request->nbPersonnesMax,
            'date' => $request->date ,
            'time' => $request->time,
            'lieu' => $request->lieu,
            'club_id' =>$request->club_id
            

        ]);
        session()->flash('message','Event Added Successfully');
        //$this->resetInput();
        return redirect()->route('events.eventsList')->with('status', 'Event Created Successfully');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $users = $event->users()->get();
        return view('Components.Event.show', compact('event','users')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect()->route('events.eventsList')->with('success', 'Event deleted successfully');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function invite(Request $request)
    {
        $user= User::where('email','=', $request->email)->get(); 
        $event = Event::find($request->event_id);
        $event->nbPersonnes=(($event->nbPersonnes)+1);
        $event->users()->attach($user);
        $event->save();
        $users= $event->users()->get();
        
        return view('Components.Event.show', compact('event','users')); 
        
    }
    
}
