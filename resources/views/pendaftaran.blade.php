<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>form pendaftaran data diri</h1>

    <form method="post" action="{{route('store')}}" 
    enctype="multipart/form-data">
      @csrf
      <label for="">Nama</label>
      <input type="text" name="nama" id=""> <br> <br>
      <label for="">Jenis kelamin</label>
      <select name="jkelamin" id="">
        <option value="pria">pria</option>
        <option value="wanita">wanita</option>
      </select><br><br>
      <label for="">Tanggal lahir</label>
      <input type="date" name="tlahir" id=""> <br> <br>
      <label for="">Alamat</label>
      <input type="text" name="alamat" id=""> <br> <br>


      @foreach ($syarat as $s)
        <input type="checkbox" id="" name="persyarat[]" value="1">
        <label for="">{{$s->list}}</label><br>
      @endforeach<br>
    <button type="submit">Tambah</button>
    </form><br>

    <a href="{{route('login')}}"><button>Login Petugas</button></a>

  </body>
</html>