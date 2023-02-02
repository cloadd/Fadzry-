@extends('main.layout')
@section('content')

<center>
        <h2>Tambah Data Nilai</h2>
        <form action="/nilai/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Guru Mapel</td>
                    <td class="bar">
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $m)
                            <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }}</option>
                        @endforeach

                    </select> 
                    </td>
                </tr>

                <tr>
                    <td class="bar">Siswa</td>
                    <td class="bar">
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id }}">{{ $s->nama_siswa}}</option>
                        @endforeach

                    </select> 
                    </td>
                </tr>

                <tr>
                    <td widht="25%">UH</td>
                    <td widht="25%">
                    <input type="number" name="uh">
                    </td>
                </tr>

                <tr>
                    <td widht="25%">UTS</td>
                    <td widht="25%">
                    <input type="number" name="uts">
                    </td>
                </tr>

                <tr>
                    <td widht="25%">UAS</td>
                    <td widht="25%">
                    <input type="number" name="uas">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                            <button class="button-primary" type="submit"> Simpan </button>
                        </center>
                    </td>
                </tr>

            </table>
        </form>
</center>
@endsection