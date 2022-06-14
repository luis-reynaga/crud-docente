@extends('layouts')


@section('breadcrumbs')
    <h3 class="search-result">Docente</h3>
    <ul class="breadcrumb">
        <li>SISD</li>
        <li>/</li>
        <li>Director DACIS-FIIS</li>
        <li>/</li>
        <li>2022-1</li>
    </ul>
@stop

@section('content')
    <div class="contact_form">
        <div class="docente-actions">
            <div class="formulario">
                <h1>Crear nuevo docente</h1>
                <div class="alert-warning">
                    Los campos con un (*) son obligatorios, es necesario que esos campos esten rellenados
                </div>
                <form action="" method="post" id="form-docente">
                    @csrf
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="nombre" id="nombre" required="obligatorio"
                            placeholder="Escribe tu nombre">
                    </p>
    
                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="email" id="email" required="obligatorio"
                            placeholder="Escribe tu Email">
                    </p>
    
                    <p>
                        <label for="telefone" class="colocar_telefono">Teléfono
                        </label>
                        <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>
    
                    <p>
                        <label for="grado" class="colocar_grado">Grado
                        </label>
                        <input type="text" name="grado" id="grado" placeholder="Escribe tu grado">
                    </p>
    
                    <button class="button" type="submit" name="enviar_formulario" id="enviar">
                        Guardar
                    </button>
                </form>
            </div>
    
            <div class="formulario formulario-search">
                <h1>Asignar cursos al docente</h1>
                <div class="alert-warning">
                    Ingrese el codigo del docente en el siguiente campo de busqueda
                </div>
                <form action="" method="post" class="form-docente-search">
                    @csrf
                    <input type="text" name="codigo" id="codigo" required="obligatorio"
                            placeholder="Escribe tu codigo">
                    
    
                    <button type="submit" name="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <div class="alert-info">
                    No ha realizado ninguna busqueda
                </div>

                <div class="resultado-busqueda">

                </div>
            </div>
        </div>
    </div>

@stop
