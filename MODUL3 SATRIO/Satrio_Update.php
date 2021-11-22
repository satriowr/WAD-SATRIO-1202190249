<?php
    include 'koneksi.php';
    
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul_buku'];
        $penulis = $_POST['penulis_buku'];
        $tahun = $_POST['tahun_terbit'];
        $desk = $_POST ['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(",",$_POST['tag']);
        
        $add = mysqli_query($mysqli, "UPDATE Buku_table SET judul_buku= '$judul', penulis_buku= '$penulis', tahun_terbit= '$tahun', deskripsi= '$desk', bahasa='$bahasa', tag='$tag' WHERE id_buku = '$id'");
        header("location:Satrio_Home.php");
    }
?>

