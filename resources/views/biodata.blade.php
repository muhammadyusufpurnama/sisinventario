<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
<p>
    Nama : {{ $nama}}<br>
    Alamat : {{$alamat}} <br>
    Umur : {{$umur}} <br>
    Matakuliah yang diambil :
    <ul>
    @foreach ($matkul as $mk)
        <li>  {{$mk}} </li>
    @endforeach
    </ul>
</p>
<a href="tampiljam/{{ date('G:i:s') }}">Klik disini</a>
</body>
</html>
