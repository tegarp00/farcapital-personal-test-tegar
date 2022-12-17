<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Selamat datang di dashboard petugas </h1>
    <a href="{{route('addsyarat')}}"><button>Tambah Syarat</button></a>
    <a href="{{route('logout')}}"><button>Logout</button></a>

    <h4>Daftar Pendonor</h4>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftar as $p)
            <tr>
                <td>{{$p->nama}}</td>
                <td>
                    @if ($p->status == 1)
                    Tidak Bisa Mendonor
                    @elseif ($p->status == 2)
                    Ke tehap pemeriksaan kesehatan
                    @elseif ($p->status == 3)
                    Tidak lolos tes kesehatan
                    @elseif ($p->status == 4)
                    Boleh Donor Darah
                    @endif
                </td>
                <td><a href="{{route('detail', $p->id)}}"><button>detail</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>