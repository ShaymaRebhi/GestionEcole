<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ClubController extends Controller
{
   
    public function index()
    {
        if (request('search')) {
            $clubs= Club::where('Nom', 'like', '%' . request('search') . '%')->get();
        } else {
            $clubs= Club::all();
        }
      return view('Components.Club.clubsList',['clubs'=>$clubs]);
      
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
           $request->validate([
            'nom' => 'required|string|max:255',
            'nbPersonnes' => 'required|integer|max:50',
            'dateCreation' => 'required',
            'description' => 'required',
        ]);
                $club = Club::create([
            'nom' => $request->nom,
            'type' => $request->type,
            'nbPersonnes' => $request->nbPersonnes,
            'dateCreation' => $request->dateCreation ,
            'description' => $request->description
        ]);
        session()->flash('message','Club Added Successfully');
        //$this->resetInput();
        return redirect()->route('clubs.clubsList')->with('status', 'Club Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::find($id);
        $events = Event::where('club_id', $id)->get();
        $users= $club->users()->get();
        return view('Components.Club.show', compact('club','events','users')); 
        
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
        $club = Club::find($request->club_id);
        $club->nbPersonnes=(($club->nbPersonnes)+1);
        $club->users()->attach($user);
        $club->save();
        $users= $club->users()->get();
        $events=$club->events()->get();
        
        return view('Components.Club.show', compact('club','events','users')); 
        
    }
    
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
       $clubToEdit = Club::find($id);
       // log::info("helloooo");
        return view('Components.Club.edit',compact('clubToEdit'));
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
        $club = Club::find($request->id);
        //$input = $request->all();
        $club->type= $request->type;
        $club = Club::find($id);
        $club->update($request->all());

        return redirect()->route('clubs.clubsList')->with('status', 'Club Updated Successfully');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Club::find($id)->delete();
        return redirect()->route('clubs.clubsList')->with('success', 'Club deleted successfully');
    }
}
