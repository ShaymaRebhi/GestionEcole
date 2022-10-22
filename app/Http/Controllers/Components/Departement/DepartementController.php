<?php

namespace App\Http\Controllers\Components\Departement;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Departement::latest()->get();

        return view('Components.Departements.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Components.Departements.create');
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
            'Chef_Departement'         =>  'required',
            'Bloc'         =>  'required',
            'Etage'         =>  'required',
           
        ]);

    

      

        $departement = new Departement;

        $departement->Nom = $request->Nom;
        $departement->Chef_Departement = $request->Chef_Departement;
        $departement->Bloc = $request->Bloc;
        $departement->Etage = $request->Etage;
        

        $departement->save();

        return redirect()->route('Departement.index')->with('success', 'Departement Added successfully.');
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::find($id);
        return view('Components.Departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $departement = Departement::find($id);
        
        return view('Components.Departements.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom'          =>  'required',
            'Chef_Departement'         =>  'required',
            'Bloc'         =>  'required',
            'Etage'         =>  'required',
   
        ]);

     
        $departement = Departement::find($request->hidden_id);

        $departement->Nom = $request->Nom;
        $departement->Chef_Departement = $request->Chef_Departement;
        $departement->Bloc = $request->Bloc;
        $departement->Etage = $request->Etage;
 

        $departement =Departement::find($id);
        $departement -> update($request->all());

        return redirect()->route('Departement.index')->with('success', 'Departement updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departement::find($id)->delete();

        return redirect()->route('Departement.index')->with('success', 'Departement deleted successfully');
    
    }
}