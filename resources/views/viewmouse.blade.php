@extends('master2')

@section('title','Data mouse')

@section('konten')

	<h2><a>P.Web A</a></h2>
	<h3>View mouse</h3>

	<br/>
	<br/>

	@foreach($mouse as $p)
    <div class="form-inline">
        <div style="width: 20%; border:solid 1px black; height: 250px; width: 200px;">
            <div style="border:solid 1px black; margin-top:25px; margin-left: 25px; height: 200px; width: 150px; float:left"></div>
        </div>
        <div style="width: 50%">
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Kode Mouse
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                <input type="number" required="required" disabled style="border-style: hidden" name="nama" value="{{ $p->kodemouse }}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Merk Mouse
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                    <input type="text" required="required" disabled style="border-style: hidden" name="jabatan" value="{{ $p->merkmouse}}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Stock Mouse
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                <input type="number" disabled style="border-style: hidden" required="required" name="umur" value="{{ $p->stockmouse }}">
                </div>
            </div>
            <div class="form-group row" class="form-inline" style="padding-left: 20px; padding-top: 10px">
                <div style="width: 20%">
                Tersedia
                </div>
                :
                <div class="col-xs-9" style="width: 20%">
                    <input disabled class="form-check-input" type="checkbox" value="" {{ $p->tersedia === 'Y' ? 'checked' : '' }} id="flexCheckDefault">
                {{-- <input required="required" disabled style="border-style: hidden; float: left;" name="alamat" value="@if ( $p->stockmouse == 0) Tidak Tersedia
                @else Tersedia @endif"> --}}
                </div>
            </div>
            <div style="width:30%; margin-top:20px">
            <a href="/mouse" class="btn btn-danger" style="float:right;"> Kembali</a>
            </div>
        </div>
    </div>
	@endforeach
@endsection
