<?php
    include 'koneksi.php';
    $id = $_POST["id_booking"];

    //var_dump($id);

    mysqli_query($conn, "DELETE FROM booking WHERE id='$id'");

    header("location:cart.php");
?>