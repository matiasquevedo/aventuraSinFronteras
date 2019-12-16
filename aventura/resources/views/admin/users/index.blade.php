@extends('admin.template.main')


@section('title', 'Lista de Usuarios')

@section('content')
<div class="bg-white px-3 py-3 border rounded">
  <div class="">
    <h4>Lista de Usuarios </h4>
  </div>  
  <div class="container">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Tipo</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
      @if(empty($users))
        <tr>
          <td></td>
          <td>No hay usuarios para Mostrar</td>
          <td></td>
          <td></td>
        </tr>
      @else
        @foreach($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>
            @if($user->type == "member")
              <span class="label label-success">{{ $user->type }}</span>
            @else
              <span class="label label-info">{{$user->type}}</span>
            @endif
          </td>
          <td>
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="fas fa-wrench"></span></a><a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
          </td>
        </tr>


          @endforeach
      

      @endif

        
      </tbody>
    </table>
    {!! $users->render() !!}
    
    <div class="text-right mt-3">
       <a href="{{ route('users.create')}}" class="btn btn-info">Nuevo Usuario</a>
    </div>
  </div>
  
</div>



@endsection

@section('js')

@endsection