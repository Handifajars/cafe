<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Maps</title>
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
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/css/animate.css">
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
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Maps</h3>
                        <p><a href="index.html">Home</a> / Maps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">

                <head>
                    <title>Maps Cafe</title>
                    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
                    <script type="text/javascript">
                        function init() {
                            var info_window = new google.maps.InfoWindow();

                            // menentukan level zoom
                            var zoom = 12;

                            // menentikan latitude dan longitude
                            var pos = new google.maps.LatLng(-7.244103300143218, 112.75935786910324);

                            // menentukan opsi peta
                            var options = {
                                'center': pos,
                                'zoom': zoom,
                                'mapTypeId': google.maps.MapTypeId.ROADMAP
                            };

                            // membuat peta
                            var map = new google.maps.Map(document.getElementById('maps'), options);
                            info_window = new google.maps.InfoWindow({
                                'content': 'loading...'
                            });

                            // membuat marker
                            <?php foreach ($maps as $map) { ?>
                                var marker = new google.maps.Marker({
                                    title: '<?php echo $map['nama_resto'] ?>',
                                    alamat: '<?php echo $map['alamat_resto'] ?>',
                                    position: new google.maps.LatLng(<?php echo $map['lat'] ?>, <?php echo $map['lng'] ?>),
                                    animation: google.maps.Animation.BOUNCE,
                                    map: map
                                });


                                // set marker di peta
                                marker.setMap(map);

                                // membuat event ketika marker di click
                                google.maps.event.addListener(marker, 'click', function() {
                                    info_window.setContent('<b>' + this.title + '<br>' + this.alamat + '</b>');
                                    info_window.open(map, this);
                                });
                            <?php  } ?>
                        }
                        google.maps.event.addDomListener(window, 'load', init);
                    </script>
                </head>

                <body>
                    <div id="maps" style="height: 480px; position: relative; overflow: hidden;"> </div>
                </body>
            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title"> <a data-toggle="modal" data-target="#reservasi" href="#">
                            Reservation
                        </a></h2>

                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>indonesia, jawatimur</h3>
                            <p>Gununganyar, Kota Surabaya</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+62 812 3001 6481</h3>
                            <p>Setiap Hari 08.00-21.00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>Zondaan@gmail.com</h3>
                            <p>Jika ada kesalahan kirim ke alamat email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <input type="text" placeholder="search">
                    <button type="submit">search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal reservasi -->
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
                                        <option value='<?php echo $data['alamat_resto'] ?>'><?php echo $data['alamat_resto'] ?></option>
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
    <script src="<?php echo base_url() ?>template/js/nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>template/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?php echo base_url() ?>template/js/contact.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.form.js"></script>
    <script src="<?php echo base_url() ?>template/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>template/js/mail-script.js"></script>

    <script src="<?php echo base_url() ?>template/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>
</body>

</html>