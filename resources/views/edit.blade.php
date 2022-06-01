@extends('layout.layout')


@section('content')
<h1 class="text-uppercase text-primary py-5 text-center">modifica fumetto</h1>

@if( $errors->any() )
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('comics.update', $comic->id)}}" method="POST" novalidate>
    @method('PUT')

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" id="title" class="form-control" name="title" aria-describedby="emailHelp" value="{{ $comic->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}" required>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">thumb</label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ $comic->price }}" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}" required>
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">sale date</label>
        <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}" required>
    </div>
    <select class="form-select" name="type" id="type" required>
        <option @if( $comic->type === 'comic book' ) selected @endif>comic book</option>
        <option @if( $comic->type === 'graphic novel' ) selected @endif>graphic novel</option>
    </select>
    <button type="submit" class="btn btn-primary mt-3">INVIA</button>
</form>



@endsection
