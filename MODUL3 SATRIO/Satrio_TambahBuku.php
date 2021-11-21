<?php

include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM Buku_Table ORDER BY id_buku DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <style>
    .form {
        margin: auto;
        margin-top: 100px;
        background-color: white;
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2), 0 20px 50px 0 rgba(0, 0, 0, 0.19);
        border-radius: 10px;
        width: 1000px;
        height: 1000px;
        padding-right: 50px;
        padding-left: 50px;
    }

    .form-fill label {
        font-weight: bold;
    }

    .footer {
        padding-top: 50px;
        padding-bottom: 50px;
    }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Satrio_Home.php"><img
                    src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width='100px'></a>
            <a href="Satrio_TambahBuku.php">
                <button class="btn btn-primary me-2" type="button">Tambah Buku</button>
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="form">
            <br> <br>
            <h2 class='text-center'>Tambah Data</h2>
            <form class='form-fill' action="add.php" method='post'>
                <div class="form-group mt-5">
                    <label for="judulBuku">Judul Buku</label>
                    <input type="text" class="form-control mt-2" name='judulBuku' id="judulBuku"
                        placeholder="Contoh: Pemrograman Web Bersama EAD">
                </div>

                <div class="form-group mt-3">
                    <label for="Penulis">Penulis</label>
                    <input type="text" class="form-control mt-2" name='penulis' id="penulis" value='Satrio_1202190249' readonly>
                </div>

                <div class="form-group mt-3">
                    <label for="tahunTerbit">Tahun Terbit</label>
                    <input type="text" class="form-control mt-2" name='tahunTerbit' id="tahunTerbit" placeholder='Contoh: 1990'>
                </div>

                <div class="form-group mt-3">
                    <label for="desk">Deskripsi</label>
                    <textarea class="form-control mt-2" id="desk" name='desk' placeholder='Contoh: Buku ini menjelaskan tentang ...'
                        rows='4'></textarea>
                </div>

                <div class="radio mt-3" style='display:flex'>
                    <p style='font-weight:bold'>Bahasa</p>
                    <div class="form-check" style='margin-left:50px'>
                        <input class="form-check-input" type="radio" name="bahasa[]" id="exampleRadios1" value="Indonesia">
                        <label class="form-check-label" style='font-weight:normal' for="exampleRadios1">
                            Indonesia
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="radio" name="bahasa[]" id="exampleRadios2" value="lainnya">
                        <label class="form-check-label" style='font-weight:normal' for="exampleRadios2">
                            Lainnya
                        </label>
                    </div>
                </div>

                <div class="check mt-3" style='display:flex'>
                    <p style='font-weight:bold'>Tag</p>
                    <div class="form-check" style='margin-left:50px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="Pemrograman" id="defaultCheck1">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck1">
                            Pemrograman
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="Website" id="defaultCheck2">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck2">
                            Website
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="Java" id="defaultCheck3">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck3">
                            Java
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="OOP" id="defaultCheck4">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck4">
                            OOP
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="MVC" id="defaultCheck5">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck5">
                            MVC
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="Kalkulus" id="defaultCheck6">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck6">
                            Kalkulus
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="checkbox" name='tag[]' value="Lainnya" id="defaultCheck7">
                        <label class="form-check-label" style='font-weight:normal' for="defaultCheck7">
                            Lainnya
                        </label>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" name='foto' type="file">
                </div>

                <div class="d-flex justify-content-center" style='margin-top:150px;'>
                    <button class="btn btn-primary" name="tambah" value="tambah" style='width: 500px' type="submit">+ TAMBAH</button>
                </div>
            </form>


        </div>
    </div>

    <footer class="footer bg-light mt-5">
        <div class="text-center">
            <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width='150px' class='mt-5'>
            <h3 style='font-weight:bold; color:black; margin-top:20px'>Perpustakaan EAD</h3>
            © Satrio_1202190249
        </div>
    </footer>
 
</body>




</html>