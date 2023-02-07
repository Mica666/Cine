<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Combo;
use Illuminate\Support\Facades\Storage;

class ComboController extends Controller
{
 
    public function index()
    {
        $combos = Combo::all();
        return view('admin.Combo.index', compact('combos'));
    }


    public function create()
    {
        return view('admin.Combo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:combos',
            'descripcion' => 'required',
            'precio'=> 'required',
            'file' => 'required'
        ]);

        $combo = Combo::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('image', $request->file('file'));
            $combo->image()->create([
            'url' => $url]);
        }

            return redirect()->route('admin.Combo.index', $combo)->with('creado', 'ok');
    }


    public function edit(Combo $combo)
    {
       /*  $this->authorize('author', $combo); */
        return view('admin.Combo.edit', compact('combo'));
    }

  
    public function update(Request $request, Combo $combo)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:combos,slug,$combo->id",
            'descripcion' => 'required',
            'precio'=> 'required',
            'file' => 'required'
        ]);

        $combo->update($request->all());


        if ($request->file('file')){
            $url = Storage::put('image', $request->file('file'));
            $combo->image()->update([
            'url' => $url]);
        }


            return redirect()->route('admin.Combo.index', $combo)->with('act', 'ok');
    }

  
    public function destroy(Combo $combo)
    {
        $combo->delete();
        return redirect()->route('admin.Combo.index')->with('eliminar', 'ok');
    }
}
