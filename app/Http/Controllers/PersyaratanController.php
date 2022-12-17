<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persyaratan;

class PersyaratanController extends Controller
{
    function persyaratan()
    {
        return view('persyaratan');
    }

    function uploadPersyaratan(Request $request)
    {
        $payload = [

            'list' => $request->input('jpenyakit')
        ];


        Persyaratan::query()->create($payload);
        return redirect()->back();
    }
}
