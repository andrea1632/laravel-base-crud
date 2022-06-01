@extends('layout.layout')
@section('content') 
    <div class="container">
        <div class="row">
          @if(session('message'))
            <div class="alert alert-succes">
                {{session('message')}}
            </div>
          @endif
            @forelse ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p style="overflow-y: auto; height: 150px;" class="card-text">{{$comic->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>price :</strong>{{$comic->price}}</li>
                  <li class="list-group-item"><strong>series :</strong>{{$comic->series}}</li>
                  <li class="list-group-item"><strong>sale date :</strong>{{$comic->sale_date}}</li>
                  <li class="list-group-item"><strong>type :</strong>{{$comic->type}}</li>
                </ul>
                <div class="card-body">
                  <a href=" {{route('comics.show', $comic->id)}} " class="card-link">Explore</a>
                  <a href="{{route('comics.edit', $comic->id)}}" class="card-link">Modifica Personaggio/Fumetto</a>
                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-2">Elimina Fumetto</button>
                  </form>
                </div>
              </div>
        @empty
    
            <h2>Error</h2>
    
        @endforelse
        </div>
    </div>
@endsection