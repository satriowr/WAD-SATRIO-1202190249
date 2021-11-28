<?php 
 
include 'koneksi.php';

$profile = mysqli_query($conn, "SELECT * FROM users");

$row = mysqli_fetch_array($profile);

$id = $row['id'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$password = $_POST['password'];
 
$update = mysqli_query($conn, "UPDATE users SET nama='$nama', no_hp='$nomor', password='$password' WHERE id='$id'");
$cek = mysqli_num_rows($update);

if ($cek==1) {
    $_SESSION['status']="sudah_update";
    header("location:index.php");
    
  }

header("location:profile.php");
?>