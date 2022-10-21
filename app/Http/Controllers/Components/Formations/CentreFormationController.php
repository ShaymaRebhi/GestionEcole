<?php

namespace App\Http\Controllers\Components\Formations;

use App\Http\Controllers\Controller;
use App\Models\CentreFormation;
use Illuminate\Http\Request;

class CentreFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CentreFormation::latest()->get();

        return view('Components.CentreFormations.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Components.CentreFormations.create');
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
            'NomCentreFormation'          =>  'required',
            'Formateur'         =>  'required',
            'Lieux'         =>  'required',
           
        ]);

    

      

        $centreFormation = new CentreFormation;

        $centreFormation->NomCentreFormation = $request->NomCentreFormation;
        $centreFormation->Formateur = $request->Formateur;
        $centreFormation->Lieux = $request->Lieux;
        

        $centreFormation->save();

        return redirect()->route('CentreFormation.index')->with('success', 'CentreFormation Added successfully.');
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CentreFormation  $centreFormation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centreFormation = CentreFormation::find($id);
        return view('Components.CentreFormations.show', compact('centreFormation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CentreFormation  $centreFormation
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $centreFormation = CentreFormation::find($id);
        
        return view('Components.CentreFormations.edit', compact('centreFormation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CentreFormation  $centreFormation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NomCentreFormation'          =>  'required',
            'Formateur'         =>  'required',
            'Lieux'         =>  'required',
   
        ]);

     
        $centreFormation = CentreFormation::find($request->hidden_id);

        $centreFormation->NomCentreFormation = $request->NomCentreFormation;
        $centreFormation->Formateur = $request->Formateur;
        $centreFormation->Lieux = $request->Lieux;
 

        $centreFormation =CentreFormation::find($id);
        $centreFormation -> update($request->all());

        return redirect()->route('CentreFormation.index')->with('success', 'Centre Formation Data has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CentreFormation  $centreFormation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CentreFormation::find($id)->delete();

        return redirect()->route('CentreFormation.index')->with('success', 'Centre Formation Data deleted successfully');
    
    }
}
