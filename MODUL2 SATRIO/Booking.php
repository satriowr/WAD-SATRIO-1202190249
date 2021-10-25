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

    <style>

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

    <?php
        $booking = $_GET['booking'];
        if (empty($booking)) 
        {
            $booking += 1;
        }
    ?>

    <div class="container" style="margin-top: 20px;">
        <div class="row-12 d-flex">
            <div class="img col mt-5">
                <?php
                    echo "<img src=' $booking.jpg' "; 
                ?>
            </div>
        </div>

        <div class="col-6">
            <form action="myBooking.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="input" class="form-control" name='name' id="name">
                </div>

                <div class="form-group mt-3">
                    <label for="date">Event Date</label>
                    <input type="date" class="form-control" id="date" name='date' placeholder='mm/dd/yyyy'>
                </div>

                <div class="form-group mt-3">
                    <label for="time">Start Time</label>
                    <input type="time" class="form-control" id="time" name='time'>
                </div>

                <div class="form-group mt-3">
                    <label for="duration">Duration</label>
                    <input type="number" class="form-control" id="duration" name='duration'>
                </div>

                <div class="form-group mt-3">
                    <label for="type">Building Type</label>
                    <select class="form-select" name='type'>
                        <option <?php if($booking == 'nusantara'){echo("selected");}?> value="nusantara"
                            name='nusantara'>Nusantara Hall</option>
                        <option <?php if($booking == 'garuda'){echo("selected");}?> value="garuda" name='garuda'>Garuda
                            Hall
                        </option>
                        <option <?php if($booking == 'gsg'){echo("selected");}?> value="gsg" name='gsg'>Gedung Serba
                            Guna
                        </option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" name='phone' id="phone">
                </div>

                <label class="my-1 mr-2 mt-5" for="label">Add Service(s)</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="catering" id="flexCheckDefault"
                        name='catering'>
                    <label class="form-check-label" for="flexCheckDefault">
                        Catering / $700
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="decoration" id="flexCheckChecked"
                        name='decoration'>
                    <label class="form-check-label" for="flexCheckChecked">
                        Decoration / $450
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="sound" id="flexCheckChecked" name='sound'>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sound System / $250
                    </label>
                </div>

                <button type="submit" style='width:700px' class="btn btn-primary mt-3" value="submit"
                    name="booking">Booking</button>
            </form>

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