<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    function login()
    {
        return view('login');
    }

    function masuk(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        $petugas = Petugas::query()->where("email", $email)->first();

        if ($petugas == null) {
            return redirect()
            ->back()
            ->withErrors(["msg" => "Email tidak ditemukan"]);
        }

        if (!Hash::check($password, $petugas->password)) {
            return redirect()->back()->withErrors(["msg" => "Password salah!"]);
        }

        if (!session()->isStarted()) {
            session()->start();
        }
        session()->put("logged", true);
        session()->put("idPetugas", $petugas->id);
        return redirect()->route("dashboard");
    }

    function addSyarat()
    {
        return view('addsyarat');
    }

    function list()
    {
        $pendaftar = Pendaftaran::query()->get();
        return view('dashboard', compact('pendaftar'));
    }

    function detail($id)
    {
        $pendaftar = Pendaftaran::query()->where('id', $id)->first();

        return view('detail', compact('pendaftar'));
    }

    function tahapDonor(Request $request, $id)
    {
        $kriteria = $request->kriteria;
        $jml = 0;

        if(isset($kriteria)){
            for($i=0; $i<count($kriteria); $i++){
                $jml = $jml+$kriteria[$i];
            }
        }

        if($jml < 6){
            $status = 3;
        }else {
            $status = 4;
        }

        $data['status'] = $status;

        Pendaftaran::where('id', $id)->update($data);        

        return redirect()->back();
    }

    function logout()
    {
        session()->flush();
        return redirect()->route("login");
    }
}
