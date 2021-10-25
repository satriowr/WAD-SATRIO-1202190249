<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myBooking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
    error_reporting(E_ERROR | E_PARSE);

    $name= $_POST["name"];
    $date= $_POST["date"];
    $time=$_POST["time"];
    $type=$_POST["type"];
    $duration=$_POST["duration"];
    $phone=$_POST["phone"];
    $catering=$_POST["catering"];
    $decoration=$_POST["decoration"];
    $sound=$_POST["sound"];

    $nusantara_Harga = 2000; 
    $garudaHarga = 1000 ;
    $gsgHarga = 500 ;

    $date = date('d-m-y');
    $checkout = date('d-m-y'); 

    ?>
    <p class='fs-4 text-center mt-3'>Thank you satrio_1202190249 for Reserving</p>
    <p class='fs-5 text-center'>Please double check your reservation details</p>
    <div class="container" style="margin-top: 20px;">

        <div class="row">
            <div class="col-sm-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check-in</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Building Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th><?php echo rand();?></th>
                            <td><?php echo $name;?></td>
                            <td><?php echo $date;?></td>
                            <td><?php echo $checkout;?></td>
                            <td><?php

                                if ($type == 'nusantara') {
                                    Echo " Nusantara Hall" ;
                                }
                                
                                if($type == 'garuda' ) {

                                    Echo "Garuda Hall " ;

                                }

                                if($type == 'gsg' ) {

                                    Echo "Gedung Serba Guna" ;

                                }
                                
                                ?></td>

                            <td><?php echo $phone;?></td>
                            <td><?php 
                        
                                if ($catering == 'catering') {
                                    echo " <ul><li> Catering </li> </ul> " ;
                                    $nusantaraHarga += 700 ;
                                    $garudaHarga += 700 ;
                                    $gsgHarga += 700 ;

                                }

                                if ($decoration == 'decoration') {
                                    echo " <ul><li> Decoration </li> </ul> " ;
                                    $nusantaraHarga += 450 ;
                                    $garudaHarga += 450 ;
                                    $gsgHarga += 450 ;

                                }

                                if ($sound == 'sound') {
                                    echo " <ul><li> Sound System </li> </ul> " ;
                                    $nusantaraHarga += 250 ;
                                    $garudaHarga += 250 ;
                                    $gsgHarga += 250 ;

                                }
                        
                                elseif (empty($catering) && (empty($decoration) && (empty($sound) ))) {
                                    echo "-" ;
                                }
                                ?></td>

                            <td><?php 
                    
                                if ($type == 'nusantara') {
                                     Echo "$ $nusantaraHarga " ;
                                    }                        
                        
                                if($type == 'garuda' ) {
                                    Echo "$ $garudaHarga " ;
                                    }

                                 if($type == 'gsg' ) {
                                     Echo "$ $gsgHarga " ;
                                     }
                        ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
</body>

</html>