<?php
require 'functions.php';
$conn = mysqli_connect("localhost","root","","samsung_store");

// cek apakah submit sudah ditekan atau belum
if (isset($_POST["submit"])){

    if(tambah($_POST) > 0 ){
        echo "
        <script>
            document.location.href = 'index.php #tabel1';
        </script>
        ";
    }else {       
        echo "
        <script>
            alert('Data gagal ditambahkan!');
        </script>
        ";
    }
}
?>
<style>
    #tabel1{
        margin-bottom: -70px;
    }
</style>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="ramadhan_icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>SAMSUNG - Official Store</title>
</head>
<body>
    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">       
            <h1>Menu</h1>
        <ul>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#informasi">Info</a></li>
            <li><a href="#calendar">Calendar</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </div>
    <!-- bagian header -->
    <header>
        <div class="container">
        <h1><a href=""><img src="image/samsung_logo.png"></a></h1>
        <ul>
            <li><a href="#about" id="about">About</a></li>
            <li><a href="#informasi" id="informasi">Info</a></li>
            <li><a href="#calendar" id="calendar">Calendar</a></li>
            <li><a href="" id="gallery">Gallery</a></li>
        </ul>
        <!-- untuk hp -->
        <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x" style="color:  #19376D;"></i></label>
        </div>
    </header>
    <!-- bagian calendar -->
    <section class="gambar1" id="calendar">
            <img src="image/s22.png">
            <div class="h2">
            <h2>SAMSUNG</h2>
            <h3>Official store Indonesia</h3>
            <h6 style="margin-top: 16px; font-size: 15px; font-style: italic;">PHP CRUD Version!</h6>
        </div>
    </section>

    <!-- bagian Info -->
<!--     <section class="gambar2" id="informasi">
            <img src="../image/notee8.png">
            <h1>GALAXY NOTE 8</h1>
            <h2>Samsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat keren.Samsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat keren Samsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat keren Samsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar  camera yang sangat keren.Samsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat kerenSamsung Galaxy Note 8 adalah smartphone flagship keluaran samsung pada tahun 2017, menggunakan layar QHDR+, memiliki dual camera yang sangat ke</h2>
        </div>
    </section> -->

    <!-- bagian Gallery -->
<!--     <section class="gallery" id="info">
        <div class="container">
            <h1>Informasi</h1>
            <div class="gallery">
            <img src="bulanbintang.png">
            <h2>Bulan suci Ramadhan adalah bulan yang penuh keberkahan, ampunan dan rakhmat serta kasih sayang dari Allah SWT.Selain menjadikan doa lebih mustajab, salah satu keutamaan puasa Ramadhan adalah sebagai pelindung dari setan. Setan akan selalu berusaha untuk menggoda manusia, agar mereka melakukan hal-hal yang dilarang dalam agama Islam.</h2>
        </div>
    </section> -->

</form>
<style>
    #tabel1{
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
</style>
<html>
<head>  
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
    <body>
    <form action="" method="post">
        <table id="tabel1">
            <tr>
                <td colspan="3" style=" font-size: 50px; font-weight: bold; padding-bottom: 20px; font-style: italic;">Add Product</td>
            </tr>
            <tr>
                <td>Imei</td>
                <td>:</td>
                <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
                <td>tipe</td>
                <td>:</td>
                <td><input type="text" name="tipe" id="tipe"></td>
            </tr>
            <tr>
                <td>processor</td>
                <td>:</td>
                <td><input type="text" name="processor" id="processor"></td>
            </tr>
            <tr>
                <td>memory</td>
                <td>:</td>
                <td><input type="text" name="memory" id="memory"></td>
            </tr>            
            <tr>
                <td>color</td>
                <td>:</td>
                <td><input type="text" name="color" id="color"></td>
            </tr>            
            <tr>
                <td>price</td>
                <td>:</td>
                <td><input type="text" name="price" id="price"></td>
            </tr>
            <tr><td><td></td></td>
                <td colspan="3"><input type="submit" name="submit" id="submit"></td>
            </tr>
        </table>
    </form>
<body>
</body>
</html>
</body>
<footer>
    <h1>Copyrigt by Naufal Fadhilah F</h1>
    <h2>#AntiBootstrap</h2>
</footer>
</html>