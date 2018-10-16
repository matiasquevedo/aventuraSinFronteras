@extends('welcome')

@section('title','Inciar Sesion')

@section('content')
<div class="container"><br><br>
            <div class="card">
                <div class="card-body">  
                <h5 class="card-title">Iniciar Sesion</h5>                  
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} has-danger">
                                    <label for="email" class="col-md-4 control-label">Usuario</label>

                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            Iniciar Sesion
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Olvidé mi contraseña
                                        </a>
                                    </div>
                                </div>
                            </form>                            
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    

                </div>
            </div>
</div>
@endsection
