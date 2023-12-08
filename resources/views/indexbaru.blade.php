@extends('masterbaru')

@section('title','Data keranjangbelanja')

@section('konten')
	<h2>Yussa Tutoring</h2>
    <h4>Data keranjangbelanja</h4>

	<br>
    <a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli keranjangbelanja Baru</a>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th class="text-center">Kode<br>Pembelian</th>
			<th class="text-center">Kode Barang</th>
			<th class="text-center">Jumlah<br>Pembelian</th>
			<th class="text-center">Harga per<br>item</th>
			<th class="text-center">Total</th>
            <th class="text-center">Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>
                <?php echo number_format( $p->Harga,2,",",".")
                ?>
            </td>
            <td>
                <?php echo number_format($p->Harga  *  $p->Jumlah,2,",",".")?>
            </td>
			<td>
				<a href="/keranjangbelanja/batal/{{ $p->ID }}" class="btn btn-danger">batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
