
<?php
$judul = $_POST['judulBuku'];
            $penulis = $_POST['penulis'];
            $tahun = $_POST['tahunTerbit'];
            $desk = $_POST['desk'];
            $gambar =$_POST['foto'];
            $bahasa = implode(",", $_POST['bahasa']);
            $tag = implode(",", $_POST['tag']);

            $random = rand();
            $ekstensi =  array('png','jpg','jpeg','gif');
            $filename = $_FILES['foto']['name'];
            $ukuran = $_FILES['foto']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
            if(!in_array($ext,$ekstensi) ) {
                header("location:Satrio_Home.php?alert=gagal_ekstensi");
            }else{
                if($ukuran < 1044070){		
                    $xx = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
                    $query=mysql_query("INSERT INTO Buku_Table(judul_buku, penulis, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES('$judulBuku','$penulis, $tahunTerbit, $desk, $gambar, $bahasa, $tag')");
                    header("location:Satrio_Home.php?alert=berhasil");
                }else{
                    header("location:Satrio_Home.php?alert=gagal_ukuran");
                }
            }

?>