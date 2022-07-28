<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}
        <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" id="nik" class="form-control"><br>
        <input type="text" name="kks" placeholder="Kartu Keluarga Sejahtera" id="kks"
            class="form-control"><br>
        <input type="text" name="nama" placeholder="Nama" id="nama" class="form-control"><br>
        <input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" id="tanggal_lahir"
            class="form-control"><br>
        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
            <option selected>------Jenis Kelamin -----</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki - Laki</option>
        </select><br>
        <select class="form-select" id="agama" name="agama" aria-label="Default select example">
            <option selected>------Pilih Agama-----</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>
        <select class="form-select" id="id_status" name="id_status" required>
            <option value="">Pilih Status</option>

            @foreach ($status as $item)
                <option value="{{ $item->id }}" {{ old('id_status') == $item->id ? 'selected' : '' }}>
                    {{ $item->status_penduduk }}</option>
            @endforeach

        </select><br>
        <input type="text" name="pekerjaan" placeholder="Pekerjaan" id="pekerjaan" class="form-control"><br>

        <select class="form-select" id="district_id" name="district_id" required>
            <option value="">Pilih Kecamatan</option>

            @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach

        </select><br>

        <select class="form-select" id="village_id" name="village_id" required>
            <option value="">Pilih Kecamatan</option>

        </select>
        <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
        <textarea class="form-control" id="alamat_lengkap" rows="3"></textarea>
        <br>
        <input type="text" name="longitude" placeholder="Longitude" id="longitude" class="form-control"><br>
        <input type="text" name="latitude" placeholder="Latitude" id="latitude" class="form-control"><br>



        <div class="form-group mt-2">
            <button class="btn btn-success" onclick="store()">Create</button>
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
                    url: "{{ route('getdesa') }}",
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
