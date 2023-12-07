@extends('master2')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px; ">
            <div style="width: 15%">
            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
