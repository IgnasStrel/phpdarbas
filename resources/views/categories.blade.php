<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorijos') }}
        </h2>
    </x-slot>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>Jusu kategorija</th>
      <th>Veiksmai</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th>{{$category->name}}</th>
      <th><a href="" class="btn btn-success"><i class="fas fa-arrow-right"></i></a>
          <a href="/category/{{ $category->id }}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>
          <a href="/category/{{ $category->id }}/delete/ask" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
</x-app-layout>
