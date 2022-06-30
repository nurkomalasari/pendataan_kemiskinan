<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <tr>
                <th>No</th>
                <th>Pertanyaan Survey</th>
                <th>Action</th>

            </tr>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($item->Isi_pertanyaan); ?></td>

                    <td><button class="btn btn-warning" onclick="show(<?php echo e($item->id); ?>)">Edit</button>
                        <button class="btn btn-danger" onclick="destroy(<?php echo e($item->id); ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">


<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/pertanyaan/read.blade.php ENDPATH**/ ?>