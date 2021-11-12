@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')

<div class="row mt-5">
    <div class="col">
        <h1 class="text-center display-4"><strong>Aqui encontraras una lista de titulos de libros. Podras actulizar cualquier libro a tu manera</strong></h1>
        <h1 class="text-center display-4 text-success" ><strong>Bienvenido!!!!</strong></h1>
        
    </div>
</div>

<a class="btn btn-info" href="{{route('personas.ingresar')}}"><span class="fas fa-user-plus"> Agregar</span></a>


<div class="row mt-5">
    <div class="col">
        
        <li class="list-group-item">
            <table class="table table-success table-striped">
                    <thead class="bg-success" >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">sexo</th>
                            <th scope="col">edad</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                
                <tbody>
                    @foreach($persona as $personas)
                    <tr>
                        <th>{{$personas->id}}</th>
                        <th>{{$personas->Apaterno}}</th>
                        <th>{{$personas->Amaterno}}</th>
                        <th>{{$personas->nombre}}</th>
                        <th>{{$personas->fecha}}</th>
                        <th>{{$personas->sexo}}</th>
                        <th><?php
                            $fecha = new DateTime($personas['fecha']);
                            $hoy = new DateTime();
                            $edad = $hoy->diff($fecha);
                            echo $edad->y;
                            ?>
                        </th>
                        <th><a class="btn btn-success" href="{{route('personas.edit', $personas->id)}}"><i class="fas fa-edit"></i></a></th>
                        <th>
                            <form action="{{route('personas.destroy', $personas)}}" method="POST">
                            @csrf    
                            @method('delete')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </th>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </li>    
        
    </div>
</div>
@endsection
@section('pagina')
{{$persona->links()}}
@endsection