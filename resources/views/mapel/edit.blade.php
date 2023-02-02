@extends('main.layout')
@section('content')

<center>
    <b>
        <h2>Ubah Data Mapel</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="post">
             @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Mapel</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                            <button class="button-primary" type="submit"> Edit </button>
                        </center>
                    </td>
                </tr>
            </table>

        </form>
    </b>
</center>

@endsection