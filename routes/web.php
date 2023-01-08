<?php

use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\DatosUserController;
use App\Http\Controllers\DocumentacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\MunicipioController;
use App\Http\Livewire\EstadosTable;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\DatosPerfilController;
use App\Http\Controllers\EstudioController;
use App\Models\Convocatoria;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SendEmailController;

use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth', config('jetstream.auth_session'), 'verified'])->group(function () {
    /*Rutas de Dashboard*/
    Route::get('/', function () {
        $convocatorias = Convocatoria::Paginate(6);
        return view('dashboard', compact('convocatorias'));
    })->name('dashboard');

    // Rutas de instituciones
    Route::resource('instituciones', InstitucionController::class);

    // Rutas de solicitud
    Route::resource('solicitudes', SolicitudController::class);

    // Rutas de carreras
    Route::resource('carreras', CarreraController::class);

    // Rutas de estados y municipios
    Route::resource('estados', EstadoController::class);
    Route::resource('municipios', MunicipioController::class);

    Route::resource('datosuser', DatosUserController::class);

    // Rutas de las modalidades
    Route::resource('convocatorias', ConvocatoriaController::class);
    Route::resource('documentacion', DocumentacionController::class);
    Route::get('update', [ConvocatoriaController::class, 'updateconvocatoria']);
    Route::get('habilitar', [ConvocatoriaController::class, 'viewTrash'])->name('convocatoria.habilitar');
    Route::post('convocatoria/{id}/restore', [ConvocatoriaController::class, 'restore'])->name('convocatoria.restore');

    // Ruta para historial
    Route::resource('historial', HistorialController::class);

    // Ruta para mensajes
    Route::resource('mensajes', MensajesController::class);
    Route::get('send-mail', [SendEmailController::class, 'EnviarCorreo']);
    Route::get('basedatos', [SendEmailController::class, 'MessageBase']);
    Route::get('todos', [SendEmailController::class, 'MessageTodos']);
    Route::get('usuarios', [SendEmailController::class, 'GetUsers']);

    Route::resource('configuracion', ConfiguracionController::class);

    Route::resource('estudio', EstudioController::class);

    Route::get('estudio-pdf', [PDFController::class, 'generatePDF_estudio']);
    Route::get('carta-pdf', [PDFController::class, 'generatePDF_carta']);

    Route::get('update', [ConvocatoriaController::class, 'updateconvocatoria']);

    Route::resource('roles', RoleController::class);

    Route::resource('datosperfil', DatosPerfilController::class);
    Route::post('datosperfil/{id}/actualizar', [DatosPerfilController::class, 'actua'])->name('datosperfil.actua');

    // Ruta para las estadisticas
    Route::resource('estadistica', EstadisticaController::class);

    // Rutas estudio socioeconomico
    Route::view('/estudio', 'estudio')->name('estudio');
    Route::view('/estudio-registrado-correctamente', 'estudio-registrado')->name('estudio.registrado');

    Route::get('/exportar-solicitudes', [SolicitudController::class, 'exportSolicitudes'])->name('exportar-solicitudes');

});


