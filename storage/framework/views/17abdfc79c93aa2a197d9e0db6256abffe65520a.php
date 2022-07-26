<?php $__env->startSection('title', 'Data Penduduk'); ?>
<?php $__env->startSection('page', 'Data Penduduk'); ?>
<?php $__env->startSection('content'); ?>

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <button class="btn btn-secondary" type="button" onclick="create()">+ Tambah Data </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importExcel">
                            <i class="fas fa-file-import"></i> Import
                        </button>
                        <a class="btn btn-success" href="/export"><i class="fas fa-file-download"></i> export</a>
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
                                    <form action="<?php echo e(url('/importPenduduk')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="file" name="penduduk_import" class="form-control"
                                            placeholder="Recipient's username" aria-label="Recipient's username"
                                            aria-describedby="button-addon2">
                                        <button class="btn btn-primary mt-3" type="submit"
                                            id="button-addon2">Import</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Untuk crud-->
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
                        $.get("<?php echo e(url('penduduk/read')); ?>", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }

                    function create() {
                        $.get("<?php echo e(url('penduduk/create')); ?>", {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Tambah Penduduk');
                            $('#exampleModal').modal('show');

                        });
                    }

                    function store() {
                        var nik = $("#nik").val();
                        var kks = $("#kks").val();
                        var nama = $("#nama").val();
                        var tanggal_lahir = $("#tanggal_lahir").val();
                        var jenis_kelamin = $("#jenis_kelamin").val();
                        var agama = $("#agama").val();
                        var id_status = $("#id_status").val();
                        var pekerjaan = $("#pekerjaan").val();

                        var district_id = $("#district_id").val();
                        var village_id = $("#village_id").val();
                        var alamat_lengkap = $("#alamat_lengkap").val();
                        var longitude = $("#longitude").val();
                        var latitude = $("#latitude").val();




                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('penduduk/store')); ?>",
                            data: {
                                nik: nik,
                                kks: kks,
                                nama: nama,
                                tanggal_lahir: tanggal_lahir,
                                jenis_kelamin: jenis_kelamin,
                                agama: agama,
                                id_status: id_status,
                                pekerjaan: pekerjaan,

                                district_id: district_id,
                                village_id: village_id,
                                alamat_lengkap: alamat_lengkap,
                                longitude: longitude,
                                latitude: latitude,



                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }
                        });


                    }

                    function show(id) {
                        $.get("<?php echo e(url('penduduk/show')); ?>/" + id, {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Edite Penduduk');
                            $('#exampleModal').modal('show');

                        });

                    }

                    function edit(id) {
                        var nik = $("#nik").val();
                        var kks = $("#kks").val();
                        var nama = $("#nama").val();
                        var tanggal_lahir = $("#tanggal_lahir").val();
                        var jenis_kelamin = $("#jenis_kelamin").val();
                        var agama = $("#agama").val();
                        var id_status = $("#id_status").val();
                        var pekerjaan = $("#pekerjaan").val();

                        var district_id = $("#district_id").val();
                        var village_id = $("#village_id").val();
                        var alamat_lengkap = $("#alamat_lengkap").val();
                        var longitude = $("#longitude").val();
                        var latitude = $("#latitude").val();



                        $.ajax({
                            type: "get",
                            url: "<?php echo e(url('penduduk/update')); ?>/" + id,
                            data: {
                                nik: nik,
                                kks: kks,
                                nama: nama,
                                tanggal_lahir: tanggal_lahir,
                                jenis_kelamin: jenis_kelamin,
                                agama: agama,
                                id_status: id_status,
                                pekerjaan: pekerjaan,

                                district_id: district_id,
                                village_id: village_id,
                                alamat_lengkap: alamat_lengkap,
                                longitude: longitude,
                                latitude: latitude,

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
                            url: "<?php echo e(url('penduduk/destroy')); ?>/" + id,
                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }


                        });


                    }
                </script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/penduduk/index.blade.php ENDPATH**/ ?>