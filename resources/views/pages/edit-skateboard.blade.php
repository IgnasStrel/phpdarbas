@extends('main')
@section('content')
    <div class="container">
        <form action="/skateboard/{{ $skateboard->id }}/edit" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            {{ method_field("PATCH") }}
            @include("_partials/errors")
            <h3 class="text-center">Redaguoti</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$skateboard->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Aprašymas</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{$skateboard->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Choose category</label>
                <select class="form-select" name="category" id="category" value="{{$skateboard->category}}">
                @foreach (App\Models\Category::all() as $category)
                    @if ($category->id == $skateboard->category)
                        <option value="{{ $category->id }}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                    @endif
                @endforeach
                </select>
            </div class="mb-3">
            <label for="price" class="form-label">Kaina</label>
            <div class="input-group mb-3">
                <span class="input-group-text">€</span>
                <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{$skateboard->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Pasirinkite nuotrauka</label>
                <input type="file" class="form-control" name="img">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary border-0">Pateikti</button>
            </div>
        </form>
    </div>

@endsection