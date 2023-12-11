@extends('master2')

@section('title','Data karyawan')

@section('konten')
	<h2>P Web A</h2>
    <h4>Data karyawan</h4>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th class="text-center">Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{$p->departemen}}</td>
			<td class="text-center">
		    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah karyawan Baru</a>
@endsection
