@extends('layouts/template')

@section('page_heading', '')

@section('page_content')

    <!-- New Driver Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de Registro de Autos</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{ route('autos.store')}}">
                @csrf {{-- Token de Validación --}}
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" id="plate" name="plate" placeholder="Matrícula">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control" id="brand" name="brand" placeholder="Marca">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" id="model" name="model" placeholder="Modelo">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" id="color" name="color" placeholder="Color">
                    </div>
                </div>

                {{-- <button class="btn btn-primary btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Registrar Auto</button> --}}
                <input type="submit" class="btn btn-primary btn-block" value="Enviar Datos" >
            </form>
        </div>
    </div>

@endsection
