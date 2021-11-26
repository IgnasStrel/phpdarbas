@extends("main")
@section("content")
<div class="card bg-light d-grid justify-content-center" style="border-radius: 0">
    <div class="card-body text-center p-4 p-lg-5 pt-3 pt-lg-8">
        <div class="mb-4 mt-4">
            <div class="justify-content-center mt-5">
                <div class="sol-sm-4">
                    <img class="border border-1" src="{{ url('storage/'.$skateboard->img) }}" alt="Photo" style="max-width: 500px;">
                </div>
                <div>
                <h2 class="fs-4 fw-bold">{{$skateboard->title}}</h2>
                <p class="mb-8">{{$skateboard->description}}</p>
                <p class="card-text">Category: {{App\Models\Category::where('id', $skateboard->category)->get()[0]->name}}</p>
                <p class="mb-2">{{ number_format($skateboard->price, 2)}} €</p>
                <a href="/skateboard/{{ $skateboard->id }}/edit" class="btn btn-warning my-2 border-0">Redaguoti</a>
                <a href="/skateboard/{{ $skateboard->id }}/delete/ask" class="btn btn-danger my-2 mx-4 border-0">Ištrinti</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
