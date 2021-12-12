<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    @extends('Component.navbar')

    <div class="container">
        <div class="main-content">
            <h2 class="text-center" style="margin-top:100px">About Us</h2>
        </div>
        
        <div class="main mt-5 d-flex flex-row">
            <img width="500px" src="asset\undraw_medical_care_movn.png" alt="">
            <p class="text-justify" style="margin-top:100px">Vaksin dibuat untuk mencegah penyakit. Vaksin COVID-19 adalah harapan terbaik untuk menekan penularan virus corona. Mendapatkan vaksin COVID-19 maka bisa melindungi tubuh dengan menciptakan respons antibodi di tubuh tanpa harus sakit karena virus corona. Vaksin COVID-19 mampu mencegah seseorang terkena virus corona. Atau, apabila kamu tertular COVID-19, vaksin dapat mencegah tubuh dari sakit parah atau potensi hadirnya komplikasi serius. Dengan mendapatkan vaksin, kamu juga akan membantu melindungi orang-orang di sekitar dari virus corona. Terutama orang-orang yang berisiko tinggi terkena penyakit parah akibat COVID-19.</p>
        </div>
        
    </div>
    @extends('Component.footer')
</body>
</html>