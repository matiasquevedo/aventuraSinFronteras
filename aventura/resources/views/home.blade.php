@extends('welcome')
@section('title','Home | '.env('APP_NAME'))

@section('content')
<br>
<div class="container">
	<div class="row">
		@foreach($actividades as $actividad)
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="images/actividades/{{$actividad->foto}}" alt="Card image cap">
				  <div class="card-body">
				  	<a href=" {{route('actividad.public',$actividad->categoryId)}} " class="title"><p><i>{{$actividad->name}}</i></p></a>
				  	<a href=" {{route('actividad.public',$actividad->id)}} " class="title"><h5 class="card-title">{{$actividad->title}}</h5></a>
				    <p class="card-text">{{$actividad->volanta}}</p>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
</div>
<br>
<br>
<br>
<div style="background-color: #fe6601;">
	<br>
	<div class="container">
		<div class="text-center">
			<h4 style="color:white">Dejenos su mensaje!</h4>
		</div>

		{!! Form::open(['route'=>'mensajes.store', 'method'=>'POST']) !!}

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre*','required']) !!}
				</div> <br>

				<div class="form-group">
					{!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido*','required']) !!}
				</div> <br>

				<div class="form-group">
					{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email*','required']) !!}
				</div> <br>

				<div class="form-group">
					{!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group">
					{!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Mensaje*','required']) !!}
					<p><i>(*campo requerido)</i></p>
				</div>

				<div class="form-group text-right">
					{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
				</div>
			</div>
		</div>

			



		{!! Form::close() !!}
		
	</div>	
	<br>
</div>
<br>

@endsection


