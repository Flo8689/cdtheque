<title>Artistes</title>

@extends('layout')
    
@section('content')  

<main class="container-lg pt-5">
    <h1 class="pt-3">Artistes</h1>
    <table class="table table-dark table-striped text-white mt-3">
        <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>
          

          @foreach ($artistes as $artiste)  

            <tr>
              <td scope="col">{{$artiste->id}}</td>
              <td scope="col">{{$artiste->nom}}</td>
              <td scope="col">
                <div class="d-flex justify-content-end">
                  <div class="d-flex justify-content-end">
                    <a href="/artiste/show/{{$artiste->id}}" class="text-white p-2">
                      <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="/artiste/update/{{$artiste->id}}" class="text-white p-2">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="/artiste/{{$artiste->id}}" class="text-white p-2">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <a href="/artiste/create" class="btn btn-success btn-lg mt-3">Ajouter</a>
</main>

@endsection