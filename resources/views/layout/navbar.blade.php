@extends('main.main')
@section('content')
<div class="container my-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span>smArt in english</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimony</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary sign-up-button" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('landing-page')
@endsection
