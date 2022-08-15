<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Penkin | Aplikasi Pendataan Kemiskinan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('LandingPage')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('LandingPage')); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo e(asset('LandingPage')); ?>/assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="<?php echo e(asset('LandingPage')); ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo e(asset('LandingPage')); ?>/assets/css/owl.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
                                    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
                                    crossorigin="" />
                                <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
                                    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
                                    crossorigin=""></script>
                                <style>
                                    #map {

                                        width:100%;
                                        height:636px
                                    }
                                </style>
    <!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="<?php echo e(asset('LandingPage')); ?>/assets/images/logo1.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#services">Presentase Kemiskinan</a></li>
                            <li class="scroll-to-section"><a href="#contact">Peta Sebaran</a></li>
                            <li class="scroll-to-section">
                                <div class="border-first-button"><a href="<?php echo e(route('form-login')); ?>">Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>Aplikasi Pendataan Kemiskinan</h6>
                                        <h2>Hasil Survei Kemiskinan</h2>
                                        <p>merupakan aplikasi pendataan kemiskinan sekaligus pengelompokan kategori
                                            kemiskinan yng di visualisasikan melalui website. </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="#contact">contact more <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="<?php echo e(asset('LandingPage')); ?>/assets/images/Proverty.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="<?php echo e(asset('LandingPage')); ?>/assets/images/about-dec.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>About Us</h6>
                                    <h4>Who is Pendataan Kemiskinan <em>Kab.Indramayu </em></h4>
                                    <div class="line-dec"></div>
                                </div>
                                <p>Permasalahan kemiskinan merupakan salah satu persoalan mendasar yang terus dihadapi
                                    sejumlah daerah di Indonesia, tidak terkecuali Kota Pontianak. Beberapa upaya
                                    memutus mata rantai kemiskinan telah dilakukan oleh pemerintah pusat dan daerah,
                                    diantaranya dengan pemberian beras miskin (Raskin), Kartu Keluarga Sejahtera (KKS),
                                    Bantuan Langsung Tunai (BLT), BPJS, bantuan rumah tidak layak huni, Kartu Indonesia
                                    Pintar (KIP), Bantuan Siswa Miskin, BOS dan pemberian akses yang luas terhadap
                                    sumber-sumber pembiayaan usaha mikro, kecil dan menengah (UMKM), akan tetapi jumlah
                                    penduduk miskin tidak mengalami penurunan yang signifikan. Dalam permasalahan ini
                                    yang menjadi akar permasalahan kurang berhasilnya program-program tersebut adalah
                                    Data. Peranan data kemiskinan menjadi sangat penting dalam keberhasilan pelaksanaan
                                    program di atas.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">

                        <h4>Presentase Kemiskinan <em>Kab. Indramayu</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">

                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                       
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="mt-3">
                                                                <div id="piechart_3d"
                                                                    style="width: 1000px; height: 350px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Peta Persebaran Kemiskinan <em>Kab. Indramayu</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="<?php echo e(asset('LandingPage')); ?>/assets/images/contact-dec.png"
                                        alt="">
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div id="map"  frameborder="0" style="border:0"
                                        allowfullscreen>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 BAPEDA KAB. INDRAMAYU Co., Ltd. All Rights Reserved.
                    <div class="logo">

                    </div>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="<?php echo e(asset('LandingPage')); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(asset('LandingPage')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('LandingPage')); ?>/assets/js/owl-carousel.js"></script>
    <script src="<?php echo e(asset('LandingPage')); ?>/assets/js/animation.js"></script>
    <script src="<?php echo e(asset('LandingPage')); ?>/assets/js/imagesloaded.js"></script>
    <script src="<?php echo e(asset('LandingPage')); ?>/assets/js/custom.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable(<?php echo e(Js::from($array)); ?>);

            var options = {
                title: 'Data Kemiskinan',
                is3D: true,
                colors: ['#c90076', '#d5a6bd']
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    <script>
        var map = L.map('map').setView([-6.406576, 108.282833], 13);
        // var map = L.map('map').setView([119.2167217, -0.3375404], 13);
        // var gold = new L.Icon({
        //     iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
        //     shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        //     iconSize: [25, 41],
        //     iconAnchor: [12, 41],
        //     popupAnchor: [1, -34],
        //     shadowSize: [41, 41]
        // });

        var red = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var green = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // <?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        //     var marker = L.marker([<?php echo e($item->longitude); ?>, <?php echo e($item->latitude); ?>]).addTo(map);
        // <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->hasilClustering[0]->cluster == 0): ?>


                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                var marker = L.marker([<?php echo e($item->longitude); ?>, <?php echo e($item->latitude); ?>], {
                        icon: red,
                    }).addTo(
                        map)
                    .bindPopup('<b><?php echo e($item->district->name); ?></b><br/> <b><?php echo e($item->nama); ?></b>.').openPopup();


            <?php elseif($item->hasilClustering[0]->cluster == 1): ?>


                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                var marker = L.marker([<?php echo e($item->longitude); ?>, <?php echo e($item->latitude); ?>], {
                        icon: green
                    }).addTo(
                        map)
                    .bindPopup('<b><?php echo e($item->district->name); ?></b><br/> <b><?php echo e($item->nama); ?></b>.').openPopup();

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

</body>

</html>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/welcome.blade.php ENDPATH**/ ?>