<div class="card">
    <div class="card-body px-0 pt-0 pb-2" id="table-menengah">
        <div class="table-responsive p-0">
            <table id="table_id_cluster" class="table">
                <thead>
                    <tr>
                        <h4><b> Data Masyarakat Miskin Tingkat Kecamatan</b></h4>

                    </tr>
                    <br>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama Penduduk</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Kecamatan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            Hasil Clustering</th>






                    </tr>
                </thead>
                <?php $no = 1; ?>

                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm"><?php echo e($no++); ?></h6>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->penduduk->nama ?? ''); ?></span>
                            </td>
                            <td>
                                <span
                                    class="text-xs font-weight-bold"><?php echo e($item->penduduk->district->name ?? ''); ?></span>
                            </td>


                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->clusterName->cluster_name); ?></span>
                            </td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

</div>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilClustering/item_data_menengah.blade.php ENDPATH**/ ?>