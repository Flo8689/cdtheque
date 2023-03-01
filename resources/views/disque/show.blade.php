<title>Détails du disque</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Détails du disque</h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Disque</th>
            <th>Artiste</th>
            <th>Genre</th>
            <th>Année</th>
        </tr>
           <tr>
            <td>{{$disque->id}}</td>
            <td>{{$disque->nom}}</td>
            <td>{{$disque->artiste->nom}}</td>
            <td>{{$disque->genre->nom}}</td>
            <td>{{$disque->nom}}</td>
          </tr>
    </table>
  
</main>

@endsection