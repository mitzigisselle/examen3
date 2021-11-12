@extends('layout.plantilla')
@section('title','Ingresar')
@section('contenido')



    <div class="row mt-3">
        <div class="col">
            <h1 class="text-center text-info display-4">Agregar nueva persona</h1>
        </div>
    </div>

    <hr>

    <div class="row mt-5">
        <div class="col">
            <div class="jumbotron-fluid">
                <p class="lead">
                    <div class="card mt-3">
                    <form action="{{route('personas.store')}}" method="post">

                        @csrf

                        <label>Apellido Paterno: </label>
                        <input class="border border-info" type="text" name="Apaterno" >
                        <br>
                        <label>Apellido Materno: </label>
                        <input class="border border-info" type="text" name="Amaterno" >
                        <br>
                        <label>Nombre: </label>
                        <input class="border border-info" type="text" name="nombre" >
                        <br>
                        <label>Fecha de nacimiento: </label>
                        <input class="border border-info" type="date" name="fecha" >
                        <br>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" class="form-control">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                        <br>
                        <button class="btn btn-info" type="submit" ><i class="fas fa-check-circle"> Agregar</i></button>
                    </form>

                    </div>
                </p>

            </div>


            
        </div>
    </div>

@endsection