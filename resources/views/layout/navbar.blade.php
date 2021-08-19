@extends('main.main')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top"><img src="img/logo.png" alt="" width="80"></a>
        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="navbar-collapse collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="pages/about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/announcement.html">Announcement</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/gallery.html">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <ul class="navbar-nav ms-auto my-2 my-lg-0 socmed-icon">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i>
                        <p class="link-text"> Our Facebook</p>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-envelope"></i>
                        <p class="link-text"> Our E-mail</p>
                    </a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('landing-page')
@endsection
