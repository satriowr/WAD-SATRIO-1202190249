


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

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
      .content{
          margin:auto;
          margin-top:100px;
          width: 1000px;
          height: 500px;
          background-color:white;
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
        <div class="content">
        
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Tempat</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tanggal Perjalanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      include "koneksi.php";
                      $cart = mysqli_query($conn, "SELECT * FROM booking");
                      $nomor = 1;
                      $sum = 0;
                      
                      while($data = mysqli_fetch_array($cart)){
                        //var_dump($data);  
                        $sum = $sum + (int)$data['harga']; 
                    ?>            
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data["nama_tempat"]; ?></td>
                            <td><?php echo $data["lokasi"]; ?></td>
                            <td><?php echo $data["tanggal"]; ?></td>
                            <td>Rp<?php echo number_format($data["harga"]); ?></td>
                            <td>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id_booking" value=<?= $data["id"]?> >
                                    <button type=" submit" name="delete" class="btn btn-danger" onclick="return confirm('Apa kamu yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                      <?php } ?>
                        <tr>
                            <td colspan="4" class="font-weight-bold">Total</td>
                            <td class="fw-bold"
                                        colspan="2"><?= "Rp " . number_format($sum, 2, ',', '.'); ?></td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>
    
    <footer class="footer fixed-bottom" style="background-color: #90b9f3; height: 40px">
      <div class="text-center mt-3">
        <a style="text-decoration: none; color: black" href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">© Copyright Satrio_1202190249</a>
      </div>
    </footer>

</body>
</html>