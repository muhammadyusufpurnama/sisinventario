@extends('master2')

@section('title','Data Pegawai')

@section('konten')
	<h2>Yussa Tutoring</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px; ">
            <div style="width: 15%">
            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
