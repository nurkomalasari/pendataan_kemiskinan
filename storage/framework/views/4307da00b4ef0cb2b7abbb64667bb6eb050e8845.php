<?php $__env->startSection('title', 'Data Hasil Clustering'); ?>
<?php $__env->startSection('page', 'Data Hasil Clustering'); ?>

<?php $__env->startSection('content'); ?>

    <body>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        
                        <div id="read">

                        </div>
                    </div>


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
                >
                <script>
                    $(document).ready(function() {
                        read()
                    });



                    function read() {
                        $.get("<?php echo e(url('/hasilClustering/read')); ?>", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilClustering/hasil_clustering.blade.php ENDPATH**/ ?>