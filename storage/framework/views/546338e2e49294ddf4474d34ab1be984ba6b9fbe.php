<?php $__env->startSection('title', 'Data Hasil Clustering'); ?>
<?php $__env->startSection('page', 'Data Hasil Clustering'); ?>

<?php $__env->startSection('content'); ?>

    <body>
        <h6>Hasil Silhoutte</h6>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_satu">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 1</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Miskin

                                    <span class="text-success text-sm font-weight-bolder"><?php echo e($data[2]); ?></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md ">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_dua">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 2</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Menengah
                                    <span class="text-success text-sm font-weight-bolder"><?php echo e($data[3]); ?></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md cluster_dua">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3 cluster_tiga">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 3</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Kaya
                                    <span class="text-success text-sm font-weight-bolder"><?php echo e($data[4]); ?></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md ">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div id="piechart_3d" style="width: 500px; height: 350px;"></div>

        </div>

        <div class="table_id mt-3">

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
                    ;



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
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilClustering/dashbboard_clustering.blade.php ENDPATH**/ ?>