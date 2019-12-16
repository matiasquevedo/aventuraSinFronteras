<!-- Sidebar -->
<div class="bg-light border-right sidebar-admin" id="sidebar-wrapper">
  <div class="sidebar-heading" style="height: 110px;">
    <div class="navbar-header text-center">
      <a class="navbar-brand" href="{{ route('admin.inicio')}}">
            <img src="/images/logo.png" width="80">
            <!--<img src="/images/embalsa.png" alt="" width="30px"> --> </a>
    </div>
  </div>
  <div class="list-group list-group-flush px-2">
  	<a href="{{route('admin.inicio')}}" class="list-group-item list-group-item-action ">Dashboard</a>
    <a href="{{ route('users.index')}}" class="list-group-item list-group-item-action ">Usuarios <span class="float-right badge badge-primary">{{ count(\App\User::all())}}</span></a>
    <a href="{{ route('categories.index')}}" class="list-group-item list-group-item-action ">Categorias <span class="float-right badge badge-primary">{{ count(\App\Category::all())}}</span></a>
    <a href="{{ route('actividades.index')}}" class="list-group-item list-group-item-action ">Actividades<span class="float-right badge badge-primary">{{ count(\App\Actividad::all())}}</span> </a>
    <a href="{{ route('paquetes.index')}}" class="list-group-item list-group-item-action ">Paquetes <span class="float-right badge badge-primary">{{ count(\App\Paquete::all())}}</span></a>
    <a href="{{ route('albumes.index')}}" class="list-group-item list-group-item-action ">Albumes <span class="float-right badge badge-primary">{{ count(\App\Album::all())}}</span></a>
  </div>
</div>

<!-- End Sidebar -->