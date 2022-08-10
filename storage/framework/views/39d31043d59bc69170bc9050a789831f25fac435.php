<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="p-2">
    <div class="form-group">

        



        <select class="form-select" id="id_pertanyaan" name="id_pertanyaan" required>
            <option value="">Pilih Pertanyaan</option>

            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->Isi_pertanyaan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br>
        <input type="text" name="pilihan_jawaban" placeholder="Pilihan Jawaban" id="pilihan_jawaban"
            class="form-control"><br>

        <input type="number" name="poin_jawaban" placeholder="Poin Opsi Jawaban" id="poin_jawaban"
            class="form-control"><br>



        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" onclick="store()">Tambah Data</button>
        </div>


    </div>

</div>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/opsiJawaban/create.blade.php ENDPATH**/ ?>