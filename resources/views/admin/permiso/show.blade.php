@extends('template.index')
@section('encabezado')
    <div class="row">
        <div class="col-md-9">
            <h4 class="m-0 font-weight-bold text-primary">Permisos</h4>
        </div>
        <div class="col-md-3">
            <a href="{{route('permiso.index')}}" class="btn btn-sm btn-info btn-block">
                                    <i class="fas fa-arrow-left"></i>Volver
            </a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="table-responsive">
        <table class="table table-striped" >
            <thead>
                
            </thead>
            <tbody>
            <tr>
                    <td>
                        <b>Id</b>
                    </td>
                    <td>
                    {{$permiso->id}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Nombre</b>
                    </td>
                    <td>
                    {{$permiso->name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Estado</b>
                    </td>
                    <td>@if($permiso->estado==0)
                            <label for=""style="color:brown">Inactivo</label>
                        @else
                            <label for="">Activo</label>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-3">
            <a href="{{route('permiso.edit' , $permiso->id)}}" class="btn btn-primary btn-block mt-4">
                Editar                    
            </a>
        </div>
    </div>

@endsection

