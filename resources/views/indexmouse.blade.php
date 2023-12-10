@extends('master2')

@section('title','Data mouse')

@section('konten')
	<h2>P.Web A</h2>
    <h4>Data mouse</h4>

	<a href="/mouse/tambah" class="btn btn-primary"> + Tambah mouse Baru</a>

	<br/>
    <p>Cari Data mouse :</p>
	<form action="/mouse/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama mouse .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Mouse</th>
			<th>Merk Mouse</th>
			<th>Stock Mouse</th>
			<th class="text-center">Tersedia</th>
			<th class="text-center">Opsi</th>
		</tr>
		@foreach($mouse as $p)
		<tr>
			<td>{{ $p->kodemouse }}</td>
			<td>{{ $p->merkmouse }}</td>
			<td>{{ $p->stockmouse }}</td>
			{{-- <td>@if ( $p->stockmouse == 0)
            Tidak Tersedia
            @else
            Tersedia
            @endif</td> --}}
            <td class="text-center"><input disabled class="form-check-input" type="checkbox" value="" {{ $p->tersedia === 'Y' ? 'checked' : '' }} {{ $p->tersedia === 'N' ? 'disabled' : '' }} id="flexCheckDefault{{ $loop->iteration }}"></td>
			<td class="text-center">
                <a href="/mouse/view/{{ $p->kodemouse }}" class="btn btn-success">View</a>
                |
				<a href="/mouse/edit/{{ $p->kodemouse }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mouse/hapus/{{ $p->kodemouse }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
