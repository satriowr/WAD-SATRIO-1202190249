<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    @extends('Component.navbar')
    <div class="container">
        
        <div class="form-input" style="margin-top:100px">
            @foreach ($dataVaksin as $vaksin)
            <form action="/vaccine/edit/{{ $vaksin->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center">Edit Vaccine</h2>
                <div class="mt-5 mb-3">
                    <label for="nama" class="form-label">Vaccine Name</label>
                    <input type="text" value="{{ $vaksin->name }}" name="name" class="form-control" id="nama">
                </div>

                <label for="basic-url" class="form-label">Price</label>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Rp</span>
                <input type="text" value="{{ $vaksin->price }}" name="price" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="Description" rows="3">{{ $vaksin->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile">Image</label>
                    <br>
                    <input name="image" type="file" id="formFile">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
             @endforeach
            
        </div>
    </div>
    @extends('Component.footer')
</body>
</html>