@extends('welcome')
@section('title','Home | '.env('APP_NAME'))

@section('content')
<br>
<div class="container">
	@if(count($actividades)>0)	
	<h3>Actividades de Aventura</h3>
	<div class="row">
		@foreach($actividades as $actividad)
			<div class="col-lg-4 col-md-4 col-sm-6 mt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="/images/actividades/{{$actividad->foto}}" alt="Card image cap" style="height: 400px;object-fit: cover;">
				  
				  <div class="card-body">
				  	<p><i>{{$actividad->name}}</i></p>
				    <h5 class="card-title"><a href=" {{route('actividad.public',$actividad->slug)}} ">{{$actividad->title}}</h5></a>
				    <p class="card-text"> {{$actividad->volanta}} </p>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
	@else
	<div>
		<h3>No hay Actividades</h3>
	</div>
	@endif
</div>
<br>
@endsection



