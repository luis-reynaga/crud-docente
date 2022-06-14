@extends('layouts')

@section('breadcrumbs')
    <h3 class="search-result">Resultado de la busqueda <span>2022-X</span></h3>
    <ul class="breadcrumb">
        <li>SISD</li>
        <li>/</li>
        <li>Director DACIS-FIIS</li>
        <li>/</li>
        <li>2022-1</li>
    </ul>
@stop

@section('content')
    <div class="table-mobil">
        <table>
            <thead>
                <tr>
                   <th>Codigo</th>
                   <th>Apellidos y Nombres</th>
                    <th>Cursos</th>
                    <th>Cantidad de Alumnos</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                       <td>{{$docente->codigo}}</td>
                       <td>{{$docente->nombres}}</td>
                        <td>{{$docente->nombre}}</td>
                        <td>{{$docente->cantidad_alumnos}}</td>
                        <td>
                           <button value="{{$docente->codigo}}"  type="button" class="edit-button" >Editar</button>
                           <button value="{{$docente->codigo}}"  type="button" class="delete-button" onclick="handleDelete(event);">
                              Eliminar
                           </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@stop
