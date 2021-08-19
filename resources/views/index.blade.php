@extends('layout.navbar')

@section('landing-page')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white header-h1">Smart in English</h1>
                <hr class="divider">
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white mb-5">Quality in Simplicity</p>
                <a class="btn btn-outline-light btn-xl button-header" href="#programs">Daftar Sekarang!</a>
            </div>
        </div>
    </div>
</header>
<section id="about">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="section-title">About</h2>
            <p class="section-desc">Tentang Lembaga Kami</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md">
                <p>smArt in English merupakan sarana belajar kursus dan private menyediakan pelatihan bahasa inggris
                    resmi guna mendukung pembelajaran di sekolah yang disesuaikan dengan kurikulum Departemen
                    Pendidikan Nasional
                    <br><br>
                    Sejak berdiri pada tahun 2008. visi misi dari smArt in English adalah Quality in Simplicity
                    bukan berarti murah tidak berkualitas, melainkan dalam keadaan keserdahanaannya mampu memberikan
                    materi-materi lebih berkualitas guna menghadapi tantangan di masa depan.
                </p>
            </div>
            <div class="col-md">
                <img src="img/smile.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="programs">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="section-title">Programs</h2>
            <p class="section-desc">Program Pembelajaran Pada Lembaga Kami</p>
        </div>
        <div class="row program-title justify-content-between">
            <div class="col-12">
                <h3>Program Kursus Bahasa Inggris</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-8 program-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: SD/Sederajat, SMP/Sederajat, SMA/SMK/Sederajat, Mahasiswa, Umum.</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image">
            </div>
        </div>
        <div class="row program-title-2 justify-content-between text-end">
            <div class="col-12">
                <h3>Program Kursus Matematika</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image-2">
            </div>
            <div class="col-md-8 text-end program-text-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: SD/Sederajat, SMP/Sederajat, SMA/SMK/Sederajat, Mahasiswa, Umum.</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
        </div>
        <div class="row program-title justify-content-between">
            <div class="col-12">
                <h3>Program Calistung</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-8 program-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: TK, SD/Sederajat.</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image">
            </div>
        </div>
        <div class="row program-title-2 justify-content-between text-end">
            <div class="col-12">
                <h3>Program Bimbingan Belajar Persiapan UN</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image-2">
            </div>
            <div class="col-md-8 text-end program-text-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: Kelas 6 SD, Kelas 9 SMP, Kelas 12 SMA/SMK</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
        </div>
        <div class="row program-title justify-content-between">
            <div class="col-12">
                <h3>Program Kursus Komputer</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-8 program-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: Umum.</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image">
            </div>
        </div>
        <div class="row program-title-2 justify-content-between text-end">
            <div class="col-12">
                <h3>Program TPA</h3>
            </div>
        </div>
        <div class="row program-desc align-items-start justify-content-between">
            <div class="col-md-3">
                <img src="img/fest2017.jpg" alt="" class="img-fluid program-image-2">
            </div>
            <div class="col-md-8 text-end program-text-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam officiis ullam
                    tempora adipisci veniam. Sequi odio ut fuga iusto provident, aperiam maiores voluptatibus est
                    laboriosam nihil ab placeat! Commodi illo culpa accusamus nam totam. <br><br><b>Program ini
                        tersedia untuk: TK, SD/Sederajat.</b></p>
                <a href="" class="btn btn-outline-light button-daftar">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0651C0" fill-opacity="1" d="M0,288L48,282.7C96,277,192,267,288,229.3C384,192,480,128,576,117.3C672,107,768,149,864,181.3C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<section id="gallery">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="section-title">Gallery</h2>
            <p class="section-desc">Lorem ipsum dolor sit.</p>
        </div>
        <!-- Gallery -->
        <div class="row gallery px-2 py-3">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="https://smartinenglish.files.wordpress.com/2009/10/b-2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="https://smartinenglish.files.wordpress.com/2009/10/lucky.jpg?w=1400&h=" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">

                <img src="https://smartinenglish.files.wordpress.com/2009/10/ryan-s-putra.jpg?w=1400&h=" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                <img src="https://smartinenglish.files.wordpress.com/2009/10/miftah1.jpg?w=1400&h=" class="w-100 shadow-1-strong rounded mb-4" alt="" />

            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="https://smartinenglish.files.wordpress.com/2009/10/b-1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="https://smartinenglish.files.wordpress.com/2009/10/4.jpg?w=1400&h=" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                <div class="text-end">
                    <a href="" class="btn btn-outline-dark text-center button-gallery">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <!-- Gallery -->
    </div>
</section>
<section id="testimonial">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="section-title">Testimonial</h2>
            <p class="section-desc">Apa Yang Mereka Katakan Tentang Lembaga Kami</p>
        </div>
        <div class="row testimonial-carousel">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="https://v6k8u5d3.stackpathcdn.com/wp-content/uploads/2018/12/luke-square-profile.png" alt="">
                                        <div class="card-body">
                                            <h5>Irman Nugraha <br />
                                                <span> Kelas VII SMPN 8 Cimahi </span>
                                            </h5>
                                            <p class="card-text">“ Menyenangkan sekali bisa bergabung dengan smart in English. Cara pengajaran yang santai bikin saya tidak merasa tegang, saya punya wawasan baru yang tidak saya dapatkan di sekolah. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="https://i.insider.com/5419ce1369beddc52347c0cf?width=1000&format=jpeg&auto=webp" alt="">
                                        <div class="card-body">
                                            <h5>Reza Renaldy <br />
                                                <span> Kelas VII SMPN 8 Cimahi </span>
                                            </h5>
                                            <p class="card-text">“ Sejak bergabung di smArt in English nilai Bahasa Inggris di sekolah meningkat, saya dapat belajar dengan baik dan nyaman, membuat saya lebih semangat belajar Bahasa Inggris. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                                        <div class="card-body">
                                            <h5>Fadhillah Rahmawati <br />
                                                <span> Kelas VII SMPN 9 Cimahi </span>
                                            </h5>
                                            <p class="card-text">“ Sejak les Bahasa Inggris di smart in English, saya jadi lebih bisa mengerjakan soal-soal Bahasa Inggris di sekolah. Saya mengalami banyak kemajuan, Cara menyampaikan materi sangat baik.” </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                                        <div class="card-body">
                                            <h5>Reti Dwi Utami <br />
                                                <span> Kelas VIII SMPN 1 Cimahi </span>
                                            </h5>
                                            <p class="card-text">“ Selama belajar Bahasa Inggris di smart in English, saya mendapat banyak kemajuan. Cara menerangkannya baik dan mudah di mengerti dengan materi yang sama di sekolah. Saya pun dapat mengikuti pelajaran Bahasa Inggris di sekolah dengan baik, apalagi di sekolah kami sebagian besar pelajaran yang di sampaikan menggunakan Bahasa Inggris. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                                        <div class="card-body">
                                            <h5>Dicka Rizki Fitria <br />
                                                <span> Kelas VIII SMPN 9 Cimahi </span>
                                            </h5>
                                            <p class="card-text">“ Semenjak les Bahasa Inggris di smart in English, nilai Bahasa Inggris saya di sekolah jadi lumayan bagus dan saya pun jadi senang belajar Bahasa Inggris, baik di sekolah ataupun di tempat les. Saya tidak bingung lagi dalam pelajaran Bahasa Inggris. Sekarang Bahasa Inggris saya mulai lancar baik dalam tulisan ataupun pengucapannya. ” </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="owl-carousel owl-carousel1 owl-theme">

                </div> -->
        </div>
    </div>
</section>
<section id="contact">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-desc">Lorem ipsum dolor sit.</p>
        </div>
        <div class="row form-contact">
            <div class="col-lg-12 text-center">
                <form id="contactForm" name="sentMessage">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea cols="30" rows="5" class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-outline-light btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <footer class="py-1 my-4">
        <div class="row d-flex flex-wrap justify-content-center align-items-center row-1">
            <div class="col-md-4">
                <img src="img/logo.png" alt="" class="logo-footer py-3 img-fluid">
            </div>
            <ul class="nav col-md-8 justify-content-end list-unstyled d-flex flex-column">
                <li class="ms-3"><a class="disabled" href="#"><i class="fas fa-location"></i> Jalan Kerkof Gang Dwikarya no. 56 RT.02/05 Leuwigajah, Cimahi Selatan, Jawa Barat.</a></li>
                <li class="ms-3"><a class="" href="#"><i class="fas fa-envelope"></i> smartinenglish56@gmail.com</a></li>
                <li class="ms-3"><a class="" href="#"><i class="fas fa-phone"></i> 089523732199</a></li>
            </ul>
        </div>
        <div class="container mx-auto d-flex flex-wrap justify-content-between align-items-center border-top pt-1">
            <div class="col-md-4 d-flex align-items-center">
                <span class="footer-text">&copy; smArt in english</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="footer-icons" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="ms-3"><a class="footer-icons" href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </div>
    </footer>
</div>
@endsection
