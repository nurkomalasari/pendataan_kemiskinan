<div class="table-responsive">
    <table id="table" class="table">
        <thead class="thead-dark">
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Pertanyaan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Pilihan Jawaban</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Poin Jawaban</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Action</th>



            </tr>
        </thead>
        <?php $no = 1; ?>

        <tbody>

            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td>
                        <div class="d-flex px-2">
                            <div class="my-auto">
                                <h6 class="mb-0 text-sm"><?php echo e($no++); ?></h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold"><?php echo e($item->Isi_pertanyaan); ?></span>
                    </td>


                    
                    <td>
                        <span class="text-xs font-weight-bold">
                            <?php $__currentLoopData = $item->opsiJawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opsi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($opsi->pilihan_jawaban); ?>

                                <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">
                            <?php $__currentLoopData = $item->opsiJawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opsi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($opsi->poin_jawaban); ?>

                                <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                    </td>



                    <td>
                        <button class="btn btn-warning" onclick="show(<?php echo e($item->id); ?>)">Edit</button>
                        <button class="btn btn-danger" onclick="destroy(<?php echo e($item->id); ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/opsiJawaban/read.blade.php ENDPATH**/ ?>