@extends('main')
@section('content')
<div class="col-sm-12 justify-content-center home-carousel" width="200px">
<style>
body {
  background-image: url('https://wallpaperboat.com/wp-content/uploads/2020/06/04/43177/skateboard-20.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style> 
</div>

    <div class="container">
        <div class="Tekstas text-center my-5 text-white" style="background-color:transparent; font-size: 100px" role="alert">
        <strong> Produktai </strong>
        </div>
    </div>
    
<div class="container mb-5">

        <div class="row mb-5">
        @foreach($skateboards as $skateboard)
            <div class="col-sm-4 mb-5">
                <div class="card card-hover">
                    <div class="card-body text-center">
                        <img class="card-img-top" src="{{ url('storage/'.$skateboard->img) }}" alt="Photo" style="height: 350px;">
                        <strong class="card-title">{{$skateboard->title}}</strong>
                        <p class="card-text">{{$skateboard->description}}</p>
                        <p class="card-text">Category: {{App\Models\Category::where('id', $skateboard->category)->get()[0]->name}}</p>
                        <p class="mb-2">{{ number_format($skateboard->price, 2)}} €</p>
                    </div>
                    <div class="card-header">
                        <div class="text-center">
                            <a href="/skateboard/{{$skateboard->id}}" class="btn btn-primary mb-3 border border-warning border-2 border-0">Plačiau</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $skateboards->links('_partials.links') }}
    </div>
   
@endsection