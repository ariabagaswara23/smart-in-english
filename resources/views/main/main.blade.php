<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="img/logo.png" type="image/png">

    <title>smArt in english | Quality in Simplicity</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            let navbar = document.querySelector('.navbar');

            navbar.classList.toggle('scrolling-active', window.scrollY > 0);
        });

        window.addEventListener('load', function() {
            let navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.toggle('scrolling-active');
            }
        });
    </script>
</body>

</html>
