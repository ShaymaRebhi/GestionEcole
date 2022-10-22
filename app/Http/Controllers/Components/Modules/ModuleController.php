<?php

namespace App\Http\Controllers\Components\Modules;

use App\Http\Controllers\Controller;
use App\Models\Module;
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
    public function store(Request $request)
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
                return view('Components.Module.show', compact('module'));
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
    public function update(Request $request, $id)
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
                            $image_modules = time() . '.' . request()->image_modules->getClientOriginalExtension();

                            request()->image_modules->move(public_path('images'), $image_modules);
                        }



                        $module->module = $request->nom_modules;

                        $module->image_modules = $image_modules;
         $module = Module::find($id);
                        // $cours->save();
                                  $module->update($request->all());

                        return redirect()->route('module.index')->with('success', 'module Data has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Module::find($id)->delete();
                        return redirect()->route('module.index')->with('success', 'Module Data deleted successfully');

    }
}
