<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <h1>Daftar pendonor</h1>

    @foreach ($pendaftar as $p)
    <div>
        <p>Nama: {{$p->nama}}</p>
        <p>Keterangan: {{$p->persyaratan}}</p>
    </div>
    @endforeach
        
    <a href="#"><button>Detail</button></a>
    
  </body>
</html>