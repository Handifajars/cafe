<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/asset/css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/prompt.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Cafe & Resto</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php echo base_url(); ?>login/logout">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        &nbsp
                        <li class="nav-item" color="red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="red" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Data Maps
                        </li>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Tambah Alamat Resto</span>
                            <a class="d-flex align-items-center text-muted" href="<?php echo base_url() ?>admin/tambah_alamat" aria-label="Add a new report">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </a>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/index">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/restoran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Restoran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/delivery">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                Delivery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/reservasi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                Reservasi
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/maps">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Map
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>admin/user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Pelanggan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <br><br>
                &nbsp
                <div class="table-responsive">

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
            </main>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>asset/js/jquery-3.js"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>asset/js/feather.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/Chart.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/dashboard.js"></script>

    <div class="igtranslator-main-div" style="display: none; width: 0px; height: 0px;"><iframe src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/blank.html" class="igtranslator-iframe" scrolling="no" frameborder="0"></iframe></div>
    <div class="igtranslator-activator-icon bounceIn" style="background-image: url(&quot;moz-extension://fcf848cd-7bc9-4506-a735-69839a2c1ac4/data/icons/home.png&quot;); display: none;" title="Click to Show Translation"></div>
</body>
<style type="text/css" id="igtranslator-color"></style>

</html>




<!-- <!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
</head>
<body>
  <center><h1>Dashboard Admin</h1></center>
  <center><?php echo anchor('admin/tambah', 'Tambah Data'); ?></center>
  <table style="margin:20px auto;" border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Harga (Rp)</th>
      <th>Gambar</th>
      <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($resto as $r) {
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $r->nama_resto ?></td>
      <td><?php echo $r->alamat ?></td>
      <td><?php echo $r->gambar_resto ?></td>
      <td>
            <?php echo anchor('admin/edit/' . $r->id_resto, 'Edit'); ?>
                              <?php echo anchor('admin/hapus/' . $u->id_resto, 'Hapus'); ?>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html> -->