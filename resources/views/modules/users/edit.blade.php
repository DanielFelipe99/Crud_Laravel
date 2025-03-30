@extends('layouts/main')

<div class="container mt-4">
    <h2>Actualizar usuario usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update', $item->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" required value="{{ $item->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ $item->email }}">
                        </div>

                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="number" name="edad" id="edad" class="form-control" required value="{{ $item->edad }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" required value="{{ $item->telefono }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" required value="{{ $item->direccion }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Ciudad</label>
                            <input type="text" name="ciudad" id="ciudad" class="form-control" required value="{{ $item->ciudad }}">
                        </div>

                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>