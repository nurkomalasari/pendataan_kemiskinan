<div class="p-2">
    <div class="form-group">

        
        <input type="text" name="Isi_pertanyaan" placeholder="Isi Pertanyaan" id="Isi_pertanyaan" class="form-control"
            value="<?php echo e($data->Isi_pertanyaan); ?>"><br>

        <div class="form-group mt-2">
            <button class="btn btn-success" onclick="edit(<?php echo e($data->id); ?>)">Update data</button>
        </div>


    </div>
</div>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/pertanyaan/edit.blade.php ENDPATH**/ ?>