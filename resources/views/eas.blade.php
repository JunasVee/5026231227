@extends('template')

@section('content')

    <h3>Nilai Siswa</h3>
    <br>

    <a class="btn btn-primary mb-3" href="{{ url('/eas/tambah') }}">Tambah Nilai</a>
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                @if ($n->nilaiangka <= 40)

                        <td>D</td>

                    @elseif ($n->nilaiangka >= 41 && $n->nilaiangka <= 60)

                        <td>C</td>

                    @elseif ($n->nilaiangka >= 61 && $n->nilaiangka <= 80)

                        <td>B</td>

                    @else
                        <td>A</td>

                @endif
                <td>{{ $n->nilaiangka * $n->sks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
