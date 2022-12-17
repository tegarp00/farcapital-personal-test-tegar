<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

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
        return redirect('/donor/persyaratan');
    }

}
