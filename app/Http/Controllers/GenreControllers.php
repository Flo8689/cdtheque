<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreControllers extends Controller
{
    public function index(){
        return view('genre');
    }

    public function create(Request $request){

        // ($request->isMethod('POST')
        
        if($request->input('nom') !== null){
            $artist = new Genre();
            $artist->nom = $request->input('nom');
            $artist->save();
        
            return redirect('genre');
        }

      return view('genre.create');
    }

    public function list(){

        $genres = Genre::all();
        return view('genre', compact('genres'));
    }

    public function show($id){

        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }
    
    public function update(Request $request, $id){
        
        $genre = Genre::findOrFail($id);

        if($request->input('nom') !== null){
            
            $genre->nom = $request->input('nom');
            $genre->update();

            return redirect('genre');
        }

        return view('genre.update', compact('genre'));
    }

    public function delete($id){

        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect('genre');
    }

    public function destroy(){
        return view('genre');
    }

    
}
