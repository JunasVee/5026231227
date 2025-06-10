@extends('template')
@section('content')
    <h3>Data Penghapus</h3>
    <br>
    <a href="/penghapus/tambah" class="btn btn-primary mb-3">+ Tambah Penghapus Baru</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Merek</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penghapus as $p)
            <tr>
                <td>{{ $p->merkpenghapus }}</td>
                <td>{{ $p->hargapenghapus }}</td>
                <td>
                    @if($p->tersedia)
                        <span class="badge badge-success">Tersedia</span>
                    @else
                        <span class="badge badge-danger">Kosong</span>
                    @endif
                </td>
                <td>{{ $p->berat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    Halaman : {{ $penghapus->currentPage() }} <br/>
    Jumlah Data : {{ $penghapus->total() }} <br/>
    Data Per Halaman : {{ $penghapus->perPage() }} <br/>
    {{ $penghapus->links() }}
@endsection
