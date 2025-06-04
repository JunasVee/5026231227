@extends('template')
@section('content')
	<h3>Data Pegawai</h3>
    <br>
    <br>
	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<h3>Data Pegawai</h3>


	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


	{{ $pegawai->links() }}
@endsection
