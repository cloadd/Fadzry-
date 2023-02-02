<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Penilaian Siswa</title>
</head>
<body>
    
    <div class="header">
        <img src="{{ asset('/gambar/header.jpg')}}" alt="header.jpg" width="100%" height="100%" srcset="">
    </div>

    <div class="menu">
        <b>
            <a href="/home">Home</a>
            @if(session('user')->role == 'admin')
            <a href="/guru/index">Guru</a>
            <a href="/jurusan/index">Jurusan</a>
            <a href="/kelas/index">Kelas</a>
            <a href="/siswa/index">Siswa</a>
            <a href="/mapel/index">Mapel</a>
            <a href="/mengajar/index">Mengajar</a>
            @else
            <a href="/nilai/index">Nilai</a>
            @endif
            <a href="/logout">Logout</a>
        </b>
    </div>

    @yield('content')

    <div class="footer">
        <center>
            <p>
                $copy {{ date('Y')}} - Ujikom LSP
            </p>
        </center>
    </div>
</body>
</html>