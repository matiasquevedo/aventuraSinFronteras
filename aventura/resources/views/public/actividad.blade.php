@extends('welcome')

@section('title',$actividad->title)

@section('header')

@endsection

@section('content')
<div class="container">
	<div class="mb-3">
		<div class="" id="img-container" style="width: 600px">		
			<img src="/images/actividades/{{$actividad->image->foto}}" width="600" alt="{{$actividad->title}}" >
		</div>
	</div>
	
	<h2> {{$actividad->title}} </h2>
	<h4> {{$actividad->volanta}} </h4>
	<div class="text-justify">
		<p>{!!$actividad->descripcion!!}</p>
	</div>
			
	<div class="text-justify border p-3">
		<h4><i><u>Recomendaciones</u></i></h4>
		<p>{!!$actividad->recomendacion!!}</p>
	</div><br>

</div>

@endsection

@section('js')
<script src="{{asset('plugins/image-zoom/dist/js-image-zoom.js')}}"></script>
<script>
	var options = {
	    width: 600,
	    zoomWidth: 500,
	    offset: {vertical: 0, horizontal: 10}
	};
	new ImageZoom(document.getElementById("img-container"), options);
</script>
@endsection