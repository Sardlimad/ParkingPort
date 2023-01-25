@extends('layouts/template')

@section('page_heading', '')

@section('page_content')

    <!-- New Driver Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de Registro de Conductores</h6>
        </div>
        <div class="card-body">
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control" id="dni" placeholder="No.Carnet">
                    </div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control form-control" id="address" placeholder="Dirección" rows="5"></textarea>
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
