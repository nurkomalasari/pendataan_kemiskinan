<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}
        <input type="text" name="name" placeholder="Nama" id="name" class="form-control"><br>
        <input type="email" name="email" placeholder="Email" id="email" class="form-control"><br>
        <input type="text" name="password" placeholder="Password" id="password" class="form-control"><br>

        <select class="form-select" id="kecamatan" name="kecamatan" required>
            <option value="">Pilih Kecamatan</option>

            @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach

        </select><br>

        <select class="form-select" id="desa" name="desa" required>
            <option value="">Pilih Desa</option>
        </select>



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
            $('#kecamatan').on('change', function() {
                let kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: 'get',
                    url: "{{ route('getdesa_user') }}",
                    data: {
                        kecamatan: kecamatan
                    },
                    cache: false,
                    success: function(msg) {
                        $('#desa').html(msg);
                    },
                    errors: function(data) {
                        console.log('error:', data);
                    }

                })
            })
        });
    });
</script>
