<?php $__env->startSection('title', 'Data Pertanyaan Survey'); ?>
<?php $__env->startSection('content'); ?>

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pertanyaan Survey</h6>
                        <button class="btn btn-primary" type="button" onclick="create()">+ Tambah Data </button>
                        <div id="read" class="mt-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="p-2" id="page"></div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                read()
            });

            function read() {
                $.get("<?php echo e(url('pertanyaan/read')); ?>", {}, function(data, status) {
                    $('#read').html(data);

                });
            }

            function create() {
                $.get("<?php echo e(url('pertanyaan/create')); ?>", {}, function(data, status) {
                    $('#page').html(data);
                    $('#exampleModalLabel').html('Tambah Status');
                    $('#exampleModal').modal('show');

                });
            }

            function store() {
                var Isi_pertanyaan = $("#Isi_pertanyaan").val();


                $.ajax({
                    type: "get",
                    url: "<?php echo e(url('pertanyaan/store')); ?>",
                    data: {
                        Isi_pertanyaan: Isi_pertanyaan,





                    },

                    success: function(data) {
                        // $("#page").html('');
                        $(".btn-close").click();
                        read()
                    }
                });


            }

            function show(id) {
                $.get("<?php echo e(url('pertanyaan/show')); ?>/" + id, {}, function(data, status) {
                    $('#page').html(data);
                    $('#exampleModalLabel').html('Edite Status');
                    $('#exampleModal').modal('show');

                });

            }

            function edit(id) {
                var Isi_pertanyaan = $("#Isi_pertanyaan").val();


                $.ajax({
                    type: "get",
                    url: "<?php echo e(url('pertanyaan/update')); ?>/" + id,
                    data: {
                        Isi_pertanyaan: Isi_pertanyaan,





                    },

                    success: function(data) {
                        // $("#page").html('');
                        $(".btn-close").click();
                        read()
                    }


                });


            }

            function destroy(id) {
                confirm("Apakah ingin mengapus data ?");

                $.ajax({
                    type: "get",
                    url: "<?php echo e(url('pertanyaan/destroy')); ?>/" + id,
                    success: function(data) {
                        // $("#page").html('');
                        $(".btn-close").click();
                        read()
                    }


                });


            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/pertanyaan/index.blade.php ENDPATH**/ ?>