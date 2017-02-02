@extends('../layouts.app')
 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuario <small>Detalles</small>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-xs" href="{{ route('admin.index') }}"> Volver</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $user->nombre }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Apellido:</strong>
                                {{ $user->apellido }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection