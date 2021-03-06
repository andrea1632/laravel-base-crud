@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div>
    </div>
@endsection