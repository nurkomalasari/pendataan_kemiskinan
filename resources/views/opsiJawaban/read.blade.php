<div class="table-responsive">
    <table id="table" class="table">
        <thead class="thead-dark">
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Pertanyaan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Pilihan Jawaban</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Poin Jawaban</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Action</th>



            </tr>
        </thead>
        <?php $no = 1; ?>

        <tbody>

            @foreach ($pertanyaan as $item)
                <tr>

                    <td>
                        <div class="d-flex px-2">
                            <div class="my-auto">
                                <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->Isi_pertanyaan }}</span>
                    </td>


                    {{-- <td>
                            <span class="text-xs font-weight-bold">{{ $item->pertanyaan->Isi_pertanyaan }}</span>
                        </td> --}}
                    <td>
                        <span class="text-xs font-weight-bold">
                            @foreach ($item->opsiJawaban as $opsi)
                                {{ $opsi->pilihan_jawaban }}
                                <br>
                            @endforeach
                        </span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">
                            @foreach ($item->opsiJawaban as $opsi)
                                {{ $opsi->poin_jawaban }}
                                <br>
                            @endforeach
                        </span>
                    </td>



                    <td>
                        <button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                        <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
