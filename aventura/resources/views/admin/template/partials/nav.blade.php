<nav class="navbar navbar-expand-lg navbar-light bg-light nav-admin" style="background-color: white !important; height: 70px; max-width: 100% !important;min-width: 100% !important; box-shadow: 0 15px 25px -25px #333;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @guest
                            <li><a href="{{ route('login') }}">Login</a></li><!-- 
                            <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="nav-item"><a class="nav-link" href=" {{route('principal')}} ">Pagina Principal</a></li>

                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</span></a>          
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->type == "admin")
                                    <a class="dropdown-item" href="{{route('admin.inicio')}}">Mi Perfil</a>
                                @else                                    
                                   <a class="dropdown-item" href="{{route('editor.inicio')}}">Mi Perfil</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </div>
                            </li>
                        @endguest
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>