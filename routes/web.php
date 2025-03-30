<?php
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

/*AQUI SE NOMBRAN LOS METODOS*/
/* Ruta de usuarios, ejecuta el metodo index en el controlador Users */
Route::get('/', [Users::class, 'index'])->name('index');
/*Creacion de usuarios*/ 
Route::get('/create',[Users::class, 'create'])->name('create');
/*Guardar usuarios*/
Route::post('/store',[Users::class, 'store'])->name('store');
/*Mostrar usuarios*/
Route::get('/show/{id}',[Users::class, 'show'])->name('show');
/*mostrar Editar usuarios*/
Route::get('/edit/{id}',[Users::class, 'edit'])->name('edit');
/*Actualizar usuarios*/
Route::put('/update/{id}',[Users::class, 'update'])->name('update');
/*Eliminar usuarios*/
Route::delete('/destroy{id}',[Users::class, 'destroy'])->name('destroy');
