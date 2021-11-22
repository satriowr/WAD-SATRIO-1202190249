<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    
    $query = "SELECT * FROM Buku_table WHERE id_buku = '$id'";
    $detail = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .fill{
            margin: auto;
            margin-top: 100px;
            width: 1000px;
            height: 1370px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .fill-form{
            margin-left: 50px;
        }

        .buttons {
            margin:auto;
            width: 700px;
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
        <div class="fill">
        <br>
        <h2 class='mt-5 text-center'>Detail Buku</h2>
        <?php foreach ($detail as $data){ ?>
              <img class='text-center mt-4' style='margin-left: 150px;' src="assets/<?php echo $data['gambar'] ?>" width="70%" height="600px">
              <hr class="bg-primary my-4 border-2 border-primary">
              <div class="fill-form">
                    <div class="judul">
                        <p class="fw-bold mb-2 p-0">Judul Buku :</p>
                        <p class="p-0 m-0"><?=$data['judul_buku']?></p>
                    </div>
                    <div class="penulis">
                        <p class="fw-bold mb-2 p-0 my-2">Penulis :</p>
                        <p class="p-0 m-0"><?=$data['penulis_buku']?></p>
                    </div>
                    <div class="tahun">
                        <p class="fw-bold mb-2 p-0 my-2">Tahun Terbit :</p>
                        <p class="p-0 m-0"><?=$data['tahun_terbit']?></p>
                    </div>
                    <div class="deskripsi">
                        <p class="fw-bold mb-2 p-0 my-2">Deskripsi :</p>
                        <p class="p-0 m-0"><?=$data['deskripsi']?></p>
                    </div>
                    <div class="bahasa">
                        <p class="fw-bold mb-2 p-0 my-2">Bahasa :</p>
                        <p class="p-0 m-0"><?=$data['bahasa']?></p>
                    </div>
                    <div class="tag">
                        <p class="fw-bold mb-2 p-0 my-2">Tag :</p>
                        <p class="p-0 m-0"><?=$data['tag']?></p>
                    </div>
              </div>
              <br>
              <div class="buttons d-flex justify-content-between gap-3 mt-4">
                <button href="" class="btn btn-primary w-100" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
                <a href="Satrio_Delete.php?id=<?php echo $data['id_buku']?>" class="btn btn-danger w-100">Hapus</a>
              </div>
              <?php } ?> 
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-normal" id="exampleModalLabel">Sunting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="Satrio_Update.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value=<?=$data['id_buku']?>>

                <div class="form-group mt-3">
                    <label for="judulBuku">Judul Buku</label>
                    <input type="text" class="form-control mt-2" name='judulBuku' value="<?= $data['judul_buku']?>" id="judulBuku"
                        placeholder="Contoh: Pemrograman Web Bersama EAD">
                </div>

                <div class="form-group mt-3">
                    <label for="Penulis">Penulis</label>
                    <input type="text" class="form-control mt-2" name='penulis' id="penulis" value='Satrio_1202190249' readonly>
                </div>

                <div class="form-group mt-3">
                    <label for="tahunTerbit">Tahun Terbit</label>
                    <input type="text" class="form-control mt-2" name='tahunTerbit' value="<?= $data['tahun_terbit']?>" id="tahunTerbit" placeholder='Contoh: 1990'>
                </div>

                <div class="form-group mt-3">
                    <label for="desk">Deskripsi</label>
                    <textarea class="form-control mt-2" id="desk" name='desk' placeholder='Contoh: Buku ini menjelaskan tentang ...'
                        rows='4'><?= $data['deskripsi']?></textarea>
                </div>

                <div class="radio mt-3" style='display:flex'>
                    <p style='font-weight:bold'>Bahasa</p>
                    <div class="form-check" style='margin-left:50px'>
                        <input class="form-check-input" type="radio" name="bahasa[]" id="exampleRadios1" value="Bahasa Indonesia">
                        <label class="form-check-label" style='font-weight:normal' for="exampleRadios1">
                            Indonesia
                        </label>
                    </div>

                    <div class="form-check" style='margin-left:20px'>
                        <input class="form-check-input" type="radio" name="bahasa[]" id="exampleRadios2" value="Lainnya">
                        <label class="form-check-label" style='font-weight:normal' for="exampleRadios2">
                            Lainnya
                        </label>
                    </div>
                </div>

              <?php
              $tag = explode(',', $data['tag']);
              ?>
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
              
              <div class="mb-3">
                  <label for="formFile" class="fw-bold mb-2">Gambar</label>
                  <input class="form-control" type="file" name="gambar">
              </div>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="update" class="btn btn-primary">Simpan perubahan</button>
                </div>
            </form>
          </div>
        </div>
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