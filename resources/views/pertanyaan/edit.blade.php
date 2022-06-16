<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}
        <input type="text" name="Isi_pertanyaan" placeholder="Isi Pertanyaan" id="Isi_pertanyaan" class="form-control"
            value="{{ $data->Isi_pertanyaan }}"><br>

        <div class="form-group mt-2">
            <button class="btn btn-success" onclick="edit({{ $data->id }})">Update data</button>
        </div>


    </div>
</div>
