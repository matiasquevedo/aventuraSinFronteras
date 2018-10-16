@extends('welcome')
@section('title','Home | '.env('APP_NAME'))

@section('content')
<br>
<div class="container">
  <div class="text-center">
  	<img src="/images/logo.png" alt="" width="300px">
  	<br>
    
    <h3>Estamos mejorando para brindar una <br> nueva experiencia de usuario</h3>
  </div>
  

</div>
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


