<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient</title>
</head>
<body>
    @extends('Component.navbar')

    <div class="container">
        
        <div class="main-content" style="margin-top:100px">
            @if ($dataPasien->count() > 0)
                <div class="ada-data">
                    <h2 class="text-center">List Patient</h2>
                    <br><br>
                    <a href="/patient/register">
                        <button type="button" class="btn btn-primary">Register Patient</button>
                    </a>
                    <table class="table table-primary table-sm table-responsive table-hover" style="margin-top:20px; border-style:solid; border-color:black; border-width:1px">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Vaccine</th>
                            <th scope="col">Name</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPasien as $pasien)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pasien->vaccine->name }}</td>
                                <td>{{ $pasien->name }}</td>
                                <td>{{ $pasien->nik }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->no_hp }}</td>
                                <td>
                                    <a class="btn btn-warning mt-2" href="/patient/edit/{{ $pasien->id }}">Edit</a>
                                    <a class="btn btn-danger mt-2" href="/patient/delete/{{ $pasien->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                
                </div>
            @else
                <div class="no-data" style="margin-top:100px">
                    <p class="text-center text-muted">There is no data...</p> <br>
                    <div class="button-vaccine d-flex justify-content-center ">
                        <br>
                        <a href="/patient/register">
                            <button type="button" class="btn btn-primary">Register Patient</button>
                        </a>
                    </div>
                </div> 
            @endif
        </div>
       

    </div>
    @extends('Component.footer')
</body>
</html>