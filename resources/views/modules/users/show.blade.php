@extends('layouts/main')

<div class="container mt-4">
    <h2>Mostrar la informacion de: {{ $item->name }}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Edad</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @isset($item)
                                
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->edad}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->direccion}}</td>
                                    <td>{{$item->ciudad}}</td>    
                                    
                                    <td>
                                        <form action="" method="POST">
                                            
                                            <a href="" class="btn btn-warning"> 
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Eliminar
                                            </button>
                                    </td>
                                </tr>  
                                @endisset

                                @empty($item)
                                    <tr>
                                        <td colspan="3">No hay usuarios registrados</td>
                                    </tr>
                                @endempty

                            </tbody>   
                    </table>
                    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>