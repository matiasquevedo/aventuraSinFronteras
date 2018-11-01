@extends('welcome')

@section('title',$actividad->title)
@section('content')
<div class="container">
	<div class="imagen text-center">
		<img src="/images/actividades/{{$image}}" height="50%" alt="">
	</div><br><br>
	<h2> {{$actividad->title}} </h2>
	<h4> {{$actividad->volanta}} </h4>
	<div class="text-left" style="word-wrap: break-word;">
		<p>{!!$actividad->descripcion!!}</p>
	</div><br>	
		
	<div class="text-left" style="word-wrap: break-word;">
		<h4><i>Recomendaciones</i></h4>
		<p>{!!$actividad->recomendacion!!}</p>
	</div><br>

	<div class="text-center">
		
		<div class="row info-actividad">
			@if($actividad->largo > 0 )
				<div class="col-lg-6">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<p><i>Recorrido</i></p>
					    <h4><i class="far fa-map"></i> {{$actividad->largo}} km</h4>
					  </div>
					</div>
				</div>
			@endif
			@if($actividad->duracion > 0 )
				<div class="col-lg-6">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<p><i>Duración</i></p>
					    <h4><i class="far fa-clock"></i> {{$actividad->duracion}} min</h4>
					  </div>
					</div>
				</div>
			@endif
		</div>

			

	</div>
	
</div>
@endsection

@section('js')
<script>
          $(function () {
              var date = new Date();
              date.setDate(date.getDate() - 7);

            $('#datetimepicker1').datepicker({
                maxDate: 'now',
                showTodayButton: true,
                showClear: true,
                minDate: date
            });
        });
    </script>
@endsection