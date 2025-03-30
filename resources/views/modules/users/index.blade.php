@extends('layouts/main')

@section('content')
    <div class="container mt-4">
        <h2>CRUD con laravel</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-primary">
                            <i class="fa-solid fa-circle-plus"></i> Crear usuario
                        </a>
                        <hr><!--linea horizontal-->
                        <table class="table table-striped table-hover text-center">
                            <thead>
            
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    
                                    
                                    <td>
                                        <form action="{{ route('destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('show', $item->id) }}" class="btn btn-info"> 
                                                <i class="fa-solid fa-list-ul"></i> Mostrar
                                            </a>
                                            <a href=" {{ route('edit', $item->id) }}" class="btn btn-warning"> 
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Eliminar
                                            </button>
                                    </td>
                                </tr>  
                                
                                @empty
                                    <tr >
                                        <td colspan="4" >No hay usuarios registrados</td>
                                    </tr>
                                @endforelse

                            </tbody>    
                        </table>
                        <div class="d-flex justify-content-end mt-4">
                            {{ $items->links() }}
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection