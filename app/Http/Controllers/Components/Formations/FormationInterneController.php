<?php

namespace App\Http\Controllers\Components\Formations;

use App\Http\Controllers\Controller;
use App\Models\FormationInterne;
use Illuminate\Http\Request;

use ConsoleTVs\Charts\BaseChart;
use Chartisan\PHP\Chartisan;

class FormationInterneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('search')) {
            $data = FormationInterne::where('Nom', 'like', '%' . request('search') . '%')->get();
        } else {
            $data = FormationInterne::latest()->get();
        }
        

        return view('Components.Formationsinternes.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Components.Formationsinternes.create');
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

    

      

        $formationInterne = new FormationInterne;

        $formationInterne->Nom = $request->Nom;
        $formationInterne->Duree = $request->Duree;
        $formationInterne->ObjectifGlobale = $request->ObjectifGlobale;
        $formationInterne->DateDebut = $request->DateDebut;
        $formationInterne->DateFin = $request->DateFin;

        $formationInterne->save();

        return redirect()->route('FormationInterne.index')->with('success', 'Formation Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationInterne  $formationInterne
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formationInterne = FormationInterne::find($id);
        $users= $formationInterne->users()->get();
        return view('Components.Formationsinternes.show', compact('formationInterne','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationInterne  $formationInterne
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formationInterne = FormationInterne::find($id);
        
        return view('Components.Formationsinternes.edit', compact('formationInterne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationInterne  $formationInterne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'Nom'          =>  'required',
            'Duree'         =>  'required',
            'ObjectifGlobale'         =>  'required',
            'DateDebut'          =>  'required|date',
            'DateFin'          =>  'required|date',
        ]);

     
        $formationInterne = FormationInterne::find($request->hidden_id);

        $formationInterne->Nom = $request->Nom;
        $formationInterne->Duree = $request->Duree;
        $formationInterne->ObjectifGlobale = $request->ObjectifGlobale;
        $formationInterne->DateDebut = $request->DateDebut;
        $formationInterne->DateFin = $request->DateFin;

        $formationInterne =FormationInterne::find($id);
        $formationInterne -> update($request->all());

        return redirect()->route('FormationInterne.index')->with('success', 'Formation Data has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationInterne  $formationInterne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormationInterne::find($id)->delete();

        return redirect()->route('FormationInterne.index')->with('success', 'Formation Data deleted successfully');
    
    }






    
}
