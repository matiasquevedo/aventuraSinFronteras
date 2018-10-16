@extends('admin.template.main')

@section('title','Mensajes')

@section('content')
<div class="container">
	<h3>Mensajes de <i>{{$mensaje->nombre}} {{$mensaje->apellido}}</i>  </h3>
	<h4><i class="far fa-envelope"></i>{{$mensaje->email}}
	@if($mensaje->telefono != null)
		 <i class="fas fa-phone"></i> {{$mensaje->telefono}}
	@endif
	</i></h4>
	<br><br>
	<div class="text-justify">
		<p> {{$mensaje->descripcion}} </p>
	</div>
</div>
@endsection