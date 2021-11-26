@extends('main')
@section('content')
    <div class="container">
        <form action="/category/{{ $category->id }}/edit" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            {{ method_field("PATCH") }}
            @include("_partials/errors")
            <h3 class="text-center">Redaguokite kategorija</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
            </div>

            <div class="text-center mb-2">
                <button type="submit" class="btn btn-primary border-0">Submit</button>
            </div>
        </form>
    </div>

@endsection