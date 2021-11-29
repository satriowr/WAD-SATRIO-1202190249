<?php
    include "koneksi.php";

    $id = rand();
    $user_id = rand();
    $nama_tempat = $_POST["nama_tempat"];
    $lokasi = $_POST["lokasi"];
    $harga = $_POST["harga"];
    $date = $_POST["tanggalPerjalanan"];

    $add = mysqli_query($conn, "INSERT INTO booking VALUES ($id, $user_id, $nama_tempat, $lokasi, $harga, $date)");


    header("location:cart.php");

?>