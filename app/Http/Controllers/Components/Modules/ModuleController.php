<?php

namespace App\Http\Controllers\Components\Modules;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = Module::latest()->paginate(5);

                        return view('Components.Module.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Components.Module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //
          $request->validate([
                            'nom_modules'          =>  'required',
                            'image_modules'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
                        ]);

                        $file_name = time() . '.' . request()->image_modules->getClientOriginalExtension();

                        request()->image_modules->move(public_path('images'), $file_name);

                        $module = new Module;

                        $module->nom_modules = $request->nom_modules;

                        $module->image_modules = $file_name;

                       $module->save();
                        //    Cours::create($request->all());
                        return redirect()->route('module.index')->with('success', 'Module Added successfully.');
    }



    // Enregistrer un nouveau Post
        public function store(Request $request) {
            // 1. La validation
            $this->validate($request, [
                'nom_modules' => 'bail|required|string|max:255',
                "image_modules" => 'bail|required|image|max:1024',

            ]);

            // 2. On upload l'image dans "/storage/app/public/posts"
            $chemin_image = $request->image_modules->store("modules");

            // 3. On enregistre les informations du Post
            Module::create([
                "nom_modules" => $request->nom_modules,
                "image_modules" => $chemin_image,

            ]);

            // 4. On retourne vers tous les posts : route("posts.index")
            return redirect(route("module.index"));
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         $module = Module::find($id);

        $cours = Cours::where('modules_id', $id)->get();
                return view('Components.Module.show', compact('module','cours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $module = Module::find($id);
                  return view('Components.Module.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        //
          $request->validate([
                                      'nom_modules'          =>  'required',
                                      'image_modules'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
                                  ]);
                    $module = Module::find($request->hidden_id);

                        $image_modules = $request->hidden_image_modules;

                        if($request->image_modules != '')
                        {
                         $file_name = time() . '.' . request()->image_modules->getClientOriginalExtension();
                         request()->image_modules->move(public_path('images'), $file_name);
                        }
                        $module->module = $request->nom_modules;
                        $module->image_modules = $file_name;
                        $module = Module::find($id);
                        // $cours->save();
                        $module->update($request->all());
                        return redirect()->route('module.index')->with('success', 'module Data has been updated successfully');


    }


// Mettre à jour un Post
    public function update(Request $request, Module $module) {
        // 1. La validation

                // Les règles de validation pour "title" et "content"
                $rules = [
                    'nom_modules' => 'bail|required|string|max:255',

                ];

                // Si une nouvelle image est envoyée
                if ($request->has("image_modules")) {
                    // On ajoute la règle de validation pour "picture"
                    $rules["image_modules"] = 'bail|required|image|max:1024';
                }

                $this->validate($request, $rules);

                // 2. On upload l'image dans "/storage/app/public/posts"
                if ($request->has("image_modules")) {

                    //On supprime l'ancienne image
                    Storage::delete($module->image_modules);

                    $chemin_image = $request->image_modules->store("module");
                }

                // 3. On met à jour les informations du Post
                $module->update([
                    "nom_modules" => $request->nom_modules,
                    "image_modules" => isset($chemin_image) ? $chemin_image : $module->image_modules,

                ]);
                // 4. On affiche le Post modifié : route("posts.show")
                return redirect(route("module.show", $module));
            }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        //
         Module::find($id)->delete();
                        return redirect()->route('module.index')->with('success', 'Module Data deleted successfully');

    }


    public function destroy(Module $module) {
        // On supprime l'image existant
        Storage::delete($module->image_modules);

        // On les informations du $post de la table "posts"
        $module->delete();

        // Redirection route "posts.index"
        return redirect(route('module.index'));
    }
}
