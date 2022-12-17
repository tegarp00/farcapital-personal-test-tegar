<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form method="POST" action="{{route('usyarat')}}">
        @csrf
        <lable>Jenis Penyakit</lable>
        <input type="text" name="jpenyakit">
        <button type="submit">Masukkan</button>
    </form><br>
    <a href="{{route('dashboard')}}"><button>Back to Dashboard</button><a>

</body>
</html>