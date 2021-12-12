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
        <div class="form-input" style="margin-top:100px">
            @foreach ($dataPasien as $pasien)
            <form action="/patient/edit/{{ $pasien->id }}" method="post" enctype="multipart/form-data">
                @csrf

                    <h2 class="text-center">Edit {{ $pasien->vaccine->name }} Patient</h2>
            
                <div class="mt-5 mb-3">
                    <label for="id" class="form-label">Vaccine ID</label>
                    <input type="text" value="{{ $pasien->vaccine_id }}" name="vaccine_id" class="form-control" id="id" readonly>
                </div>

                <div class=" mb-3">
                    <label for="id" class="form-label">Patient Name</label>
                    <input type="text" value="{{ $pasien->name }}" name="name" class="form-control" id="id" >
                </div>

                <div class=" mb-3">
                    <label for="id" class="form-label">NIK</label>
                    <input type="number" value="{{ $pasien->nik }}" name="nik" class="form-control" id="id" >
                </div>
                
                <div class="mb-3">
                    <label for="id" class="form-label">alamat</label>
                    <input type="text" value="{{ $pasien->alamat }}" name="alamat" class="form-control" id="id" >
                </div>

                <div class="mb-3">
                    <label for="formFile">KTP</label>
                    <br>
                    <input name="image_ktp" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="id" class="form-label">No Hp</label>
                    <input type="number" value="{{ $pasien->no_hp }}" name="no_hp" class="form-control" id="id" >
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            @endforeach
            <br>
            <br>
            <br>
        </div>
    </div>
    @extends('Component.footer')
</body>
</html>