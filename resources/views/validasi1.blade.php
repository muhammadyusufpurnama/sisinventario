<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm() {
            var nama = document.getElementById("bil1"); //membaca objek
            var nrp = document.getElementById("nrp"); //membaca objek
            var setuju = document.getElementById("switch1"); //membaca objek

            // alert(setuju.checked);
            // return false;

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (nama.value == "") {
                nama.focus();
                // nama.value = "Yusuf";
                Swal.fire("Nama harus diisi terlebih dahulu");
                return false;//dibawah ini, tidak akan dijalankan
            }
            // else {
            //     return true;
            // }

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (nrp.value == ""){
                Swal.fire("NRP harus diisi terlebih dahulu");
                return false;//dibawah ini, tidak akan dijalankan
            }

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (isNaN(nrp.value)){
                Swal.fire("NRP harus diisi dengan angka");
                return false;//dibawah ini, tidak akan dijalankan
            }

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (nrp.value.length != 10){
                Swal.fire("NRP harus diisi dengan 10 angka");
                return false;//dibawah ini, tidak akan dijalankan
            }

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (nrp.value.substring(0,4) != "5026"){
                Swal.fire("4 digit NRP awal harus diisi dengan 5026");
                return false;//dibawah ini, tidak akan dijalankan
            }

            //if ini hanya untuk validation pengecualian exception atau pengecualian.
            if (setuju.checked == false){
                Swal.fire("Anda harus setuju dengan perjanjian diatas");
                return false;//dibawah ini, tidak akan dijalankan
            }

            //jika return false , maka form tidak dikirim
            //default return true
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran Anggota HIMASI</h1>
        <!-- Return true, form bisa terkirim. Return false, form tidak dikirim -->
        <form action="https://www.google.com" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="bil1">Nama Mahasiswa</label>
                <input id="bil1" type="text" class="form-control" placeholder="Harus diisi" />
            </div>

            <div class="form-group">
                <label for="nrp">NRP Mahasiswa</label>
                <input id="nrp" type="text" class="form-control" placeholder="Harus diisi 10 digit angka" />
            </div>

            <div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="switch1">
                    <label class="custom-control-label" for="switch1">Saya setuju dengan peraturan diatas</label>
                </div>
            </div>
            <input type="submit" class="btn btn-dark" value="KIRIM">
        </form>
    </div>
</body>

</html>
