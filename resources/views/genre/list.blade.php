<title>Genre créé</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Genres</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Nom</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($genres as $genre)
            <tr>
              <td>{{$genre->id}}</td>
              <td>{{$genre->nom}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
  
</main>

@endsection