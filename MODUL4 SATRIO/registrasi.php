<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <style>
      body {
        background-color: #fff9e7;
      }

      .form-container {
        margin: auto;
        border-radius: 3px;
        border-style: solid;
        border-width: 1px;
        border-color: #eeeeee;
        width: 450px;
        height: 650px;
        background-color: white;
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
          <ul style="margin-left: 800px" class="navbar-nav">
            <li class="nav-item">
              <a style="color: black" class="nav-link active" aria-current="page" href="registrasi.html">Register</a>
            </li>
            <li class="nav-item">
              <a style="color: gray" class="nav-link" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="form-register" style="margin-top: 100px">
      <div class="container">
        <div class="form-container">
          <div class="container" style="width: 400px; margin-top: 30px">
            <h4 class="text-center">Register</h4>
            <hr />
            <form action="?">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                <input type="number" class="form-control" name="nomor" placeholder="Masukkan Nomor Handphone" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" name="passwordConf" placeholder="Masukkan Kata Sandi" />
              </div>

              <div class="button d-flex justify-content-center">
                <button style="width: 150px" type="submit" class="btn btn-primary">Daftar</button>
              </div>

              <div class="addOn mt-4 text-center">
                <p>Anda sudah punya akun? <a href="">Login</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer mt-5" style="background-color: #90b9f3; height: 40px">
      <div class="text-center mt-3">© Copyright Satrio_1202190249</div>
    </footer>
  </body>
</html>
