<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccine</title>
</head>
<body>
    @extends('Component.navbar')

    <div class="container">
        
        <div class="main-content" style="margin-top:100px">
        
            @if ($dataVaksin->count() > 0)
        
                <div class="ada-data">
                    <h2 class="text-center">List Vaccine</h2>
                    <br><br>
                    <a href="/vaccine/input">
                        <button type="button" class="btn btn-primary">Add Vaccine</button>
                    </a>
                    <table class="table table-primary table-sm table-responsive table-hover" style="margin-top:20px; border-style:solid; border-color:black; border-width:1px">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataVaksin as $vaksin)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $vaksin->name }}</td>
                                <td>{{ $vaksin->price }}</td>
                                <td>
                                    <a class="btn btn-warning mt-2" href="/vaccine/edit/{{ $vaksin->id }}">Edit</a>
                                    <a class="btn btn-danger mt-2" href="/vaccine/delete/{{ $vaksin->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-data" style="margin-top:100px">
                    <p class="text-center">There is no data...</p> <br>

                    <div class="button-vaccine d-flex justify-content-center ">
                        <br>
                        <a href="/vaccine/input">
                            <button type="button" class="btn btn-primary">Add Vaccine</button>
                        </a>
                    </div>
                </div> 
            @endif
        </div>
        

    </div>
    @extends('Component.footer')
</body>
</html>