<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}
        <input type="text" name="status_penduduk" placeholder="Status Penduduk" id="status_penduduk"
            class="form-control" value="{{ $data->status_penduduk }}"><br>

        <div class="form-group mt-2">
            <button class="btn btn-success" onclick="store()">Create</button>
        </div>


    </div>
</div>
