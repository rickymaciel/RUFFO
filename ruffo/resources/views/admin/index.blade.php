@extends('../layouts.layout')
@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Usuarios
                    <div class="pull-right">
                              <button onclick="window.location='{{ URL::route('admin.create') }}'" class="btn-flip btn btn-gradient btn-primary">
                                <div class="flip">
                                  <div class="side">
                                    Crear nuevo <span class="fa fa-plus"></span>
                                  </div>
                                  <div class="side back">
                                    are you sure?
                                  </div>
                                </div>
                                <span class="icon"></span>
                              </button>
                    </div>
                </h3>
                <p class="animated fadeInDown">
                    Admin <span class="fa-angle-right fa"></span> Usuarios
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-12">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><i class="glyphicon glyphicon-check"></i> </strong> {{ Session::get('success') }}
                </div>
                @endif
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>
                            Usuarios
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Nº Funcionario</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->nombre }}</td>
                                        <td>{{ $user->apellido }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->telefono }}</td>
                                        <td>{{ $user->nrofuncionario }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('admin.show', $user->id) }}">Ver Detalles</a></li>
                                                    <li><a href="{{ route('admin.edit', $user->id) }}">Editar</a></li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                        Eliminar
                                                        </a>
                                                        {{ Form::open(['route' => ['admin.destroy', $user->id], 'method' => 'delete', 'id' => 'delete-form', 'style' => 'display: none;']) }}
                                                        {{ Form::submit('Delete') }}
                                                        {{ Form::close() }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
