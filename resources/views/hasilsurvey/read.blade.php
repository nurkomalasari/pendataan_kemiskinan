<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Penduduk</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Desa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Jawaban Survey</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Tanggal</th>
                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        longitude</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        latitude</th> --}}
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Action</th>



                </tr>
            </thead>
            <?php $no = 1; ?>

            <tbody>

                @foreach ($hasil as $item)
                    <tr>

                        <td>
                            <div class="d-flex px-2">
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span
                                class="text-xs font-weight-bold">{{ $item->penduduk->nama ?? '' }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $item->penduduk->district->name ?? '' }}</span>
                        </td>

                        <td>
                            <span class="text-xs font-weight-bold">{{ $item->id_opsi_jawaban }}</span>
                        </td>

                        <td>
                            <span class="text-xs font-weight-bold">{{ $item->tanggal }}</span>
                        </td>


                        {{-- <td>
                            <span class="text-xs font-weight-bold">{{ $item->pertanyaan->Isi_pertanyaan }}</span>
                        </td> --}}




                        <td class="align-middle">
                            <button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                            <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>
