<title>Disques</title>

@extends('layout')
    
@section('content')  

<main class="container-lg pt-5">
    <h1 class="pt-3">Disques</h1>
    <table class="table table-dark table-striped text-white mt-3">
      <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Disque</th>
            <th scope="col">Artiste</th>
            <th scope="col">Genre</th>
            <th scope="col">Année</th>
            <th scope="col"></th>
        </tr>
        <thead>
        <tbody>
          @foreach ($disques as $disque)
            <tr>
              <td scope="col">{{$disque->id}}</td>
              <td scope="col">{{$disque->nom}}</td>
              <td scope="col">{{$disque->artiste->nom}}</td>
              <td scope="col">{{$disque->genre->nom}}</td>
              <td scope="col">{{$disque->annee}}</td>
              <td scope="col" >
                <div class="d-flex justify-content-end">
                    <a href="/disque/show/{{$disque->id}}" class="text-white p-2">
                      <i class="fa-solid fa-eye"></i>  
                    </a>
                    <a href="/disque/update/{{$disque->id}}" class="text-white p-2">
                      <i class="fa-solid fa-pen-to-square"></i>  
                    </a>
                    <a href="/disque/{{$disque->id}}" class="text-white p-2">
                      <i class="fa-solid fa-trash"></i>  
                    </a>      
                  </div>    
              </td>
            </tr>
          @endforeach
        <tbody>
    </table>
    <a href="/disque/create" class="btn btn-success btn-lg mt-3">Ajouter</a>
</main>

@endsection

