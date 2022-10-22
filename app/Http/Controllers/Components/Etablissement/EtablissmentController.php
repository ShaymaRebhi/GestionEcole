<?php

namespace App\Http\Controllers\Components\Etablissement;

use App\Http\Controllers\Controller;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Etablissement::latest()->get();

        return view('Components.Etablissements.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Components.Etablissements.create');
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
            'Type'         =>  'required',
            'Adresse'         =>  'required'
           
        ]);


        $etablissement = new Etablissement;

        $etablissement->Nom = $request->Nom;
        $etablissement->Type = $request->Type;
        $etablissement->Adresse = $request->Adresse;
        

        $etablissement->save();

        return redirect()->route('Etablissement.index')->with('success', 'Etablissement Added successfully.');
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etablissement = Etablissement::find($id);
        return view('Components.Etablissements.show', compact('etablissement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $etablissement = Etablissement::find($id);
        
        return view('Components.Etablissements.edit', compact('etablissement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom'          =>  'required',
            'Type'         =>  'required',
            'Adresse'         =>  'required'
           
        ]);

     
        $etablissement = Etablissement::find($request->hidden_id);

        $etablissement->Nom = $request->Nom;
        $etablissement->Type = $request->Type;
        $etablissement->Adresse = $request->Adresse;
 

        $etablissement =Etablissement::find($id);
        $etablissement -> update($request->all());

        return redirect()->route('Etablissement.index')->with('success', 'Etablissement updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etablissement::find($id)->delete();

        return redirect()->route('Etablissement.index')->with('success', 'Etablissement deleted successfully');
    
    }
}
