<title>Genre créé</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Ajouter un artiste dans la cdthèque</h1>
       {{-- FORMULAIRE POUR AJOUTER UN ARTISTE DANS CDTHEQUE --}}
       <div class=" row">
        <div class="col">
            <form action="/genre/create" method="post" class="pt-3">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="nom" class="form-control" id="nom"
                        placeholder="Entrez le nom du genre">
                    <label for="nom">Nom</label>
                </div>
             
                <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
            </form>
        </div>
        <div class="col">

</main>

@endsection