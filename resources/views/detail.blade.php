<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Detail Pendonor</h1>

    <p>Nama: {{$pendaftar->nama}}</p>
    <p>Alamat: {{$pendaftar->alamat}}</p>
    <p>Jenis Kelamin: {{$pendaftar->jenis_kelamin}}</p>
    <p>Tanggal Lahir: {{$pendaftar->tanggal_lahir}}</p>
    <p>Status: 
        @if ($pendaftar->status == 1)
        Tidak Bisa Mendonor
        @elseif ($pendaftar->status == 2)
          Ke tehap pemeriksaan kesehatan
        @elseif ($pendaftar->status == 3)
          Tidak lolos tes kesehatan
        @elseif ($pendaftar->status == 4)
          Boleh Donor Darah
        @endif
    </p>
    
    
    <form method="POST" action="{{route('tahapDonor', $pendaftar->id)}}">
        @csrf
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label for="">Usia 17-60 tahun (usia 17 tahun
        diperbolehkan menjadi donor bila
        mendapat izin tertulis dari orangtua)</label><br>
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label>Berat badan minimal 45 kg</label><br>
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label>Temperatur tubuh 36,6 - 37,5 derajat
        Celcius</label><br>
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label>Tekanan darah baik yaitu sistole =
        110-160 mmHg, diastole = 70-100 mmHg</label><br>
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label>Denyut nadi teratur yaitu sekitar 50-100
        kali/menit</label><br>
    <input type="checkbox" id="" name="kriteria[]" value="1">
    <label>- Hemoglobin perempuan minimal 12
        gram, sedangkan untuk laki-laki minimal
        12,5 gram</label><br>
    <button type="submit">Kirim</button>
    </form>


</body>
</html>