<?php
    use /app/Controllers/UsuarioController;
    // use App\Http\Controllers\ProductoController;
    // use App\Http\Controllers\ReservaController;

    Route::post('/usuarios/registro', [UsuarioController::class, 'registrar']);
    Route::post('/usuarios/login', [UsuarioController::class, 'login']);
    Route::get('/usuarios/{id}', [UsuarioController::class, 'obtenerUsuario']);

    Route::post('/productos', [ProductoController::class, 'registrar']);
    Route::get('/productos', [ProductoController::class, 'listar']);
    Route::get('/productos/{id}', [ProductoController::class, 'obtener']);
    Route::put('/productos/{id}', [ProductoController::class, 'actualizar']);
    Route::delete('/productos/{id}', [ProductoController::class, 'eliminar']);

    Route::post('/reservas', [ReservaController::class, 'reservar']);
    Route::get('/reservas', [ReservaController::class, 'listar']);
    Route::get('/reservas/{id}', [ReservaController::class, 'obtener']);
    Route::put('/reservas/{id}', [ReservaController::class, 'actualizar']);
Route::delete('/reservas/{id}', [ReservaController::class, 'cancelar']);
?>