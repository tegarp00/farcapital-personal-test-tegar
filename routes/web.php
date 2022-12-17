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

Route::get("/", [PendaftaranController::class, "index"])->name("pendaftaran");
Route::get("/login", [PetugasController::class, "login"])->name("login")->middleware(['noAuth']);
Route::get("/tambah-syarat", [PetugasController::class, "addsyarat"])->name("addsyarat");
Route::get("/dashboard", [PetugasController::class, "list"])->name("dashboard")->middleware(['withAuth']);
Route::get("/detail/{id}", [PetugasController::class, "detail"])->name("detail");

Route::post("/login", [PetugasController::class, "masuk"])->name("masuk")->middleware(['withAuth']);
Route::get("/logout", [PetugasController::class, "logout"])->name("logout")->middleware(['withAuth']);
Route::post("/store", [PendaftaranController::class, "store"])->name("store")->middleware(['withAuth']);
Route::post("/pemeriksaan/{id}", [PetugasController::class, "tahapDonor"])->name("tahapDonor")->middleware(['withAuth']);

// Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
// Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);

Route::post("/", [PendaftaranController::class, "pendaftaran"])->name("daftar");
Route::post("/donor/persyaratan", [PersyaratanController::class, "uploadPersyaratan"])->name("usyarat");
Route::get("/donor/persyaratan", [PersyaratanController::class, "persyaratan"])->name("syarat");

// Petugas
Route::get("/donor/list", [PetugasController::class, "index"])->name("list");
