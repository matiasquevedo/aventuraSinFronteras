@extends('admin.template.main')


@section('title', 'Lista de Categorias')

@section('content')
<div class="bg-white px-3 py-3 border rounded">
  <h4>Categorias <a class="" href="{{route('categories.create')}}" ><i style="font-size: 25px !important;" class="fas fa-plus-circle"></i></a></h4>
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>
          <a href="{{ route('categories.show', $category->id) }}">{{$category->name}}</a>
        </td>
        <td>
          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span class="fas fa-wrench"></span></a>
          <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>


      @endforeach
    
    </tbody>
  </table>
  {!! $categories->render() !!}   

</div>
</div>

@endsection