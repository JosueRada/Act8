<?php

use Illuminate\Support\Facades\Route;

Route::post('/superheroes', 'SuperheroeController@crearSuperheroe');
public function crearSuperheroe(Request $request)
     {
         // Lógica para validar y guardar el nuevo superhéroe en la base de datos
     }

Route::get('/superheroes', 'SuperheroeController@mostrarSuperheroes');
public function mostrarSuperheroes()
     {
         $superheroes = Superheroe::all(); // Obtener todos los superhéroes de la base de datos
         return view('superheroes.index', ['superheroes' => $superheroes]);
     }

Route::delete('/superheroes/{id}', 'SuperheroeController@eliminarSuperheroe');
public function eliminarSuperheroe($id)
     {
         $superheroe = Superheroe::find($id);
         $superheroe->delete();
         // Manejar cualquier redirección o respuesta necesaria después de la eliminación
     }
