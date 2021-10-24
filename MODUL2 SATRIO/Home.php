<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <style>
    .list-group-item {
        color: #228B22;
        font-weight: bold;
    }

    .container-box {
        margin: auto;
        margin-top: 20px;
        width: 75%;
        height: 36px;
        padding-top: 4px;
        background-color: #292b2c;
    }

    .row {
        display: flex;
    }

    .container-box p {
        color: white;
    }
    </style>
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

    <h4 class='text-center mt-4'>WELCOME TO ESD VENUE RESERVATION</h4>

    <div class="container container-box text-center">
        <p>Find your best deal for your event, here!</p>
    </div>

    <div class="container justify-content-center mt-4" style='display:flex;'>
        <div class="item-card">
            <div class="card" style="width: 23rem; margin-right:10px;">
                <img class="card-img-top" src="nusantara.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nusantara Hall</h5>
                    <p class="card-text">
                        $2000 / Hour
                        <br>
                        5000 Capacity
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Free Parking</li>
                    <li class="list-group-item">Full AC</li>
                    <li class="list-group-item">Cleaning Service</li>
                    <li class="list-group-item">Covid-19 Health Protocol</li>
                </ul>
                <form action="Booking.php" method="get">
                    <div class="card-body text-center">
                        <button type="submit" value="nusantara" name="booking" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="item-card">
            <div class="card" style="width: 23rem; margin-right:10px;">
                <img class=" card-img-top" src="garuda.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Garuda Hall</h5>
                    <p class="card-text">
                        $1000 / Hour
                        <br>
                        2000 Capacity
                    </p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Free Parking</li>
                    <li class="list-group-item">Full AC</li>
                    <li class="list-group-item" style="color:red;">No Cleaning Service</li>
                    <li class="list-group-item">Covid-19 Health Protocol</li>
                </ul>
                <form action="Booking.php" method="get">
                    <div class="card-body text-center">
                        <button type="submit" value="garuda" name="booking" class="btn btn-primary">Book Now</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="item-card">
            <div class="card" style="width: 23rem;">
                <img class=" card-img-top" src="gsg.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Gedung Serba Guna</h5>
                    <p class="card-text">
                        $500 / Hour
                        <br>
                        500 Capacity
                    </p>
                </div>
                <ul class="list-group list-group-flush" style='color:green'>
                    <li class="list-group-item" style="color:red;">No Free Parking</li>
                    <li class="list-group-item" style="color:red;">No Full AC</li>
                    <li class="list-group-item" style="color:red;">No Cleaning Service</li>
                    <li class="list-group-item">Covid-19 Health Protocol</li>
                </ul>
                <form action="Booking.php" method="get">
                    <div class="card-body text-center">
                        <button type="submit" value="gsg" name="booking" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: #f8f9fa">
            Created by: satrio_1202190249
        </div>
    </footer>

</body>

</html>