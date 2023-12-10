@extends('master2')

@section('title','Data mouse')

@section('konten')

	<h2><a>P.Web A</a></h2>
	<h3>Edit mouse</h3>

	<a href="/mouse" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mouse as $p)
	<form action="/mouse/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="kode" class="col-xs-3 col-form-label mr-2">Kode Mouse</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="number" required="required" name="kode" value="{{ $p->kodemouse }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="merk" class="col-xs-3 col-form-label mr-2">Merk Mouse</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="text" required="required" name="merk" value="{{ $p->merkmouse }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="stock" class="col-xs-3 col-form-label mr-2">Stock Mouse</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
                <input type="number" required="required" name="stock" value="{{ $p->stockmouse }}">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="tersedia" class="col-xs-3 col-form-label mr-2">Tersedia</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="char" class="form-control" id="tersedia" name="tersedia" value="{{$p->tersedia}}">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
