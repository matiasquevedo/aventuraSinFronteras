@extends('welcome')

@section('title',$actividad->title)

@section('content')
<div class="container">
	<div class="text-center">		
		<img src="/images/actividades/{{$image}}" height="50%" alt="">
	</div>
	<h2> {{$actividad->title}} </h2>
	<h3> {{$actividad->volanta}} </h3>
	<div class="text-justify">
		<p>{!!$actividad->descripcion!!}</p>
	</div><br>
			
		<div class="text-justify">
			<h4><i>Recomendaciones</i></h4>
			<p>{!!$actividad->recomendacion!!}</p>
		</div><br>

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