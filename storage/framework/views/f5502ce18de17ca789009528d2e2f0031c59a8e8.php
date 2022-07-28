<?php $__env->startSection('title', 'Data Hasil Survey'); ?>
<?php $__env->startSection('page', 'Data Hasil Survey'); ?>
<?php $__env->startSection('content'); ?>

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <button class="btn btn-secondary" type="button" onclick="create()">+ Tambah
                            Data </button>
                        <a href="/newClustering" type="button" class="btn btn-primary"><i class="fas fa-layer-group"></i>
                            Proses Clustering</a>
                        <a class="btn btn-success" href="/export-hasilSurvey"><i class="fas fa-file-download"></i>
                            export</a>

                        <div id="read" class="mt-3">

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


                <script>
                    $(document).ready(function() {
                        read()
                    });



                    function read() {
                        $.get("<?php echo e(url('hasilSurvey/read')); ?>", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }

                    function create() {
                        $.get("<?php echo e(url('hasilSurvey/create')); ?>", {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Tambah Hasil Jawaban');
                            $('#exampleModal').modal('show');

                        });
                    }

                    function store() {
                        var id_penduduk = $("#id_penduduk").val();
                        // var id_opsi_jawaban = $(".opsi-jawaban").val();
                        var tanggal = $("#tanggal").val();


                        var id_opsi_jawaban = [];
                        /*Initializing array with Checkbox checked values*/
                        $(".opsi-jawaban option:selected").each(function() {
                            id_opsi_jawaban.push(this.value);
                        });

                        // alert(id_opsi_jawaban);


                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('hasilSurvey/store')); ?>",
                            data: {
                                id_penduduk: id_penduduk,
                                id_opsi_jawaban: id_opsi_jawaban,
                                tanggal: tanggal,





                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }
                        });


                    }

                    function show(id) {
                        $.get("<?php echo e(url('hasilSurvey/show')); ?>/" + id, {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Edite hasilSurvey');
                            $('#exampleModal').modal('show');

                        });

                    }

                    function edit(id) {
                        var id_penduduk = $("#id_penduduk").val();
                        var id_opsi_jawaban = $(".opsi-jawaban").val();
                        var tanggal = $("#tanggal").val();


                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('hasilSurvey/update')); ?>/" + id,
                            data: {
                                id_penduduk: id_penduduk,
                                id_opsi_jawaban: id_opsi_jawaban,
                                tanggal: tanggal,


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
                            url: "<?php echo e(url('hasilSurvey/destroy')); ?>/" + id,
                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }


                        });


                    }
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilsurvey/index.blade.php ENDPATH**/ ?>