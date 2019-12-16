@extends('welcome')

@section('title', $category->name)

@section('content')
	<div class="container mt-3">
		<h3> {{$category->name}} </h3>
		@if(count($actividades)>0)
		<div class="row">
			@foreach($actividades as $actividad)
				<div class="col-lg-3 col-md-3 col-sm-6 mt-3">
					<div class="card" style="width: 17rem; min-height: 30rem; max-height: 30rem;">
					  <img class="card-img-top" src="/images/actividades/thumbnail/{{$actividad->image->foto}}" alt=" {{$actividad->slug}} " style="width: 17rem;object-fit: cover;min-height: 20rem !important;max-height: 20rem !important;">
					  
					  <div class="card-body position-relative">
					  	<p><i>{{$actividad->category->name}}</i></p>
					    <h6 class="card-title"><a href=" {{route('actividad.public',$actividad->slug)}} ">{{$actividad->title}}</h6></a>
					    <p class="card-text" style="position:absolute; top:110px; width:90%;overflow:hidden;white-space: nowrap;    text-overflow: ellipsis;word-wrap: break-word; ">{{$actividad->volanta}}</p>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
	@else
	<div>
		<h5> <i>No hay Actividades</i> </h5>
	</div>
	@endif		
	</div>	
@endsection