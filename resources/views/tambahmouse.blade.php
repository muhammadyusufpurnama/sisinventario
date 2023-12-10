@extends('master2')

@section('title','Data mouse')

@section('konten')
	<h2>P.Web A</h2>
	<h3>Data mouse</h3>

	<a href="/mouse" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/mouse/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="merk" class="col-xs-3 col-form-label mr-2">Merk Mouse</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="stock" class="col-xs-3 col-form-label mr-2">Stock Mouse</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="tersedia" class="col-xs-3 col-form-label mr-2">Tersedia</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="char" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data">
        </div>
	</form>
@endsection
