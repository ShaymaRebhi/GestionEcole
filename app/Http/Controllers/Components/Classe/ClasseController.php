<?php

namespace App\Http\Controllers\Components\Classe;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = Classe::latest()->paginate(5);

                        return view('Components.Classe.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Components.Classe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
                            'nom_classe'          =>  'required',
                            'niveau'          =>  'required',
                            ]);
                        $classe = new Classe;

                        $classe->nom_classe = $request->nom_classe;
                        $classe->niveau = $request->niveau;
                        $classe->option = $request->option;

                       $classe->save();
                        //    Cours::create($request->all());
                        return redirect()->route('classe.index')->with('success', 'Classe Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $classe = Classe::find($id);
         $users=$classe->users()->get();
                return view('Components.Classe.show', compact('classe','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $classe = Classe::find($id);
                  return view('Components.Classe.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           $request->validate([
                                      'nom_classe'          =>  'required',
                                      'niveau'          =>  'required',
                                      ]);
        $classe = Classe::find($request->hidden_id);

                        $classe->nom_cours = $request->nom_cours;

                        $classe->niveau = $request->niveau;

                       $classe->option = $request->option;
         $classe = Classe::find($id);
                                  $classe->update($request->all());

                        return redirect()->route('classe.index')->with('success', 'classe Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           Cours::find($id)->delete();
                        return redirect()->route('cours.index')->with('success', 'Cours Data deleted successfully');

    }
}
