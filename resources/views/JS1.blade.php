<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #efefef;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .subnav {
            float: left;
            overflow: hidden;
        }

        .subnav .subnavbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: #333;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .subnav:hover .subnavbtn {
            background-color: #9e9e9e;
        }

        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: #9e9e9e;
            width: 100%;
            z-index: 1;
        }

        .subnav-content a {
            float: left;
            color: #333;
            text-decoration: none;
        }

        .subnav-content a:hover {
            background-color: #eee;
            color: black;
        }

        .subnav:hover .subnav-content {
            display: block;
        }
    </style>
    <script>
        function changeText() {
            var span = document.getElementById("output"); //membaca object span
            var textBox = document.getElementById("textbox"); //membaca object textbox

            textBox.style.color = "red";
            //<input type="text" style="color;red;">
            //span.innerHTML = "Sistem Informasi";
            span.innerHTML = textBox.value; //mengganti isi yang selain form elements
            span.className = "text-primary"; //menggangti class css
        }
    </script>

    <!-- Library bikin sendiri -->
    <script src="myFunction.js"></script>

</head>

<body>
    <script>
        function showAlert() {
            alert("Selamat anda memenangkan undian 100 jt !");
        }

        function tambah() {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var hasil = document.getElementById("hasil");

            hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value);
        }

        function kali() {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var hasil = document.getElementById("hasil");

            hasil.innerHTML = parseInt(bil1.value) * parseInt(bil2.value);
        }
    </script>
    <button class="btn btn-danger" onclick="showAlert();">klik disini</button>
    <br>
    <button onclick="changeText();" class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control" />
    <br>

    <div class="form-group">
        <label for="bil1">Bilangan 1</label>
        <input id="bil1" type="number" class="form-control" placeholder="Masukkan Bilangan 1" />
    </div>

    <div class="form-group">
        <label for="bil2">Bilangan 2</label>
        <input id="bil2" type="number" class="form-control" placeholder="Masukkan Bilangan 2" />
    </div>

    <div class="btn-group">
        <button onclick="tambah()" class="btn btn-success">Penjumlahan</button>
        <button onclick="kali();" class="btn btn-warning">Perkalian</button>
    </div>
    <h2>Hasil Operasi = <div id="hasil"></div>
    </h2>
</body>

</html>
