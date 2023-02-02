@extends('main.layout')
@section('content')

<center>
    <b>
        <h2>Tambah Data Mapel</h2>
        <form action="/mapel/store" method="post">
        @csrf
        <table width="50%">
                <tr>
                    <td class="bar">Nama Mapel</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel">
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
    </b>
</center>

@endsection