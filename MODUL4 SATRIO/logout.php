<?php
session_start();
unset($_SESSION['sudah_login']);
session_destroy();
header("Location:login.php");
?>