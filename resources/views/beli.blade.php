@extends('master2')

@section('title','Data keranjangbelanja')

@section('konten')
	<h2>Yussa Tutoring</h2>
	<h3>Data keranjangbelanja</h3>

	<a href="/keranjangbelanja" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="id" class="col-xs-3 col-form-label mr-2">Kode Pembelian</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="kodebarang" class="col-xs-3 col-form-label mr-2">Kode Barang</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="jumlah" class="col-xs-3 col-form-label mr-2">Jumlah Pembelian</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px; ">
            <div style="width: 15%">
            <label for="harga" class="col-xs-3 col-form-label mr-2">Harga Per Item</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
