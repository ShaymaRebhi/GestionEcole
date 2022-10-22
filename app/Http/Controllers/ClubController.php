<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
   
    public function index()
    {
      $clubs= Club::all();
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
      /*   $request->validate([
            'nom' => 'required|string|max:255',
            'nbPersonnes' => 'required|integer|max:50',
            'dateCreation' => 'required',
            'description' => 'required',
        ]); */
        $club = Club::create([
            'nom' => $request->nom,
            'type' => $request->type,
            'nbPersonnes' => $request->nbPersonnes,
            'dateCreation' => $request->dateCreation ,
            'description' => $request->description
        ]);
        session()->flash('message','Tag Added Successfully');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
