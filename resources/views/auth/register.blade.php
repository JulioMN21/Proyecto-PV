@extends('layouts.app')

@section('content')

<style type="text/css">
    label{
        font: bold;
        font-size: 20px;
    }

    .card-header{
      text-align: center;
      font-size: 20px;
      font-weight: extra-bold;
      background-color: #DADADA;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .card-header:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
</style>
<div class="container">
<div class="card">
  <div class="card-header">
     <strong>Nuevo usuario</strong>
  </div>

  <div class="card-block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><strong>Nombre: </strong></label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ej. Jose Lopez..." required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><strong>Correo electronico</strong></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Ej. Correo@ejemplo.com" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><strong>Contraseña: </strong></label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" placeholder="* * * * * * * * * *"  name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"><strong>Confirmar contraseña: </strong></label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="* * * * * * * * * *" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn btn-success">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>


</div>
@endsection
