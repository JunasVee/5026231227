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

    <h3>Keranjang Belanja</h3>
    <br><br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjang as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>
                    Rp {{ number_format($k->Harga * $k->Jumlah, 0, ',', '.') }}
                </td>
                <td>
                    <a href="{{ url('/latihan1/tambah') }}" class="btn btn-warning btn-sm">Beli</a>
                    <a href="{{ url('/latihan1/batal/'.$k->ID) }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin membatalkan item dengan kode {{ $k->KodeBarang }}?')">
                        Batal
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-3">
        Halaman : {{ $keranjang->currentPage() }} <br/>
    </div>

    <div>
        {{ $keranjang->links() }}
    </div>
@endsection
