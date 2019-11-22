@extends('admin.template.main')


@section('title', 'Albumes')

@section('content')

<div class="container mb-5">
  <div class="mb-3">
    
    <a href="{{ route('albumes.create')}}" class="btn btn-info">Nuevo Album</a>

  </div>
    <div class="row"><br>
      @foreach($albumes as $album)
        <div class="col-lg-4 col-md-4 col-sm-6 mt-3">
          <div class="card" style="width: 18rem;">
            <img src="/images/album/portada/thumbnail/{{$album->portada}}" class="card-img-top" alt="..." style="max-height: 18rem; min-height: 18rem; ">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <a href="{{ route('albumes.show', $album->slug) }}">                
                  <h5 class="card-title">{{$album->titulo}}</h5>
                </a>
                <a href="{{ route('albumes.destroy', $album->slug) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                </a>
              </div>              
            </div>
          </div>        
        </div>          
      @endforeach
    </div>
    {!! $albumes->render() !!}  
</div>

@endsection

@section('js')
  <script>

    $('.select-tag').chosen({
      placeholder_text_multiple:'Ubicacion de Publicidad',
      search_contains:true,

    });    

    
  </script>

@endsection