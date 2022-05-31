@extends('layout.layout')


@section('content')
<h1 class="text-uppercase text-primary py-5 text-center">crea un nuovo fumetto</h1>

<form action="{{route('comics.store')}}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" id="title" class="form-control" name="title" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">thumb</label>
        <input type="text" class="form-control" name="thumb" id="thumb" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" step="0.01" class="form-control" name="price" id="price" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" name="series" id="series" required>
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">sale date</label>
        <input type="date" name="sale_date" class="form-control" id="sale_date" required>
    </div>
    <select class="form-select" name="type" id="type" required>
        <option selected>comic book</option>
        <option>graphic novel</option>
    </select>
    <button type="submit" class="btn btn-primary mt-3">INVIA</button>
</form>



@endsection
