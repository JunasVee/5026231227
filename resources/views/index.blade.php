@extends('template')

@section('content')
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <h3>Data Pegawai</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-3">
        Halaman : {{ $pegawai->currentPage() }} <br/>
        Jumlah Data : {{ $pegawai->total() }} <br/>
        Data Per Halaman : {{ $pegawai->perPage() }} <br/>
    </div>

    <div>
        {{ $pegawai->links() }}
    </div>
@endsection
