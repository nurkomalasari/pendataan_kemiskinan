<div class="card">
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama Penduduk</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Kecamatan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            X1</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            X2</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X3</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X4</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X5</th>

                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X6</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X7</th>

                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X8</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X9</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X10</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X11</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X12</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X13</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            X14</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            Hasil Clustering</th>






                    </tr>
                </thead>
                <?php $no = 1; ?>

                <tbody>
                    <?php $__currentLoopData = $clustering; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <span class="text-xs font-weight-bold"><?php echo e($item->X1); ?></span>
                            </td>

                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X2); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X3); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X4); ?></span>
                            </td>

                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X5); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X6); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X7); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X8); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X9); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X10); ?></span>
                            </td>

                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X11); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X12); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X13); ?></span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold"><?php echo e($item->X14); ?></span>
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
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilClustering/read.blade.php ENDPATH**/ ?>