<?php

namespace App\Http\Controllers\Components\Cours;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $data = Cours::latest()->paginate(5);

                return view('Components.Cours.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data1 = Module::latest()->get();
        return view('Components.Cours.create', compact('data1'))->with('i', (request()->input('page', 1) - 1) * 5);
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
                    'nom_cours'          =>  'required',

                    'image_cours'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
                ]);

                $file_name = time() . '.' . request()->image_cours->getClientOriginalExtension();

                request()->image_cours->move(public_path('images'), $file_name);

                $cours = new Cours;

                $cours->nom_cours = $request->nom_cours;
                $cours->typeCours = $request->typeCours;
                $cours->image_cours = $file_name;
                $cours->modules_id= $request->modules_id;

               $cours->save();
                //    Cours::create($request->all());
                return redirect()->route('cours.index')->with('success', 'Cours Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $cours = Cours::find($id);
         $module = Module::find($cours->modules_id);
        return view('Components.Cours.show', compact('cours','module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cours = Cours::find($id);
        $module = Module::find($cours->modules_id);
          $data1 = Module::latest()->get();
          return view('Components.Cours.edit', compact('cours','module'), compact('data1'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $request->validate([
                              'nom_cours'          =>  'required',

                              'image_cours'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
                          ]);
$cours = Cours::find($request->hidden_id);
                $image_cours = $request->hidden_image_cours;

                if($request->image_cours != '')
                {
                    $image_cours = time() . '.' . request()->image_cours->getClientOriginalExtension();

                    request()->image_cours->move(public_path('images'), $image_cours);
                }



                $cours->nom_cours = $request->nom_cours;

                $cours->typeCours = $request->typeCours;

                $cours->image_cours = $image_cours;
                $cours->modules_id= $request->modules_id;
                $cours = Cours::find($id);
                // $cours->save();
                          $cours->update($request->all());

                return redirect()->route('cours.index')->with('success', 'Cours Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         //$cours->delete();
         //sleep(1);
         Cours::find($id)->delete();
                return redirect()->route('cours.index')->with('success', 'Cours Data deleted successfully');

    }


    public function deletePost($id){
            Cours::find($id)->delete();


            return redirect()->route('cours.index')->with('success', 'Cours Data deleted successfully');

        }
}
