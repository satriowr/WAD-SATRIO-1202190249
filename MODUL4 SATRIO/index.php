<?php 
session_start();

include "koneksi.php";

if($_SESSION['status']!="sudah_login"){
  header("location:login.php");
}

else{
  ?>
    <div class="alert alert-success mt-5">
      Berhasil login
    </div>
  <?php
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"     integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"     crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"   crossorigin="anonymous"></script>

    <style>
      body {
        background-color: #fff9e7;
      }

      .title {
        margin: auto;
        margin-top: 70px;
        width: 1100px;
        height: 100px;
        background-color: #95c5a5;
      }

      .title h1 {
        text-align: center;
      }

      .item {
        margin-top: 10px;
      }
    </style>
  </head>

  <body>
    <nav style="background-color: #90b9f3" class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a style="color: black; font-weight: bold; margin-left: 200px" class="navbar-brand" href="#">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <a href="cart.php">
        <img style='margin-left:850px' width='20px' src="https://i.ibb.co/jg6v7k3/Pin-Clipart-com-purchase-clipart-85066.png">
        </a>
        
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='text-decoration:none; color:black;'>
          Lorem ipsum
        </a>
        <div style='margin-left: 850px; margin-top:140px' class="dropdown-menu" aria-labelledby="navbarDropdown" id='navbarDropdown'>
          <a class="dropdown-item" href="profile.php">profile</a>
          <a class="dropdown-item" href="logout.php">logout</a>
        </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="title">
        <br />
        <h1>EAD Travel</h1>
      </div>

      <div class="item d-flex flex-direction-row justify-content-center" style="margin-bottom: 100px; height: 500px">
        <div class="card" style="width: 22rem; margin-right: 20px">
          <img height="220px" src="https://asset.kompas.com/crops/N5Z83656bW7uLqq8UJtlzxV5SEE=/0x0:1020x680/750x500/data/photo/2019/08/29/5d67a6c460dd7.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
          
            <h5 class="card-title">Raja Ampat, Papua</h5>
            <p class="card-text">
              Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.
            </p>
            <hr />
            <h5 style="font-weight: bold">Rp. 7.000.000</h5>
          </div>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="button d-flex justify-content-center">
                <a href="#modalDate1" data-bs-toggle="modal" data-bs-target="#modalDate1">
                  <button style="width: 320px" type="button" class="btn btn-primary">Pesan Tiket</button>
                </a>
              </div>
            </li>
          </ul>
        </div>

        <div class="card" style="width: 22rem; margin-right: 20px">
          <img height="220px" src="https://asset.kompas.com/crops/jNJCw78jRpATerjMmadbBwqblkE=/0x0:1800x1200/750x500/data/photo/2021/05/10/6099375e04acb.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Gunung Bromo, Malang</h5>
            <p class="card-text">
              Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten.
            </p>

            <hr />
            <h5 style="font-weight: bold">Rp. 2.000.000</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="button d-flex justify-content-center">
                <a href="#modalDate" data-bs-toggle="modal" data-bs-target="#modalDate">
                  <button style="width: 320px" type="button" class="btn btn-primary">Pesan Tiket</button>
                </a>
              </div>
            </li>
          </ul>
        </div>

        <div class="card" style="width: 22rem">
          <img
            height="233.33px"
            src="data:image/jpeg;base64,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"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Tanah Lot, Bali</h5>
            <p class="card-text">
              Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura
              Uluwatu.
            </p>
            <hr />
            <h5 style="font-weight: bold">Rp. 5.000.000</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="button d-flex justify-content-center">
                <a href="#modalDate" data-bs-toggle="modal" data-bs-target="#modalDate">
                  <button style="width: 320px" type="button" class="btn btn-primary">Pesan Tiket</button>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <footer class="footer fixed-bottom" style="background-color: #90b9f3; height: 40px">
      <div class="text-center mt-3">
        <a style="text-decoration: none; color: black" href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">© Copyright Satrio_1202190249</a>
      </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Created By</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <p>Nama &nbsp;&nbsp; : Satrio Rahman Wicaksono</p>
            <p>NIM &nbsp; &nbsp; &nbsp; : 1202190249</p>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="modalDate1" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
        <form method='post' action='addRajaAmp.php'>
          
          <div class="form-group">
              <input class="form-control" type="hidden" name="nama_tempat" value='Raja Ampat'>
              <input class="form-control" type="hidden" name="lokasi" value='Papua'>
              <input class="form-control" type="hidden" name="harga" value=7000000>
              <label for="tanggalPerjalanan" class="form-label">Tanggal Perjalanan</label>
              <input type="date" class="form-control" name="tanggalPerjalanan" id="tanggalPerjalanan" />
          </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name='add' type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
        </form>
        </div>
      </div>
      
    </div>
  </body>
</html>
