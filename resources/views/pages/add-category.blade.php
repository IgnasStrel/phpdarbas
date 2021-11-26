@extends('main')
@section('content')
    <div class="container">
        <form action="storeCategory" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @include("_partials/errors")
            <h3 class="text-center">Pridėkite kategoriją!</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="text-center mb-2">
                <button type="submit" class="btn btn-primary border-0">Submit</button>
            </div>
        </form>
    </div>

@endsection