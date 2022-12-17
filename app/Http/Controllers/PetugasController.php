<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PetugasController extends Controller
{
    function index()
    {
        $pendaftar = Pendaftaran::with('persyaratan')->get();
        return view("lpendaftar", ["pendaftar" => $pendaftar]);
    }
}
