@extends('admin.template.main')


@section('title', 'Nuevo Categoria')

@section('content')
<div class="bg-white px-3 py-3 border rounded">
	<h4>Nueva Categoria</h4>
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


	{!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre Categoria') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}
</div>
<div class="container">
	<br>
	
	
</div>
@endsection