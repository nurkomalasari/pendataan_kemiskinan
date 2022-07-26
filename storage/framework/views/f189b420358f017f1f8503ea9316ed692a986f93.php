<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <thead>

                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pertanyaan
                        Survey
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

                </tr>
            </thead>
            <?php $no = 1; ?>
            <tbody>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($no++); ?></span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo e($item->Isi_pertanyaan); ?></span>

                        </td>

                        <td><button class="btn btn-warning" onclick="show(<?php echo e($item->id); ?>)">Edit</button>
                            <button class="btn btn-danger" onclick="destroy(<?php echo e($item->id); ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/pertanyaan/read.blade.php ENDPATH**/ ?>