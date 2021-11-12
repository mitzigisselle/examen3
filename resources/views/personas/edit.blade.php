@extends('layout.plantilla')
@section('title','Editar')
@section('contenido')


    <h1 class="text-center text-success display-4"><strong>Actualizar datos </strong></h1>

    <hr>

    <div class="row mt-3">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
            
                <div class="container">
                    <p class="lead">
                        <div class="card mt-3 ">
                            
                            <form action="{{route('personas.update', $persona)}}" method="post">
                                @csrf

                                @method('put')
                                
                                <label for=""><strong>Apellido Paterno:</strong></label>
                                <input class="border border-success" type="text" name="Apaterno" value="{{$persona->Apaterno}}">
                                
                                <br>
                                <label for=""><strong>Apellido materno</strong></label>
                                <input class="border border-success" type="text" name="Amaterno" value="{{$persona->Amaterno}}">

                                <br>
                                <label for=""><strong>Nombre:</strong></label>
                                <input class="border border-success" type="text" name="nombre" value="{{$persona->nombre}}">

                                <br>
                                <label for=""><strong>Fecha de Nacimiento:</strong></label>
                                <input class="border border-success" type="date" name="fecha" value="{{$persona->fecha}}">

                                <br>
                                <select name="sexo" class="form-control" value="{{$persona->sexo}}">
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                                <br>
                                <button class="btn btn-success" type="submit" ><i class="fas fa-save"> Guardar</i></button>
                            </form>
                        </div>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    




@endsection