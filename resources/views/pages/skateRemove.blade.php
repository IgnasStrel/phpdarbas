@extends('main')
@section('content')

            <div class="card bg-light border-8 h-100 bg-dark mt-1">
                <div class="card-body text-center p-4 p-lg-5 pt-3 pt-lg-8">
                    <div class="bg-dark bg-secondary text-white rounded-3 mb-4 mt-4"><i class="fas fa-caret-down text-warning"></i><div>
                    <h2 class="fs-4 fw-bold">{{$skateboard->title}}</h2>
                    <p class="mb-8">{{$skateboard->description}}</p>
                    <p class="card-text">Category: {{App\Models\Category::where('id', $skateboard->category)->get()[0]->name}}</p>
                    <p class="mb-2">{{ number_format($skateboard->price, 2)}} €</p>
                </div>
                    <div class="card-header">
                        Ar tikrai norite ištrinti šį įvykį?
                        <a href="/skateboard/{{ $skateboard->id }}/delete/confirm" class="btn btn-danger border-0">Taip</a>
                        <a href="/skateboard/{{ $skateboard->id }}" class="btn btn-primary border-0">Ne</a>
                    </div>
            </div>
    
@endsection