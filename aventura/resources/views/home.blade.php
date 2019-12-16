@extends('welcome')
@section('title','Home | '.env('APP_NAME'))

@section('content')
<br>
<div class="container">
	<div class="text-center px-5 mb-5" >
	    <form action="/member/search" method="POST" role="search">
	        {{ csrf_field() }}
	        <div class="input-group">	             	
				<input class="form-control" id="autocomplete-search" placeholder="Buscar actividad..." />  
		        <button class="btn btn-info" style="background-color: #fe6601 !important; border:none;">
		        	<i class="fas fa-search" style="font-size: 25px !important; color: white;"></i>
		        </button>
		    </div>
	    </form>
	</div>


	@if(count($actividades)>0)	
	<h3>Nuestras Actividades</h3>
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
		<h3>No hay Actividades</h3>
	</div>
	@endif
</div>

{{-- <div style="background-color: #fe6601 !important;" class="mt-5">
	<br>
	<div class="container">
		<div class="text-center">
			<h4 style="color:white">¡Deja tu mensaje!</h4>
		</div>

		{!! Form::open(['route'=>'mensaje.public', 'method'=>'POST']) !!}

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
					<p style="color: white !important; font-size: 12px !important;"><i>(*campo requerido)</i></p>
				</div>

				<div class="text-right">
					<div class="text-right">						
						{!! NoCaptcha::display(['data-theme' => 'dark']) !!}
						@if ($errors->has('g-recaptcha-response'))
						    <span class="help-block">
						        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
						    </span>
						@endif
					</div>
					{!! Form::submit('Enviar',['class'=>'btn btn-dark']) !!}
				</div>

			</div>
		</div>

		{!! Form::close() !!}
		
	</div>	
	<br>
</div> --}}
@endsection

@section('js')
{!! NoCaptcha::renderJs() !!}
<script>
  $("#autocomplete-search").easyAutocomplete({
     url: function(search) {
         return "{{route('actividades.search')}}?search=" + search;
     },
   
     getValue: "title",
     list: {
          match: {
              enabled: true
          },
          maxNumberOfElements: 6,

          showAnimation: {
              type: "slide",
              time: 300
          },
          hideAnimation: {
              type: "slide",
              time: 300
          },
          onChooseEvent: function() {
                      var selectedPost = $("#autocomplete-search").getSelectedItemData();
                      window.location = "{{url('actividad')}}" + "/" + selectedPost.slug;
                  }
      },

      theme: "round"
  });
</script>
@endsection



