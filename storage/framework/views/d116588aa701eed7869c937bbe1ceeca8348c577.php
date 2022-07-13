<table id="table" class="table">
    <tr>
        <th>No</th>
        <th>Status Penduduk</th>
        <th>Action</th>

    </tr>
    <?php $no = 1; ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($item->status_penduduk); ?></td>

            <td><button class="btn btn-warning" onclick="show(<?php echo e($item->id); ?>)">Edit</button>
                <button class="btn btn-danger" onclick="destroy(<?php echo e($item->id); ?>)">Delete</button>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/status/read.blade.php ENDPATH**/ ?>