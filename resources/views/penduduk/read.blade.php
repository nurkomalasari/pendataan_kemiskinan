<div class="table-responsive">
    <table id="table_id" class="table">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KKS
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Tanggal lahir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Jenis Kelamin</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Agama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Status</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Pekerjaan</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Kecamatan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Desa</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Alamat Lengkap</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Logitude</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Latitude</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Status Survey</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Action</th>



            </tr>
        </thead>
        <?php $no = 1; ?>

        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div class="my-auto">
                                <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->nik }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->kks }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->nama }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->tanggal_lahir }}</span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->jenis_kelamin }}</span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->agama }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->status->status_penduduk ?? '' }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->pekerjaan }}</span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->district->name ?? '' }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->village->name ?? '' }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->alamat_lengkap }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->longitude }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->latitude }}</span>
                    </td>
                    <td>
                        @if ($item->status_survey == 'Belum disurvey')
                            <span
                                class="text-xs font-weight-bold "style="background-color:#e06666">{{ $item->status_survey }}</span>
                        @endif

                        @if ($item->status_survey == 'Sudah disurvey')
                            <span
                                class="text-xs font-weight-bold "style="background-color:#80ca5e">{{ $item->status_survey }}</span>
                        @endif
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                        <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>



{{-- <div class="card">
    <div class="table-responsive">

        <table class="table" id="example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Kewargangeraan</th>
                    <th>Action</th>

                </tr>
            </thead>
            <?php $no = 1; ?>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->alamat->alamat_lengkap ?? '' }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->agama }}</td>
                        <td>{{ $item->status->status_penduduk ?? '' }}</td>
                        <td>{{ $item->pekerjaan }}</td>
                        <td>{{ $item->kewarganegaran }}</td>



                        <td><button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
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
        $('#example').DataTable();
    });
</script> --}}
