<?php

namespace App\Http\Controllers\Components\Formations;

use App\Http\Controllers\Controller;
use App\Models\FormationExterne;
use App\Models\CentreFormation;
use Illuminate\Http\Request;

class FormationExterneController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (request('search')) {
            $data = FormationExterne::where('Nom', 'like', '%' . request('search') . '%')->get();
        } else {
            $data = FormationExterne::latest()->get();
        }
    
        
        return view('Components.Formationsexternes.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = CentreFormation::latest()->get();
        return view('Components.Formationsexternes.create', compact('data1'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'Nom'          =>  'required',
            'Duree'         =>  'required',
            'ObjectifGlobale'         =>  'required',
            'DateDebut'          =>  'required',
            'DateFin'          =>  'required',

        ]);

    

      

        $formationExterne = new FormationExterne;

        $formationExterne->Nom = $request->Nom;
        $formationExterne->Duree = $request->Duree;
        $formationExterne->ObjectifGlobale = $request->ObjectifGlobale;
        $formationExterne->DateDebut = $request->DateDebut;
        $formationExterne->DateFin = $request->DateFin;
        $formationExterne->centre_formations_id = $request->centre_formations_id;

        $formationExterne->save();

        return redirect()->route('FormationExterne.index')->with('success', 'Formation Added successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationExterne  $formationExterne
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $formationExterne = FormationExterne::find($id);
        $centre = CentreFormation::find($formationExterne->centre_formations_id);
        return view('Components.Formationsexternes.show', compact('formationExterne','centre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationExterne  $formationExterne
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $formationExterne = FormationExterne::find($id);
        $centre = CentreFormation::find($formationExterne->centre_formations_id);
        $data1 = CentreFormation::latest()->get();
        
        return view('Components.Formationsexternes.edit', compact('formationExterne','centre'), compact('data1'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationExterne  $formationExterne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'Nom'          =>  'required',
            'Duree'         =>  'required',
            'ObjectifGlobale'         =>  'required',
            'DateDebut'          =>  'required|date',
            'DateFin'          =>  'required|date',
        ]);

     
        $formationExterne = FormationExterne::find($request->hidden_id);

        $formationExterne->Nom = $request->Nom;
        $formationExterne->Duree = $request->Duree;
        $formationExterne->ObjectifGlobale = $request->ObjectifGlobale;
        $formationExterne->DateDebut = $request->DateDebut;
        $formationExterne->DateFin = $request->DateFin;
        $formationExterne->centre_formations_id = $request->centre_formations_id;

        $formationExterne =FormationExterne::find($id);
        $formationExterne -> update($request->all());

        return redirect()->route('FormationExterne.index')->with('success', 'Formation Data has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationExterne  $formationExterne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormationExterne::find($id)->delete();

        return redirect()->route('FormationExterne.index')->with('success', 'Formation Data deleted successfully');
    
    }
}
