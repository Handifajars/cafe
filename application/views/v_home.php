<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>constructo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>template/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/slicknav.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Hai, <?php echo $this->session->userdata("nama"); ?></p>
                                <p>Buka Mulai (08.00-21.00)</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex justify-content-end">
                                <a href="<?php echo base_url() ?>login/logout" class="boxed-btn3">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="address_bar d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="address_menu d-flex justify-content-end">
                                <div class="single_address  d-flex">
                                    <div class="icon">
                                        <img src="img/icon/header-address.svg" alt="">
                                    </div>
                                    <div class="address_info">
                                        <h3>Dapat Di Kunjungi DI</h3>
                                        <p>Gununganyar, Kota Surabaya, Jawa Timur</p>
                                    </div>
                                </div>
                                <div class="single_address d-flex">
                                    <div class="icon">
                                        <img src="<?php echo base_url() ?>template/img/icon/headset.svg" alt="">
                                    </div>
                                    <div class="address_info">
                                        <h3>Kontak</h3>
                                        <p>+62 812 3001 6481</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="white_bg_bar">
                        <div class="row align-items-center">
                            <div class="col-12 d-lg-none">
                                <div class="logo ">
                                    <a href="#">
                                        <img src="<?php echo base_url() ?>template/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?php echo base_url() ?>cafe">Beranda</a></li>
                                            <li><a href="<?php echo base_url() ?>cafe/map">Maps</a></li>
                                            <li><a href="<?php echo base_url() ?>cafe/resto">Restoran</a></li>
                                            <li><a href="<?php echo base_url() ?>cafe/delivery">delivery</a></li>
                                            <li><a data-toggle="modal" data-target="#reservasi" href="#">Reservation</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="Appointment d-flex justify-content-end">
                                    <div class="search_icon">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Sisi RestoAndCafe</h3>
                                <p></p>
                                <a href="#" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Sisi RestoAndCafe</h3>
                                <p></p>
                                <a href="#" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Sisi RestoAndCafe</h3>
                                <p></p>
                                <a href="#" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- features_area_start -->
    <div class="features_area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Daftar makanan</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-helmet"></i>
                        </div>
                        <h3>Deskripsi RestoAndCafe</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Cara pesan</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end -->

    <!-- about_area_start  -->
    <!-- <div class="about_area">
        <div class="container">
            <div class="border_1px">
                <div class="row align-items-center">
                    <div class="col-xl-6  col-md-6">
                        <div class="about_thumb">
                            <img src="<?php echo base_url() ?>template/img/about/about.png" alt="">
                            <div class="pattern_img d-none d-lg-block">
                                <img src="<?php echo base_url() ?>template/img/pattern/pattern.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_info">
                            <h3>We Serve all of your <br>
                                Construction Services</h3>
                            <p class="first_para"> “Construction is a full service construction company offering
                                building solutions from start to finish. Our staff has been operating on NYC for ten
                                years.</p>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                            <a href="about.html" class="boxed-btn3">About Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- about_area_end  -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Makanan Terlaris</h3>
                    </div>
                </div>
            </div>
            <div class="border_bottom_1px position-relative">
                <div class="pattern_img d-none d-xl-block">
                    <img src="<?php echo base_url() ?>template/img/pattern/pattern.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="<?php echo base_url() ?>template/img/service/1.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Rawon</h3>
                                    </a>
                                    <p>Rawon adalah masakan Indonesia berupa sup daging berkuah hitam sebagai campuran bumbu khas yang menggunakan kluwek.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="<?php echo base_url() ?>template/img/service/2.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Bakso</h3>
                                    </a>
                                    <p>Bakso adalah produk olahan daging giling yang dicampur dengan tepung dan bumbu-bumbu serta bahan lain yang dihaluskan, kemudian dibentuk bulatan.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="<?php echo base_url() ?>template/img/service/3.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>sate</h3>
                                    </a>
                                    <p>Sate Ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap. Sate ini biasanya disajikan bersama dengan lontong atau nasi.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="<?php echo base_url() ?>template/img/service/4.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>soto</h3>
                                    </a>
                                    <p>Soto, sroto, sauto, tauto, atau coto adalah makanan khas Indonesia seperti sop yang terbuat dari kaldu daging dan sayuran. Daging yang paling sering digunakan adalah daging sapi dan ayam, tetapi ada pula yang menggunakan daging babi atau kambing.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service_area_end  -->

    <!-- gallery_area-START -->
    <div class="gallery_area">
        <div class="container">
            <div class="gallery_nav">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <h3 class="gallery_title">Makanan dan Minuman<br>
                            awesome projects</h3>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Makanan</button>
                            <button data-filter=".cat2">Minuman</button>
                            <button data-filter=".cat3">Desert</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row grid no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/1.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/2.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/3.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/4.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/5.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/6.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat4 cat1">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/7.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>template/img/gallery/8.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area-END -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Testimonials</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo base_url() ?>template/img/testimonial/2.png" alt="">
                                    </div>
                                    <h4>Handi Fajar Setyawan</h4>
                                    <span>Hobby makan dan main game dan ngoding</span>
                                </div>
                                <p>“Web ini ispirasi untuk menemukan makanan lezat”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="<?php echo base_url() ?>template/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/ajax-form.js"></script>
    <script src="<?php echo base_url() ?>template/js/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/scrollIt.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/gijgo.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/plugins.js"></script>



    <!--contact js-->
    <script src="<?php echo base_url() ?>template/js/contact.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.form.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/mail-script.js"></script>


    <script src="<?php echo base_url() ?>template/js/main.js"></script>



    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <input type="text" placeholder="search">
                    <button type="submit">search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reservasi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Buat Pesanan Reservasi</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" action="<?php echo base_url(); ?>cafe/reservasi" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3"><?php echo $this->session->userdata("nama"); ?></label>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Pilih Restoran</label>
                            <div class="col-xs-8">
                                <select name="tempat" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <?php foreach ($maps as $data) : ?>
                                        <option value='<?php echo $data['alamat_resto'] ?>'><?php echo $data['nama_resto'] ?> - <?php echo $data['alamat_resto'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Masukkan tanggal</label>
                            <div class="col-xs-8">
                                <input name="waktu" class="form-control" type="date" placeholder="tanggal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jumlah orang</label>
                            <div class="col-xs-8">
                                <select name="jumlah" class="form-control" required>
                                    <option value="" aria-readonly="false">Silakan pilih jumlah orang</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>
</body>

</html>