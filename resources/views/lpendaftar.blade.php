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
      @foreach ($persyaratan as $pr) 
      @if ($pr->id == $p->id_persyaratan)          
        <div>
          <p>Nama: {{$p->nama}}</p>
          <p>Keterangan: {{$pr->list}}</p>
        </div>
      @endif
      @endforeach
    @endforeach
        
    <a href="#"><button>Detail</button></a>
    
  </body>
</html>