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
</head>

<body>
    <div class="navbar">
        <img src="Logo_Deepl.png" width="100px" class="float-left" style="background-color: #efefef;">
        <a href="#home">Home</a>
        <div class="subnav">
            <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#company">Company</a>
                <a href="#team">Team</a>
                <a href="#careers">Careers</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#bring">Bring</a>
                <a href="#deliver">Deliver</a>
                <a href="#package">Package</a>
                <a href="#express">Express</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#link1">Link 1</a>
                <a href="#link2">Link 2</a>
                <a href="#link3">Link 3</a>
                <a href="#link4">Link 4</a>
            </div>
        </div>
        <a href="#contact">Contact</a>
        <header
            style="background-color:#efefef; color: #031c50; padding-top: 10px; text-align: right; padding-left: 120px;">
            <h6><small>SELAMAT DATANG</small></h6>
        </header>
    </div>

    <div style="padding-right: 75px; float: right;">
        <br>
        <h6><b>Output Language</b></h6>
        <form action="/action_page.php">
            <textarea id="Output" name="Output" rows="6"
                cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
            <br>
        </form>
    </div>
    <div style="padding-left: 75px;">
        <br>
        <h6><b>Input Language</b></h6>
        <form action="/action_page.php">
            <textarea id="Input" name="Input" rows="6"
                cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
            <h6><small> hanya 250 kata </small></h6>
            <br>
        </form>
    </div>

    <br>
    <p></p>
    <div class="d-flex btn-group-vertical">
        <div class="align-self-center text-justify text-center">
            <div class="container border">
                <h2>Registrasi akun</h2>
                <h6>Registrasi akun untuk menambah batas menjadi 300 kata</h6>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Buat akun
                </button>

                <!-- The Modal -->
                <div class="modal fade text-left" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content shadow-lg p-4 mb-4 bg-white">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Akun baru</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="/action_page.php">
                                    <label for="Email">Email :</label>
                                    <input type="email" id="Email" name="Email"><br><br>
                                    <label for="Password">Password :</label>
                                    <input type="password" id="Password" name="Password"><br><br>
                                    <input type="submit" value="Submit" data-dismiss="modal">
                                </form>
                            </div>

                            <div class="modal-footer" id="myAlert">
                                <h6>Informasi akun akan disimpan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
