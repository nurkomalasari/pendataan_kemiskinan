<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('page', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <body>
        <h6>Hasil Silhoutte</h6>
        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_satu">
                <div class="card" style="background-color: #c90076 ">
                    <div class="card-body p-3">
                        <div class="row card-purple">
                            <div class="col-8">
                                <div class="numbers">
                                    <h6 class="text-sm mb-0 text-capitalize font-weight-bold" style="color:white">Cluster 1
                                    </h6>
                                    <h5 class="font-weight-bolder mb-0" style="color:white">
                                        Miskin

                                        <span
                                            class="text-light text-sm font-weight-bolder font-white"><?php echo e($data[2]); ?></span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">

                                <i class="far fa-chart-scatter"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_dua">
                <div class="card" style="background-color: #c27ba0">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color:white">Cluster 2
                                    </p>
                                    <h5 class="font-weight-bolder mb-0" style="color:white">
                                        Menengah
                                        <span class="text-light text-sm font-weight-bolder"><?php echo e($data[3]); ?></span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_tiga">
                <div class="card" style="background-color: #d5a6bd">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color:white">Cluster 3
                                    </p>
                                    <h5 class="font-weight-bolder mb-0" style="color:white">
                                        Tidak Miskin
                                        <span class="text-light text-sm font-weight-bolder"><?php echo e($data[4]); ?></span>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row mt-3">
            <h6>Jumlah Data</h6>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
                <div class="card" style="background-color: rgb(216, 116, 255)">
                    <div class="card-body p-3">
                        <div class="row card-purple">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mb-0">
                                        Total Penduduk
                                    </h5>
                                    <h4 style="color: #344767; font-weight: bold"><?php echo e($total_penduduk); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
                <div class="card" style="background-color: rgb(228, 160, 255)">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mb-0">Hasil Survey Penduduk
                                        <h4 style="color: #344767; font-weight: bold"><?php echo e($total_hasil); ?></h4>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
                <div class="card" style="background-color: rgb(238, 205, 252)">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mb-0">
                                        Pertanyaan Survey
                                        <h4 style="color: #344767; font-weight: bold"><?php echo e($total_Pertanyaan); ?></h4>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        


        <div class="row mt-3">
            <div class="col-6">
                <h4>Chart Ketegori Kemiskinan</h4>
                <div id="piechart_3d" style="width: 500px; height: 350px;"></div>
            </div>

            <?php $__env->startPush('maps'); ?>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
                    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
                    crossorigin="" />
                <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
                    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
                    crossorigin=""></script>
                <style>
                    #map {
                        width: 500px;
                        height: 350px
                    }
                </style>
            <?php $__env->stopPush(); ?>
            <div class="col-6">
                <h4>Peta Persebaran Kemiskinan</h4>
                <div id="map">

                </div>
            </div>
        </div>


        <div class="mt-3">
            <div class="col-5">
                <select class="form-select" id="district_id" name="district_id" required>
                    <option value="">Pilih Kecamatan</option>

                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select><br>
            </div>
        </div>

        <div class="table_id mt-3">

        </div>

        <div class="table_kecamatan mt-3">

        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-4">



                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-2" id="page"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

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
                            colors: ['#c90076', '#c27ba0', '#d5a6bd']
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                    }
                </script>


                <script>

                    var map = L.map('map').setView([-6.406576, 108.282833], 13);
                    // var map = L.map('map').setView([119.2167217, -0.3375404], 13);
                    var gold = new L.Icon({
                        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
                        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });

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
                                    icon: gold
                                }).addTo(
                                    map)
                                .bindPopup('<b><?php echo e($item->district->name); ?></b><br/> <b><?php echo e($item->nama); ?></b>.').openPopup();


                        <?php elseif($item->hasilClustering[0]->cluster == 2): ?>


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


                <script>
                    function read() {
                        $.get("<?php echo e(url('/hasilClustering/read')); ?>", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }
                    $('.cluster_satu').click(function() {
                        // alert("Hello! I am an alert box!!");
                        // $("#table-company").slideUp("fast");
                        $("#table-tidakmiskin").slideUp("fast");
                        $("#table-menengah").slideUp("fast");
                        $.get("<?php echo e(url('/item_data_cluster_satu')); ?>", {}, function(data, status) {
                            $('.table_id').html(data)
                        });

                    });

                    $('.cluster_dua').click(function() {
                        // alert("Hello! I am an alert box!!");
                        $("#table-miskin").slideUp("fast");
                        $("#table-tidakmiskin").slideUp("fast");

                        $.get("<?php echo e(url('/item_data_cluster_dua')); ?>", {}, function(data, status) {
                            $('.table_id').html(data)
                        });

                    });

                    $('.cluster_tiga').click(function() {
                        // alert("Hello! I am an alert box!!");
                        $("#table-miskin").slideUp("fast");
                        $("#table-menengah").slideUp("fast");

                        $.get("<?php echo e(url('/item_data_cluster_tiga')); ?>", {}, function(data, status) {
                            $('.table_id').html(data)
                        });

                    });

                    $('select[name="district_id"]').on('change', function() {
                        let id = $(this).val();
                        // alert(id);

                        // $("#table-miskin").slideUp("fast");
                        // $("#table-menengah").slideUp("fast");
                        if (id) {

                            // $.get("<?php echo e(url('/kemiskinan_kecamatan?district_id=')); ?>".id, {}, function(data, status) {
                            //     $('.table_kecamatan').html(data)
                            // });


                            $.ajax({
                                url: '/kemiskinan_kecamatan?district_id=' + id,
                                method: "GET",
                                success: function(data) {
                                    $('.table_kecamatan').html(data)
                                }


                            });

                            // $('table_kecamatan').DataTable({
                            //     ajax: {
                            //         url: "/kemiskinan_kecamatan?district_id=" + id,
                            //         type: "GET",
                            //         dataSrc: ""
                            //     },
                            //     columns: [
                            //         {data: id},
                            //         {data: nama},
                            //     ]
                            // })
                        }



                    });
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilClustering/dashbboard_clustering.blade.php ENDPATH**/ ?>