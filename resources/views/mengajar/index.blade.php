@extends('main.layout')
@section('content')

<center>
    <b>
        <h2>List Data Mengajar</h2>
        <a href="/mengajar/create" class="button-primary"> Tambah Data Mengajar </a>
        @if( session('success'))
            <p class="text-success"> {{ session('success')}}</p>
        @endif
        @if( session('error'))
            <p class="text-danger"> {{ session('error')}}</p>
        @endif

        <table  cellpadding="10">
            <tr>
                <th>No</th>
                <th>Guru</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            @foreach($mengajar as $me)

            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $me->guru->nama_guru}}</td>
                <td>{{ $me->mapel->nama_mapel}}</td>
                <td>{{ $me->kelas->nama_kelas}}</td>
                <td>
                        <a href="/mengajar/edit/{{ $me->id }}" class="button-warning">Edit</a>
                        <a href="/mengajar/destroy/{{ $me->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus ? :(')">Hapus</a>
                </td>
            </tr>
            @endforeach

        </table>
    </b>
</center>

@endsection