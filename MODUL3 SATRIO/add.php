<?php
    include 'koneksi.php';

    $id = rand();
    $judul = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahunTerbit'];
    $desk = $_POST['desk'];
    $bahasa = implode(",", $_POST['bahasa']);
    $tag = implode(",", $_POST['tag']);

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    $path = $id.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'],'assets/'.$path);

    $add = mysqli_query($mysqli, "INSERT INTO Buku_table VALUES ('$id','$judul','$penulis','$tahun','$desk','$bahasa','$tag', '$path')");

    header("location:Satrio_Home.php");
?>