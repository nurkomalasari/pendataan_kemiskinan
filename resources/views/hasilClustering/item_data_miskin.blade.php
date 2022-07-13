<div class="card">
    <div class="card-body px-0 pt-0 pb-2" id="table-miskin">
        <div class="table-responsive p-0">
            <table id="table_id_cluster" class="table">
                <thead><br>
                    <tr>
                        <h4><b> Data Masyarakat Miskin Tingkat Kecamatan</b></h4>
                    </tr>
                    <br>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama Penduduk</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Kecamatan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            Hasil Clustering</th>






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
                                <span class="text-xs font-weight-bold">{{ $item->penduduk->nama ?? '' }}</span>
                            </td>
                            <td>
                                <span
                                    class="text-xs font-weight-bold">{{ $item->penduduk->district->name ?? '' }}</span>
                            </td>


                            <td>
                                <span class="text-xs font-weight-bold">{{ $item->clusterName->cluster_name }}</span>
                            </td>
                            {{-- <td class="align-middle">
                            <button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                            <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
                        </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

</div>
