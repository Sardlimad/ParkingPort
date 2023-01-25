@extends('layouts/template')

@section('page_heading', '')

@section('page_content')

    <!-- New Driver Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de Registro de Usuarios</h6>
        </div>
        <div class="card-body">
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control" id="user" placeholder="Usuario">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control" id="password" placeholder="Contraseña">
                    </div>
                    <div class="col-sm-6">
                        <select name="rol" class="form-control form-control" aria-placeholder="Rol">
                            <optgroup>
                                <option>Administrador</option>
                                <option>Empleado</option>
                            <optgroup>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-success btn-block">
                            <i class="fa fa-qrcode" aria-hidden="true"></i> QR
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="fa fa-plus" aria-hidden="true"></i> Registrar Conductor
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
