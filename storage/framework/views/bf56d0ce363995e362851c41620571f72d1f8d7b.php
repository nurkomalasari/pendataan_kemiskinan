<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="p-2">
    <div class="form-group">

        

        <select class="form-select" id="id_penduduk" name="id_penduduk" required>
            <option value="">Pilih Penduduk</option>

            <?php $__currentLoopData = $penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br>
        <span class="text-xs font-weight-bold">
            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($item->Isi_pertanyaan); ?> <br> <br>
                <select class="form-select opsi-jawaban" name="id_opsi_jawaban" required>
                    <option value="">Pilih Jawaban</option>

                    <?php $__currentLoopData = $item->opsiJawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($jawaban->poin_jawaban); ?>"><?php echo e($jawaban->pilihan_jawaban); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>

        <br>

        <input type="date" name="tanggal" placeholder="Tanggal Survey" id="tanggal" class="form-control"><br>


        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" onclick="store()">Tambah Data</button>
        </div>


    </div>

</div>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Aplikasi_pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/hasilsurvey/create.blade.php ENDPATH**/ ?>