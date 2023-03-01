<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtisteControllers extends Controller
{
    public function index(){
        return view('artiste');
    }


    public function create(Request $request){

        // ($request->isMethod('POST')
        
        if($request->input('nom') !== null){
            $artist = new Artiste;
            $artist->nom = $request->input('nom');
            $artist->save();
        
            return redirect('artiste');
        }

      return view('artiste.create');
    }

    public function list(){

        $artistes = Artiste::all(); // ['artistes' => $artistes]
        return view('artiste', compact('artistes'));
    }

    
    public function show($id){

        $artiste = Artiste::findOrFail($id);
        return view('artiste.show', ['artiste' => $artiste]);
    }
    
    public function update(Request $request, $id){
        
        $artiste = Artiste::findOrFail($id);

        if($request->input('nom') !== null){
            
            $artiste->nom = $request->input('nom');
            $artiste->update();

            return redirect('artiste');
        }

        return view('artiste.update', compact('artiste'));
    }

    public function delete($id){

        $artiste = Artiste::findOrFail($id);
        $artiste->delete();
        return redirect('artiste');
    }

    public function destroy(){
        return view('artiste');
    }
}
