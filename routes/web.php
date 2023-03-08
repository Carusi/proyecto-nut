<?php

//Controlador
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServicioController;
use App\Http\Controllers\Cuenta_staffController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

//Modelos

use App\Models\Post;




Route::get('/', function () {
    return view('home'); 
});

// Rutas de login y registro de usuario e index
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'index']);

//Vista de logout
Route::get('/logout', [LogoutController::class, 'logout']);

/*Rutas de vista admin*/
route::view('/dashI', 'dashboard.adminIni')->name('adminIni');
route::view('/dashP', 'dashboard.usuario.edit')->name('edit');
Route::view('cita/vista', 'dashboard.adminCit')->name('cit.vis')->middleware('auth');

route::get('staff/inicio',[Cuenta_staffController::class, 'vistas'])->name('adm.vistas');
route::get('staff/citas',[Cuenta_staffController::class, 'cita'])->name('cit.vistas');
// route::view('/dashU', 'adminUsu')->name('adminUsu');

/*Crud Usuario*/
Route::get('usu/reg', [UsuarioController::class, 'create'])->name('usu.create');
Route::post('usu/guardar', [UsuarioController::class, 'store'])->name('usu.store');

/*Crear admin */
Route::post('staff/registrar', [Cuenta_staffController::class, 'store'])->name('adm.store');
Route::get('staff/listar', [Cuenta_staffController::class, 'index'])->name('adm.index');

/*Servicios y citas*/
Route::get('servicio/vista', [AdminServicioController::class, 'index'])->name('ser.index')->middleware('auth');
// Route::view('cita/vista', [LoginController::class, 'index'])->name('cit.index')->middleware('auth');


/*Blog */

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/Posts{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/category{category}', [PostController::class, 'category'])->name('posts.category');


//Crud categoria
Route::resource('categories', CategoryController::class)->names('dashboard.categories');
Route::get('/categoria', [CategoryController::class, 'index'])->name('dashboard.categories.index');
Route::get('/editarCategoria{category}', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
// Route::get('/elimiarCategoria{category}', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

//Crud tag
Route::resource('tags', TagController::class)->names('dashboard.tags');