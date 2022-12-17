<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Persyaratan;

class PendaftaranController extends Controller
{
    function pendaftaran(Request $request)
    {
        $payload = [
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jkelamin'),
            'tanggal_lahir' => $request->input('tlahir'),
            'alamat' => $request->input('alamat'),
        ];


        Pendaftaran::query()->create($payload);
        return redirect()->back();
    }

    function index()
    {
        $syarat = Persyaratan::query()->get();
        return view('pendaftaran', compact('syarat'));
    }

    function store(Request $request)
    {
        if(!isset($request->persyarat)) {
            $status = 2;
        }else {
            $status = 1;
        }
        $payload = [
            "nama" => $request->nama,
            "jenis_kelamin" => $request->jkelamin,
            "alamat" => $request->alamat,
            "tanggal_lahir" => $request->tlahir,
            "status" => $status,
        ];

        Pendaftaran::query()->create($payload);
        return redirect()->back();
    
    }




}
