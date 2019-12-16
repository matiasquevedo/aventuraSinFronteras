@extends('admin.template.main')


@section('title', 'Lista de Paquetes')

@section('content')

<div class="bg-white px-3 py-3 border rounded">
  <h4>Lista de Paquetes <a class="" href="{{route('paquetes.create')}}" ><i style="font-size: 25px !important;" class="fas fa-plus-circle"></i></a></h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Usuario</th>
        <th>Estado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($paquetes as $paquete)
      <tr>
        <td><a href="{{ route('paquetes.show', $paquete->id) }}">{{$paquete->title}}</a></td>
        <td>{{$paquete->user->name}}</td>
        <td>
          @if($paquete->state == "0")
            <h5><span class="badge badge-danger">Sin Publicar</span></h5>
          @else
            <h5><span class="badge badge-success">Publicada</span></h5>
          @endif            
        </td>
        <td>
          <a href="{{ route('paquetes.edit', $paquete->id) }}" class="btn btn-warning"><i class="fas fa-wrench"></i>
          </a>
          <a href="{{ route('paquetes.destroy', $paquete->id) }}" class="btn btn-danger">
            <i class="fas fa-trash-alt"></i>
          </a>
        </td>
      </tr>
      @endforeach        
    </tbody>
    
  </table>
  {{$paquetes->render()}}
</div>

@endsection