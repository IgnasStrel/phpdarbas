@extends('main')
@section('content')

            <div class="card bg-light border-8 h-100 bg-dark mt-1">
                <div class="card-body text-center p-4 p-lg-5 pt-3 pt-lg-8">
                    <div class="bg-dark bg-secondary text-white rounded-3 mb-4 mt-4"><div>
                    <h2 class="fs-4 fw-bold">{{$category->name}}</h2>
                </div>
                    <div class="card-header">
                        Ar tikrai norite ištrinti šį įvykį?
                        <a href="/category/{{ $category->id }}/delete/confirm" class="btn btn-danger border-0">Taip</a>
                        <a href="/category/{{ $category->id }}" class="btn btn-primary border-0">Ne</a>
                    </div>
            </div>
    
@endsection