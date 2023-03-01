<?php

namespace App\Http\Controllers;

use App\Models\Disque;
use App\Models\Artiste;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisqueControllers extends Controller
{
    public function index(){
        return view('disque');
    }

    public function create(Request $request){

        $artistes = Artiste::all();
        $genres = Genre::all();

        if($request->input('nom') && $request->input('annee') !== null) {
            $disque = new Disque();
            $disque->nom = $request->input('nom');
            $disque->artiste_id = $request->input('artiste_id');
            $disque->genre_id = $request->input('genre_id');
            $disque->annee  = $request->input('annee');
            $disque->save();
            return redirect('disque');
        }
       
        return view('disque.create', compact('artistes','genres'));
        
    }

    public function list(){

        $disques = Disque::all();
        return view('disque', compact('disques'));
    }
        
    public function show($id){

        $disque = Disque::findOrFail($id);
        return view('disque/show', compact('disque'));
    }
            
    
    public function update(Request $request, $id){

        $disque = Disque::findOrFail($id);
        $artistes = Artiste::All();
        $genres = Genre::All();

        if($request->isMethod('POST')){
            
            $disque->nom = $request->input('nom');
            $disque->artiste_id = $request->input('artiste_id');
            $disque->genre_id = $request->input('genre_id');
            $disque->annee  = $request->input('annee');
            $disque->update();
            return redirect('disque');
        }
       
        return view ('disque/update', compact('disque', 'artistes','genres'));
        // return view('disque/update', ['disque' => $disque, 'artistes' => $artistes], 'genres' => $genres); 
        //'disque' correspond a une clé, $disque a sa valeur. 
        // On ne peut pas mettre directement la valeur $disque, il faut passer par 
        // cette syntax [clé => valeur]. Dans la vue /update, on fait référence à 
        // a la clé disque cf.
    }

    public function delete($id){

        $disque = Disque::findOrFail($id);
        $disque->delete();
        return redirect('disque');
    }

    public function destroy(){
        return view('disque');
    }
}
