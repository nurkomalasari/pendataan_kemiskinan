<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}



        <select class="form-select" id="district_id" name="district_id" required>
            <option value="{{ $data->pertanyaan->Isi_pertanyaan }}">
                {{ $data->pertanyaan->Isi_pertanyaan }}</option>

            @foreach ($pertanyaan as $item)
                <option value="{{ $item->id }}">{{ $item->Isi_pertanyaan }}</option>
            @endforeach

        </select><br>
        <input type="text" name="pilihan_jawaban" placeholder="Pilihan Jawaban" id="pilihan_jawaban"
            class="form-control" value="{{ $data->pilihan_jawaban }}"><br>

        <input type="number" name="poin_jawaban" placeholder="Poin Opsi Jawaban" id="poin_jawaban" class="form-control"
            value="{{ $data->pilihan_jawaban }}"><br>



        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" onclick="edit({{ $data->id }})">update Data</button>
        </div>


    </div>

</div>
