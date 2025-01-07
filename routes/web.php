<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursosDisponibles;
use App\Http\Controllers\CursosDisponiblesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterAuthController;
use App\Mail\ContactanosMailable;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;

//utilizando ruta con controlador
Route::get('/',HomeController::class)->name('home');
//ruta index
//Route::get('/cursos', [CursoController::class,'index']);
//Route::get('/cursos/create', [CursoController::class,'create']);
//Route::get('/cursos/{curso}', [CursoController::class,'show']);

/*Route::get('/', function () {
    return view('welcome');
});*/

//creando ruta con funcion vacia
/*Route::get('cursos', function() {
    return ('bienvenido a los cursos');
});*/

//creando una ruta pasando variable
//Route::get('cursos/{curso}', function($curso) {
//    return ("bienvenido al curso $curso");
//});
//pasando 2 parametros por url
//Route::get('cursos/{curso}/{categoria}', function($curso,$categoria) {
//    return ("bienvenido al curso , $curso, de la categoria, $categoria");
//});

#####################Grupo de rutas##################
//Route::controller(CursoController::class)->group(function () {
  //  Route::get('cursos' ,'index')->name('cursos.index');//index para listar cursos
  //  Route::get('cursos/create','create')->name('cursos.create');//creaate para llamar a un formulario de registro
  //  Route::get('cursos/{curso}','show')->name('cursos.show');//mostrarcontenido de una tabla
//});
#####################ruta para formulario################
//Route::post('cursos/ingresar',[CursoController::class,'store'])->name('cursos.store');//metodo strore apara cerar un registro
/*Route::prefix('cursos.grupo')->group(function (){
    Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');
    Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');
    Route::get('cursos/show',[CursoController::class,'show'])->name('cursos.show');
});*/
########### ruta para editar un curso ########### 
//Route::get('cursos/{curso}/edit',[CursoController::class ,'edit'])->name('cursos.edit');//edit es para editar un registro luego de llamar el recurso de la base de datos

########### ruta para actualizar curso ############
//Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');//update es para actualizar un registro

###########ruta para eliminar un curso###########
//Route::delete('cursos/{curso}',[CursoController::class ,'destroy'])->name('cursos.destroy');//destroy me sirve para eliminar n registro

###########ruta resource#################
//esta ruta se define en una sola linea pero maneja de manera
//pre establecida el reconocimiento de cada ruta a tra ves de una estructura
//organisativa donde conoce el id de la ruta 
//por ende es capas de solicitar los recursos de manera inteligente
//para asi proporcionarlos a a la vista
Route::resource('cursos' ,CursoController::class);

#########ruta estatica para nosotros#####
Route::view('nosotros','cursos.nosotros')->name('nosotros');//definiendo el subdirectorio con un punto

#########ruta para el manejo de email######
/*Route::get('contactanos', function()
{
    $correo = new ContactanosMailable;
    Mail::to('correo@gmail.com')->send($correo);

    return 'correo enviado';

})->name('contactanos.index');*/
#######ruta para formulario#######
Route::get('/contactos/create',[ContactoController::class,'create'])->name('contactos.create');
Route::post('/contactos',[ContactoController::class,'store'])->name('contactos.store');

#######ruta de prueba#########
// routes/web.php
Route::get('/grafica', function () {
    return view('componentes.grafica');
});
#######nav flex##########
//ruta para nav flex de prueba
Route::get('/navflex' , function(){
    return view('componentes.navflex1');
});

#######ruta para cursos disponibles############
Route::get('/cursosdisponibles',[CursosDisponiblesController::class, 'index'])->name('cursosdisponibles.index');

#######ruta para registro de usuario#####
Route::get('/registro_usuario',[RegisterAuthController::class,'showregisterform'])->name('usuario.showregisterform');
Route::post('/registro',[RegisterAuthController::class,'register'])->name('usuario.register');

#######ruta para login########
Route::get('/showLogin', [LoginController::class,'showLoginForm'])->name('login.show');
Route::post('/user',[LoginController::class, 'login'])->name('user.login');

#######logout######
Route::post('/logout',[LoginController::class,'logout'])->name('user.logout');

###### ruta asignacion roles ########
Route::get('/index',[RoleController::class,'index']);
Route::get('/showRoles',[RoleController::class,'show'])->name('administracion.roles');