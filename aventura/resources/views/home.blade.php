@extends('welcome')
@section('title','Home | '.env('APP_NAME'))

@section('content')
<br>
<div class="container">
	<h3>Actividades de Aventura</h3>
	<div class="row">
		@foreach($actividades as $actividad)
			<div class="col-lg-4 col-md-4 col-sm-6 mt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="/images/actividades/{{$actividad->foto}}" alt="Card image cap" style="height: 400px;object-fit: cover;">
				  
				  <div class="card-body">
				  	<p><i>{{$actividad->name}}</i></p>
				    <h5 class="card-title">{{$actividad->title}}</h5>
				    <p class="card-text"> {{$actividad->volanta}} </p>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
</div>
<br>
@endsection

@section('footer')
<div style="background-color: #fe6601; height: 50px;color:white;">
	<div class="container">
		<div class="text-center" style="position: relative; top:10px;">
			<p>Aventura Sin Fronteras</p>
		</div>
	</div>
</div>

@endsection


