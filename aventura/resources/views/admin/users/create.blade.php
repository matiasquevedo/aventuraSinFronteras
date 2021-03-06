@extends('admin.template.main')


@section('title', 'Nuevo Usuario')

@section('content')

<div class="bg-white px-3 py-3 border rounded">

	<h4>Nuevo Usuario</h4>
	@if(count($errors)>0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)

					<li>
						{{ $error}}
					</li>

				@endforeach
			</ul>
			

		</div>
		
	@endif

	{!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'nombre@server.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo Usuario') !!}
			{!! Form::select('type',['admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}
	
</div>

	


@endsection