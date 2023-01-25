@extends('layouts/template')

@section('title', 'Autos')

@section('page_heading', 'Autos')

@section('page_content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Autos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>&nbsp;</th>
                    </tr>
                </tfoot>
                    <tbody>
                        @foreach ($autos as $auto)
                            <tr>
                                <td>{{ $auto->plate }}</td>
                                <td>{{ $auto->brand }}</td>
                                <td>{{ $auto->model }}</td>
                                <td>{{ $auto->color }}</td>
                                <td><a type="button" class="btn btn-secondary btn-sm rounded-pill" href=""><i class="fa fa-info" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
