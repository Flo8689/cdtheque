<title>Genres</title>

@extends('layout')
    
@section('content')  

<main class="container-lg pt-5">
    <h1 class="pt-3">Genres</h1>
    <table class="table table-dark table-striped text-white mt-3">
        <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($genres as $genre)
            <tr>
              <td scope="col">{{$genre->id}}</td>
              <td scope="col">{{$genre->nom}}</td>
              <td scope="col">
                  <div class="d-flex justify-content-end">
                    <a href="/genre/show/{{$genre->id}}" class="text-white p-2">
                      <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="/genre/update/{{$genre->id}}" class="text-white p-2">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="/genre/{{$genre->id}}" class="text-white p-2">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <a href="/genre/create" class="btn btn-success btn-lg mt-3">Ajouter</a>
@endsection