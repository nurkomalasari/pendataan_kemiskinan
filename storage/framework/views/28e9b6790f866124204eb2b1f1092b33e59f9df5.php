<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="p-2">
    <div class="form-group">

        



        <select class="form-select" id="district_id" name="district_id" required>
            <option value="<?php echo e($data->pertanyaan->Isi_pertanyaan); ?>">
                <?php echo e($data->pertanyaan->Isi_pertanyaan); ?></option>

            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->Isi_pertanyaan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br>
        <input type="text" name="pilihan_jawaban" placeholder="Pilihan Jawaban" id="pilihan_jawaban"
            class="form-control" value="<?php echo e($data->pilihan_jawaban); ?>"><br>

        <input type="number" name="poin_jawaban" placeholder="Poin Opsi Jawaban" id="poin_jawaban" class="form-control"
            value="<?php echo e($data->poin_jawaban); ?>"><br>



        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" onclick="edit(<?php echo e($data->id); ?>)">update Data</button>
        </div>


    </div>

</div>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/opsiJawaban/edit.blade.php ENDPATH**/ ?>