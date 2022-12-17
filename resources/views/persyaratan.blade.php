<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>isikan sakit yang sedang dialami atau pernah mengalami</h1>

    <form method="post" action="{{route('usyarat')}}" 
    enctype="multipart/form-data">
      @csrf
      <label for="">Masukkan</label>
      <input type="text" name="masukkan" id=""> <br> <br>
      <button type="submit">Tambah</button>
    </form>

    <p>Jika tidak ada silahkan klik tombol <a href="/"> <button>skip</button></a></p>
    
  </body>
</html>