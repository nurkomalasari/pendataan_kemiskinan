<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KKS
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Tanggal lahir</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Jenis Kelamin</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Agama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Status</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Pekerjaan</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Kecamatan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Desa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Alamat Lengkap</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Logitude</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Latitude</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Action</th>



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
                            <span class="text-xs font-weight-bold"><?php echo e($item->nik); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->kks); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->nama); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->tanggal_lahir); ?></span>
                        </td>

                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->jenis_kelamin); ?></span>
                        </td>

                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->agama); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->status->status_penduduk ?? ''); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->pekerjaan); ?></span>
                        </td>

                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->district->name ?? ''); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->village->name ?? ''); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->alamat_lengkap); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->longitude); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->latitude); ?></span>
                        </td>
                        <td class="align-middle">
                            <button class="btn btn-warning" onclick="show(<?php echo e($item->id); ?>)">Edit</button>
                            <button class="btn btn-danger" onclick="destroy(<?php echo e($item->id); ?>)">Delete</button>
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





<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/penduduk/read.blade.php ENDPATH**/ ?>