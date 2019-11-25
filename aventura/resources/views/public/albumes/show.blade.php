@extends('welcome')

@section('title', $album->titulo)

@section('content')
<div class="container">
	<div class="row">
	  <div class="col-4">
	    <img src="/images/album/portada/thumbnail/{{$album->portada}}" class="card-img-top border rounded-lg " alt="..." style="max-height: 18rem; min-height: 18rem; ">
	  </div>
	  <div class="col-8">
	      <h3>{{$album->titulo}}</h3>
	      <div>
	              {!!$album->descripcion!!}
	      </div>	      
	  </div>
	</div>
	<div class="row border pl-3 pr-3 mt-2" style="background-color: #f5f6f7">
	  @foreach($album->fotos as $foto)
	    <div>
	      <a href="/images/album/fotos/{{$foto->foto}}" data-toggle="lightbox" data-max-height="600" data-gallery="example-gallery" data-type="image" class="col-4 mr-3">
	        <div class="card mb-2" style="width: 17rem;">
	          <img src="/images/album/fotos/thumbnail/{{$foto->foto}}" class="img-fluid" alt="..." style="max-height: 17rem; min-height: 17rem;">
	        </div>
	      </a>
	    </div>                      
	  @endforeach
	</div>
</div>
@endsection

@section('js')

<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        loadingMessage: "<h5>Cargando...</h5>"
      });
  });

</script>
@endsection