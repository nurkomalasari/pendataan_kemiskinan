<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="p-2">
    <div class="form-group">

        {{-- <input type="text" name="id_alamat" placeholder="Alamat" id="alamat" class="form-control"><br> --}}

        <select class="form-select" id="id_penduduk" name="id_penduduk" required>
            <option value="">Pilih Penduduk</option>

            @foreach ($penduduk as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach

        </select><br>
        <span class="text-xs font-weight-bold">
            @foreach ($pertanyaan as $item)
                {{ $item->Isi_pertanyaan }} <br> <br>
                <select class="form-select opsi-jawaban" name="id_opsi_jawaban" required>
                    <option value="">Pilih Jawaban</option>

                    @foreach ($item->opsiJawaban as $jawaban)
                        <option value="{{ $jawaban->poin_jawaban }}">{{ $jawaban->pilihan_jawaban }}</option>
                    @endforeach

                </select>
            @endforeach
        </span>

        <br>

        <input type="date" name="tanggal" placeholder="Tanggal Survey" id="tanggal" class="form-control"><br>


        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" onclick="store()">Tambah Data</button>
        </div>


    </div>

</div>
