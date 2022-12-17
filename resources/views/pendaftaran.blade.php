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

    <form method="post" action="{{route('daftar')}}" 
    enctype="multipart/form-data">
      @csrf
      <label for="">Nama</label>
      <input type="text" name="nama" id=""> <br> <br>
      <label for="">Jenis kelamin</label>
      <input type="text" name="jkelamin" id=""> <br> <br>
      <label for="">Tanggal lahir</label>
      <input type="text" name="tlahir" id=""> <br> <br>
      <label for="">Alamat</label>
      <input type="text" name="alamat" id=""> <br> <br>
      <button type="submit">Tambah</button>
    </form>
    
  </body>
</html>