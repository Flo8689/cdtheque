<title>Détails de l'artiste</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Détails de l'artiste</h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
        </tr>
           <tr>
            <td>{{$artiste->id}}</td>
            <td>{{$artiste->nom}}</td>
          </tr>
    </table>
  
</main>

@endsection