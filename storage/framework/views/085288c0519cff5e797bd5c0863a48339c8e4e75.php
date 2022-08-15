<?php $__env->startSection('title', 'Data Opsi Jawaban'); ?>
<?php $__env->startSection('page', 'Data Opsi Jawaban'); ?>
<?php $__env->startSection('content'); ?>

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <button class="btn btn-secondary" type="button" onclick="create()">+ Tambah Data </button>
                        <div id="read">

                        </div>
                    </div>


                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->


                    <!-- Modal untuk import -->
                    <div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Untuk crud-->
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
                <script>
                    $(document).ready(function() {
                        read()
                    });



                    function read() {
                        $.get("<?php echo e(url('opsiJawaban/read')); ?>", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }

                    function create() {
                        $.get("<?php echo e(url('opsiJawaban/create')); ?>", {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Tambah Opsi Jawaban');
                            $('#exampleModal').modal('show');

                        });
                    }

                    function store() {
                        var id_pertanyaan = $("#id_pertanyaan").val();
                        var pilihan_jawaban = $("#pilihan_jawaban").val();
                        var poin_jawaban = $("#poin_jawaban").val();


                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('opsiJawaban/store')); ?>",
                            data: {
                                id_pertanyaan: id_pertanyaan,
                                pilihan_jawaban: pilihan_jawaban,
                                poin_jawaban: poin_jawaban,


                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }
                        });


                    }

                    function show(id) {
                        $.get("<?php echo e(url('opsiJawaban/show')); ?>/" + id, {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Edite opsiJawaban');
                            $('#exampleModal').modal('show');

                        });

                    }

                    function edit(id) {
                        var id_pertanyaan = $("#id_pertanyaan").val();
                        var pilihan_jawaban = $("#pilihan_jawaban").val();
                        var poin_jawaban = $("#poin_jawaban").val();
                        var agama = $("#agama").val();

                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('opsiJawaban/update')); ?>/" + id,
                            data: {
                                id_pertanyaan: id_pertanyaan,
                                pilihan_jawaban: pilihan_jawaban,
                                poin_jawaban: poin_jawaban,

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
                            url: "<?php echo e(url('opsiJawaban/destroy')); ?>/" + id,
                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }


                        });


                    }
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/opsiJawaban/index.blade.php ENDPATH**/ ?>