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
     <strong>Restaurar contraseña</strong>
  </div>

  <div class="card-block">

<div class="container">
   
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <!--{{ session('status') }}-->
                            Se enviaron las intrucciones de restauración a tu correo electronico
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><strong>Correo electronico: </strong> </label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="center">  
                                <button type="submit" class="btn btn-primary">
                                    Enviar instrucciones para restauración
                                </button>
                         
                        </div>
                    </form>
                </div>
            </div>
 

  </div>
</div>
</div>




@endsection
