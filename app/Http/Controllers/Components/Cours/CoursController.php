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

    // Enregistrer un nouveau Post
            public function store1(Request $request) {
                // 1. La validation
                $this->validate($request, [
                    'nom_cours' => 'bail|required|string|max:255',
                    "image_cours" => 'bail|required|image|max:1024',

                ]);

                // 2. On upload l'image dans "/storage/app/public/posts"
                $chemin_image = $request->image_cours->store("cours");

                // 3. On enregistre les informations du Post
                Cours::create([
                    "nom_cours" => $request->nom_cours,
                    "typeCours" => $request->typeCours,
                    "image_cours" => $chemin_image,

                ]);

                // 4. On retourne vers tous les posts : route("posts.index")
                return redirect(route("cours.index"));
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
    public function update(Request $request, Cours $cours)
    {
        //
          $request->validate([
                              'nom_cours'          =>  'required',

                              'image_cours'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
                          ]);

                $image_cours = $request->hidden_image_cours;

                if($request->image_cours != '')
                {
                    $image_cours = time() . '.' . request()->image_cours->getClientOriginalExtension();
                    request()->image_cours->move(public_path('images'), $image_cours);
                }
                $cours = Cours::find($request->hidden_id);
                $cours->nom_cours = $request->nom_cours;
                $cours->typeCours = $request->typeCours;
                $cours->image_cours = $image_cours;
                $cours->modules_id= $request->modules_id;
              //  $cours = Cours::find($id);
                 $cours->save();
                         // $cours->update($request->all());

                return redirect()->route('cours.index')->with('success', 'Cours Data has been updated successfully');

    }




// Mettre à jour un Post
    public function update1(Request $request, Cours $cours) {
        // 1. La validation

                // Les règles de validation pour "title" et "content"
                $rules = [
                    'nom_cours' => 'bail|required|string|max:255',

                ];

                // Si une nouvelle image est envoyée
                if ($request->has("image_cours")) {
                    // On ajoute la règle de validation pour "picture"
                    $rules["image_cours"] = 'bail|required|image|max:1024';
                }

                $this->validate($request, $rules);

                // 2. On upload l'image dans "/storage/app/public/posts"
                if ($request->has("image_cours")) {

                    //On supprime l'ancienne image
                    Storage::delete($module->image_cours);

                    $chemin_image = $request->image_cours->store("cours");
                }
                $cours->modules_id= $request->modules_id;
                // 3. On met à jour les informations du Post
                $module->update([
                    "nom_cours" => $request->nom_cours,
                    "typeCours" => $request->typeCours,
                    "image_cours" => isset($chemin_image) ? $chemin_image : $cours->image_cours,

                ]);




                // 4. On affiche le Post modifié : route("posts.show")
                return redirect(route("cours.show", $cours));
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
