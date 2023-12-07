@extends('master2')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Pegawai</h3>

	<a href="/pegawai" class="btn btn-success"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <div class="form-inline">
        <div style="width: 20%; border:solid 1px black; height: 250px; width: 200px;">
            <div style="border:solid 1px black; position: absolute;top: 330px;left: 185px; -ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%); height: 200px; width: 150px;"></div>
        </div>
        <div style="width: 50%">
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Nama
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                <input type="text" required="required" disabled style="border-style: hidden" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Jabatan
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                    <input type="text" required="required" disabled style="border-style: hidden" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Umur
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                <input type="number" disabled style="border-style: hidden" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Alamat
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                <textarea required="required" disabled style="border-style: hidden" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <div href="/pegawai" class="btn btn-success" style="position:fixed; left: 32%;"> Kembali</div>
        </div>
    </div>
	@endforeach
@endsection
