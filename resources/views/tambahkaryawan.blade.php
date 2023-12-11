@extends('master2')

@section('title','Data karyawan')

@section('konten')
	<h2>P Web A</h2>
	<h3>Data karyawan</h3>

	<a href="/karyawan" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="kode" class="col-xs-3 col-form-label mr-2">Kode karyawan</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="kode" name="kode">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama Lengkap</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px; ">
            <div style="width: 15%">
            <label for="divisi" class="col-xs-3 col-form-label mr-2">Divisi</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>
        <div class="form-group row" class="form-inline" style="padding-left: 5px">
            <div style="width: 15%">
            <label for="departemen" class="col-xs-3 col-form-label mr-2">Departemen</label>
            </div>
            <div class="col-xs-9" style="width: 20%">
            <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>

    @foreach($karyawan as $p)
    <script>
        function checkValue() {
          // Ambil nilai dari input
          var inputValue = document.getElementById("kode").value;

          // Array nilai yang diinginkan
          var allowedValues = {{ $p->kodepegawai }};

          // Periksa apakah nilai input ada dalam array
          if (allowedValues.includes(inputValue)) {
            alert("Kode Sama");
            return redirect('/karyawan/tambah');
          } else {
            alert("selamat data ditambahkan");
            return redirect('/karyawan');
          }
        }
        </script>
        @endforeach
@endsection
