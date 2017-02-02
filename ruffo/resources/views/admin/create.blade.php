@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear usuario</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('admin.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                            <label for="imagen" class="col-md-4 control-label">Imagen</label>

                            <div class="col-md-6">
                                <input id="imagen" type="file" class="form-control" name="imagen" value="{{ old('imagen') }}" required autofocus>

                                @if ($errors->has('imagen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                            <label for="documento" class="col-md-4 control-label">Documento</label>

                            <div class="col-md-6">
                                <input id="documento" type="number" class="form-control" name="documento" value="{{ old('documento') }}" required autofocus>

                                @if ($errors->has('documento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('documento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nrofuncionario') ? ' has-error' : '' }}">
                            <label for="nrofuncionario" class="col-md-4 control-label">Nro Funcionario</label>

                            <div class="col-md-6">
                                <input id="nrofuncionario" type="number" class="form-control" name="nrofuncionario" value="{{ old('nrofuncionario') }}" required autofocus>

                                @if ($errors->has('nrofuncionario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nrofuncionario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('oficina_id') ? ' has-error' : '' }}">
                            <label for="oficina_id" class="col-md-4 control-label">Oficina</label>

                            <div class="col-md-6">
                                <input id="oficina_id" type="number" class="form-control" name="oficina_id" value="{{ old('oficina_id') }}" required autofocus>

                                @if ($errors->has('oficina_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oficina_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rol_id') ? ' has-error' : '' }}">
                            <label for="rol_id" class="col-md-4 control-label">Rol</label>

                            <div class="col-md-6">
                                <input id="rol_id" type="number" class="form-control" name="rol_id" value="{{ old('rol_id') }}" required autofocus>

                                @if ($errors->has('rol_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rol_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
