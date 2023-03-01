<title>Détails du genre</title>

@extends('layout')
    
@section('content')  

<main class="container-lg py-5">
    <h1 class="py-3">Détails du genre</h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
        </tr>
           <tr>
            <td>{{$genre->id}}</td>
            <td>{{$genre->nom}}</td>
          </tr>
    </table>
  
</main>

@endsection