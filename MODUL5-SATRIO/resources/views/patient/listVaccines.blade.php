<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    @extends('Component.navbar')

    <div class="container">
        <div class="main-content" style="margin-top:100px">
            <h2 class="text-center">List Vaccine</h2>
            
            <div class="content d-flex flex-row">
                @foreach ($dataVaksin as $vaksin)
                <div class="card" style="width: 20rem; height:26rem; margin-left:20px; margin-top:30px">
                    <img class="card-img-top" src="{{ asset('storage/' . $vaksin->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vaksin->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $vaksin->price }}</h6>
                        <p class="card-text">{{ $vaksin->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/patient/vaccine/{{ $vaksin->id }}" style="width: 18rem" class="btn btn-primary">Vaccine Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        
        </div>
        
    </div>
    @extends('Component.footer')
</body>
</html>