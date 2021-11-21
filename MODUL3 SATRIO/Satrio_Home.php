
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <?php
        include "koneksi.php";
        $show = "SELECT * FROM Buku_table";
        $query = mysqli_query($mysqli, $show);
        $row = mysqli_num_rows($query);
    ?>
   
 
        <h3 class='text-center' style='margin-top:150px'>Belum Ada Buku</h3>
        <hr style='height:7px; background-color:blue'>
        <p class='text-center' style='font-size:20px'>Silahkan Menambahkan Buku</p>
   =
    


    <footer class="footer bg-light mt-5">
        <div class="text-center">
            <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width='150px' class='mt-5'>
            <h3 style='font-weight:bold; color:black; margin-top:20px'>Perpustakaan EAD</h3>
            © Satrio_1202190249
        </div>
    </footer>
</body>

</html>