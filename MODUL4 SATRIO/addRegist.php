<?php
    include 'koneksi.php';

    $id = rand();
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    // enkripsi password
    $password = $_POST['password'];
    $nomor = $_POST['nomor'];

    $add = mysqli_query($conn, "INSERT INTO users VALUES ('$id','$nama','$email','$password','$nomor')");

    if ($_POST["password"] == $_POST["passwordConf"]) {
        header("location:index.php");
    }
    else {
      header("location:registrasi.php");

      
    }

    
?>