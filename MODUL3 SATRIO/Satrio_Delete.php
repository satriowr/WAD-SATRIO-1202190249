<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $query = "DELETE FROM buku_table where id_buku ='$id'";

    $deleteQuery = mysqli_query($mysqli, $query);

    header('location:Satrio_Home.php');

?>