<title>Update Artiste</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Update disque dans la cdthèque</h1>
       {{-- FORMULAIRE POUR AJOUTER UN ARTISTE DANS CDTHEQUE --}}
       <div class=" row">
        <div class="col">
            <form action="/disque/update/{{$disque->id}}" method="post" class="pt-3">
                @csrf   
                <div class="form-floating mb-3">
                    <input value="{{ $disque->nom }}" type="text" name="nom" class="form-control mb-2" id="nom"
                        placeholder="Entrez le nom du disque">
                    <label for="nom">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="artiste_id" id="artiste_id" class="form-select">
                        @foreach ($artistes as $artiste)
                            <option value="{{ $artiste->id }}" selected>{{ $artiste->nom }}</option>
                        @endforeach
                    </select>
                    <label for="artiste_id">Artiste</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="genre_id" id="genre_id" class="form-select    ">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" selected>{{ $genre->nom }}</option>
                        @endforeach
                    </select>
                    <label for="genre_id">Genre</label>
                </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $disque->annee }}" type="text" name="annee" class="form-control" id="annee"
                            placeholder="Entrez l'année du disque">
                        <label for="nom">Année</label>
                    </div>
                <button type="submit" class="btn btn-success btn-lg mt-3">Valider</button>
            </form>
        </div>
        <div class="col">

</main>

@endsection