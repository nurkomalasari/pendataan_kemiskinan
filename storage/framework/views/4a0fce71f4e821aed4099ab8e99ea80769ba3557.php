<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="p-2">
    <div class="form-group">

        
        <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" id="nik" class="form-control"
            value="<?php echo e($data->nik); ?>"><br>
        <input type="text" name="kks" placeholder="Kartu Keluarga Sejahtera" id="kks" class="form-control"
            value="<?php echo e($data->kks); ?>"><br>
        <input type="text" name="nama" placeholder="Nama" id="nama" class="form-control"
            value="<?php echo e($data->nama); ?>"><br>

        <input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" id="tanggal_lahir" class="form-control"
            value="<?php echo e($data->tanggal_lahir); ?>"><br>
        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
            <option selected><?php echo e($data->jenis_kelamin); ?></option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki - Laki">Laki - Laki</option>
        </select><br>
        <select class="form-select" id="agama" name="agama" aria-label="Default select example">
            <option selected><?php echo e($data->agama); ?></option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>
        <select class="form-select" id="id_status" name="id_status" required>
            <option value=""><?php echo e($data->status->status_penduduk ?? ''); ?></option>

            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" <?php echo e(old('id_status') == $item->id ? 'selected' : ''); ?>>
                    <?php echo e($item->status_penduduk); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br>
        <input type="text" name="pekerjaan" placeholder="Pekerjaan" id="pekerjaan" class="form-control"
            value="<?php echo e($data->pekerjaan); ?>"><br>

        <select class="form-select" id="district_id" name="district_id" required>
            <option value=""><?php echo e($data->district->name ?? ''); ?></option>

            <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br>

        <select class="form-select" id="village_id" name="village_id" required>
            <option value=""><?php echo e($data->village->name ?? ''); ?></option>

        </select>
        <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
        <textarea class="form-control" id="alamat_lengkap" rows="3"><?php echo e($data->alamat_lengkap); ?></textarea>
        <input type="text" name="longitude" placeholder="longitude" id="longitude" class="form-control"
            value="<?php echo e($data->longitude); ?>"><br>
        <input type="text" name="latitude" placeholder="latitude" id="latitude" class="form-control"
            value="<?php echo e($data->latitude); ?>"><br>

        <div class="form-group mt-2">
            <button class="btn btn-success" onclick="edit(<?php echo e($data->id); ?>)">Update</button>

        </div>


    </div>

</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[csrf-token]').attr('content')
            }
        });

        $(function() {
            $('#district_id').on('change', function() {
                let district_id = $('#district_id').val();

                $.ajax({
                    type: 'get',
                    url: "<?php echo e(route('getdesa')); ?>",
                    data: {
                        district_id: district_id
                    },
                    cache: false,
                    success: function(msg) {
                        $('#village_id').html(msg);
                    },
                    errors: function(data) {
                        console.log('error:', data);
                    }

                })
            })
        });
    });
</script>
<?php /**PATH D:\AKADEMIK\SKRIPSI 2022\Pendataan_kemiskinan\Pendataan_kemiskinan\resources\views/penduduk/edit.blade.php ENDPATH**/ ?>