@extends('admin.template.main')

@section('title','Mensajes')

@section('content')
<div class="container">
	<h3>Mensajes Recibidos</h3>

	  <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>De:</th>
	      <th>Email</th>
	      <th>Fecha</th>
	      <th>Estado</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($mensajes as $mensaje)
	    <tr>
	      <td>
	        <a href="{{ route('mensajes.show', $mensaje->id) }}">{{$mensaje->nombre}} {{$mensaje->apellido}}</a>
	      </td>

	      <td>
	      	{{$mensaje->email}}
	      </td>
	      <td>
	      	{{$mensaje->created_at}}
	      </td>	      
	      <td>
	      	@if($mensaje->state == 0)
	      		<span class="badge badge-danger">Sin Leer</span>
	      	@elseif($mensaje->state == 1)
				<span class="badge badge-success">Visto</span>
	      	@endif
	      </td>
	      <td>
	        <a href="{{ route('mensaje.destroy', $mensaje->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	      </td>
	    </tr>


	    @endforeach
	  
	  </tbody>
	</table>
	{!! $mensajes->render() !!}  
</div>

@endsection