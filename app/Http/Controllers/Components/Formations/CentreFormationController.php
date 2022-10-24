<?php

namespace App\Http\Controllers\Components\Formations;

use App\Http\Controllers\Controller;
use App\Models\CentreFormation;
use App\Models\FormationExterne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CentreFormationController extends Controller
{

    public $search = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $data = CentreFormation::latest()->get();

        return view('Components.CentreFormations.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
  */
  if (request('search')) {
    $data = CentreFormation::where('NomCentreFormation', 'like', '%' . request('search') . '%')->get();
} else {
    $data = CentreFormation::latest()->get();
}
  return view('Components.CentreFormations.index', ['data' => $data]);



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
            'NomCentreFormation'          =>  'required | max:300 | min:3',
            'Formateur'         =>  'required| max:300 | min:3',
            'Lieux'         =>  'required| max:300 | min:3',
            'logo_centre'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
             
           
        ]);

    

        $file_name = time() . '.' . request()->logo_centre->getClientOriginalExtension();

        request()->logo_centre->move(public_path('images'), $file_name);

        $centreFormation = new CentreFormation;

        $centreFormation->NomCentreFormation = $request->NomCentreFormation;
        $centreFormation->Formateur = $request->Formateur;
        $centreFormation->Lieux = $request->Lieux;
        $centreFormation->logo_centre = $file_name;

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
        $formation = FormationExterne::where('centre_formations_id', $id)->get();
        

        return view('Components.CentreFormations.show', compact('centreFormation','formation'));
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
    public function update(Request $request, CentreFormation $centreFormation)
    {
        $request->validate([
            'NomCentreFormation'          =>  'required| max:300 | min:3',
            'Formateur'         =>  'required| max:300 | min:3',
            'Lieux'         =>  'required| max:300 | min:3',
            'logo_centre'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
             
   
        ]);
        $logo_centre = $request->hidden_logo_centre;

        if($request->logo_centre != '')
        {
            $logo_centre = time() . '.' . request()->logo_centre->getClientOriginalExtension();

            request()->logo_centre->move(public_path('images'), $logo_centre);
        }
     
        $centreFormation = CentreFormation::find($request->hidden_id);

        $centreFormation->NomCentreFormation = $request->NomCentreFormation;
        $centreFormation->Formateur = $request->Formateur;
        $centreFormation->Lieux = $request->Lieux;
 
        $centreFormation->logo_centre = $logo_centre;

       // $centreFormation =CentreFormation::find($id);
        //$centreFormation -> update($request->all());
        $centreFormation ->save();
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
