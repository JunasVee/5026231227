@extends('template')

@section('content')
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
        /* Shrink the “previous” and “next” arrows */
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            min-width: 1.5rem;
        }
    </style>

    <h3>Data Pegawai</h3>
    <br><br>

    <a href="{{ url('/pegawai/tambah') }}" class="btn btn-primary mb-3">+ Tambah Pegawai Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="{{ url('/pegawai/edit/'.$p->pegawai_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('/pegawai/hapus/'.$p->pegawai_id) }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data {{ $p->pegawai_nama }}?')">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-3">
        Halaman : {{ $pegawai->currentPage() }} <br/>
        {{-- Jumlah Data : {{ $pegawai->total() }} <br/>
        Data Per Halaman : {{ $pegawai->perPage() }} <br/> --}}
    </div>

    <div>
        {{ $pegawai->links() }}
    </div>
@endsection
