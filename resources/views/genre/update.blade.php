<title>Update Artiste</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Update genre dans la cdthèque</h1>
       {{-- FORMULAIRE POUR AJOUTER UN ARTISTE DANS CDTHEQUE --}}
       <div class=" row">
        <div class="col">
            <form action="/genre/update/{{$genre->id}}" method="post" class="pt-3">
                @csrf
                <div class="form-floating mb-3">
                    <input value="{{$genre->nom}}" type="text" name="nom" class="form-control" id="nom"
                        placeholder="Entrez le nom du genre">
                    <label for="nom">Nom</label>
                </div>
             
                <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
            </form>
        </div>
        <div class="col">

</main>

@endsection