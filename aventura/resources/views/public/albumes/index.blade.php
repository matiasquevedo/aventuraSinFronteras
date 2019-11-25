@extends('welcome')

@section('title','Galeria de Fotos')

@section('content')
<div class="container">
	@if(count($albumes)>0)
		<h3>Albumes</h3>
		<div class="row"><br>
		  @foreach($albumes as $album)
		    <div class="col-3">
		      <div class="card" style="width: 18rem;">
		        <img src="/images/album/portada/thumbnail/{{$album->portada}}" class="card-img-top" alt="..." style="max-height: 18rem; min-height: 18rem; ">
		        <div class="card-body">
		          <div class="">
		            <a href="{{ route('albumes.public.show', $album->slug) }}">                
		              <h5 class="card-title">{{$album->titulo}}</h5>
		            </a>
		          </div>              
		        </div>
		      </div>        
		    </div>          
		  @endforeach
		</div>
	@else
		<h3>Sin Albumes</h3>
	@endif	

</div>
@endsection