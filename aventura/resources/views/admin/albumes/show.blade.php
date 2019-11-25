@extends('admin.template.main')


@section('title','Album: '.$album->titulo)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4">
      <img src="/images/album/portada/thumbnail/{{$album->portada}}" class="card-img-top" alt="..." style="max-height: 18rem; min-height: 18rem; ">
    </div>
    <div class="col-8">
        <h3>{{$album->titulo}}</h3>
        <div>
                {!!$album->descripcion!!}
        </div>
        <div class="mt-3 border p-4">
          <form action="/admin/fotos" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              Agregar Fotos al Album:
              <br />
              <input type="file" name="images[]" multiple />
              <br /><br />
              <input type="hidden" value="{{$album->id}}" name="album_id" />
              <input type="submit" value="Subir" />
          </form>
        </div>
        
    </div>
  </div>
  @if(count($fotos)>0)
    <div class="mt-4">
     {!! Form::open(['route'=>'fotos.varios', 'method'=>'GET','files'=>'true']) !!}
       <div class="form-group" style="display: none;">
         {!! Form::text('albumSlug',$album->slug,['class'=>'form-control','placeholder'=>'Cantidad de Jugadores','required']) !!}
       </div>
       <div class="container-fluid">
         <div class="form-group d-flex justify-content-between">
             {!! Form::submit('Eliminar Seleccionados',['class'=>'btn btn-danger']) !!}
         </div>
       </div>      
         <div class="row">
           @foreach($fotos as $foto)
             <p>{{ Form::checkbox('box[]',$foto->id, null, ['class' => 'field']) }}</p>
             <div>
               <a href="/images/album/fotos/{{$foto->foto}}" data-toggle="lightbox" data-max-height="600" data-gallery="example-gallery" data-type="image" class="col-3">
                 <div class="card mb-2" style="width: 17rem;">
                   <img src="/images/album/fotos/thumbnail/{{$foto->foto}}" class="img-fluid" alt="..." style="max-height: 17rem; min-height: 17rem;">
                 </div>
               </a>
             </div>                      
           @endforeach
         </div>

         
     {!! Form::close() !!}
     </div>
  
  @endif


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
