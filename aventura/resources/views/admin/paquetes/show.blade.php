@extends('admin.template.main')


@section('title', 'Paquete: '.$paquete->title)

@section('content')

<div class="bg-white px-3 py-3 border rounded">
  <div class="d-flex d-inline">
    <h4>Paquete de Actividades: {{$paquete->title}}</h4>
    <div class="float-right">
      @if($paquete->state == '0')
      <div class="d-flex d-inline">          
        <h4><span class="badge badge-danger">Sin Publicar</span></h4>
        </span><a class="btn btn-success" href="{{ route('paquetes.post',$paquete->id)}}">Publicar</a>
      </div>
      @else
      <div class="d-flex d-inline">          
        <h4><span class="badge badge-success">Publicada</span></h4>
        <a class="btn btn-danger" href="{{ route('paquetes.post',$paquete->id)}}">No Publicar</a>
      </div>
      @endif
    </div>
  </div>
  <h4>${{$paquete->precioCliente}} 
    @if($paquete->descuento>0)
    <span class="badge badge-info">-{{$paquete->descuento}}%</span>
    @endif
  </h4>

  <div class="mt-3">
    <h5>Descripción</h5>
    {!!$paquete->descripcion!!}
  </div>

  <div class="mt-3">
    <div >
      <h5>Incluye las actividades</h5>

        <ul class="list-group">
          @foreach($paquete->actividadPaquete as $actividad)
          
          <li class="list-group-item"><a href="{{ route('actividades.show', $actividad->actividad->id) }}">{{$actividad->actividad->title}}</a></li>
          @endforeach
        </ul>


    </div>
  </div>


        <div class="panel panel-default">
          <div class="panel-body" id="content">
            
                <div class="row">
                  <div class="col-md-6">
                    </div>
                    
                </div>          
          </div>
      </div>
    </div>
  
</div>
  		

@endsection