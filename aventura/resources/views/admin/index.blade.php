@extends('admin.template.main')


@section('title', 'Inicio')

@section('content')
<div class="bg-white px-3 py-3 border rounded"><h4>Panel de Administración</h4></div>
<div class="container"><br>
	<div class="row">
		<div class="col-12">
			{{-- menu de productos --}}
			<div class="card" style="width: 100%;">
			  <div class="card-header" >
			  	<div class="inline">
			  		Actividades <span class="badge badge-secondary">{{ count(\App\Actividad::all())}}</span> 
			  		<a class="float-right" href="{{route('actividades.create')}}" ><i style="font-size: 25px !important;" class="fas fa-plus-circle"></i></a>
			  	</div>				    
			    
			  </div>
			  <ul class="list-group list-group-flush text-left">
			    <li class="list-group-item"><a href="{{route('categories.index')}}">Categorias</a></li>
			  	<li class="list-group-item"><a href="{{route('actividades.index')}}">Lista de Actividades</a></li>
			  </ul>
			</div>
			{{-- menu de productos --}}			

			<div class="row mt-3">
				<div class="col-6">
					{{-- Albumes de Fotos --}}
					<div class="card" style="width: 100%;">
					  <div class="card-header" >
					  	<div class="inline">
					  		Albumes de Fotos
					  	</div>				    
					    
					  </div>
					  <ul class="list-group list-group-flush text-left">
					    <li class="list-group-item"><a href="{{route('albumes.index')}}">Lista de Albumes</a></li>
					    <li class="list-group-item"><a href="{{route('albumes.create')}}">Nuevo Album</a></li>
					  </ul>
					</div>
					{{-- Albumes de Fotos --}}
				</div>
				<div class="col-6">
					<div class="card" style="width: 100%;">
					  <div class="card-header" >
					  	<div class="inline">
					  		Paquetes de actividades <span class="badge badge-secondary">{{ count(\App\Paquete::all())}}</span> 
					  		<a class="float-right" href="{{route('paquetes.create')}}" ><i style="font-size: 25px !important;" class="fas fa-plus-circle"></i></a>
					  	</div>				    
					    
					  </div>
					  <ul class="list-group list-group-flush text-left">
					  	<li class="list-group-item"><a href="{{route('paquetes.index')}}">Lista de Paquetes</a></li>
					  </ul>
					</div>
				</div>
			</div>

			<div class="card mt-3" style="width: 100%;">
			  <div class="card-header">
			    Usuarios
			  </div>
			  <ul class="list-group list-group-flush text-left">
			    <li class="list-group-item"><a href="{{route('users.index')}}">Lista de Usuarios</a></li>
			  </ul>
			</div>	
							
		</div>

		{{-- <div class="col-4">
			<div class="card" style="width: 100%;">
			  <div class="card-header">
			    Mensajes <span class="badge badge-secondary">{{ count($mensajes) }}</span> 
			  </div>
			  <ul class="list-group list-group-flush text-left">
			  	@foreach($mensajes as $mensaje)
			  		<li class="list-group-item d-inline">

			  			<div class="d-inline" >
			  				<p style="position:relative;width:100%;overflow:hidden;white-space: nowrap;text-overflow: ellipsis;word-wrap: break-word;">
			  					@if($mensaje->state == 0)
			  						<span class="badge badge-danger">Sin Leer</span>		
			  					@endif

			  					@if($mensaje->state == 1)
			  						<span class="badge badge-success">Leido</span>		
			  					@endif			  					
			  					De: <a href="">{{$mensaje->email}}</a>			  				
			  				</p>
			  			</div>
			  		</li>
			  	@endforeach
			  	<li class="list-group-item ">
			  		Ver todos
			  	</li>
			  </ul>
			</div>			
		</div> --}}
	</div>
</div>



@endsection