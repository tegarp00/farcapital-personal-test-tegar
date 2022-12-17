<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PetugasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pendaftaran');
});

// Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
// Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);

Route::post("/donor", [PendaftaranController::class, "pendaftaran"])->name("daftar");
Route::post("/donor/persyaratan", [PersyaratanController::class, "uploadPersyaratan"])->name("usyarat");
Route::get("/donor/persyaratan", [PersyaratanController::class, "persyaratan"])->name("syarat");

// Petugas
Route::get("/donor/list", [PetugasController::class, "index"])->name("list");

// Route::prefix("/donor")
//   ->name("donor.")
//   ->controller(BlogController::class)
//   ->group(function() {
//     Route::get('/daftar', 'index')->name("index");
//     // Route::get('/create', 'createArticle')->name("create")->middleware(["withAuth"]);
//     // Route::get('/detail/{id}', 'detailArticle')->name("detail");
//     // Route::get('/edit/{id}', 'editArticle')->name("edit")->middleware(["withAuth"]);

//     // Route::post('/create', 'postArticle')->name("post")->middleware(["withAuth"]);
//     // Route::put('/update/{id}', 'updateArticle')->name("update")->middleware(["withAuth"]);
//     // Route::get('/delete/{id}', 'deleteArticle')->name("delete")->middleware(["withAuth"]);
//   });
