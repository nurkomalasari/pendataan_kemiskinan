<div class="table-responsive">
    <table id="table" class="table">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Email</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Password</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Kecamatan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    Desa</th>
                {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                    image</th> --}}



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
                        <span class="text-xs font-weight-bold">{{ $item->name }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->email }}</span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">Encryp</span>
                    </td>

                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->district->name ?? '' }}</span>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">{{ $item->village->name ?? '' }}</span>
                    </td>
                    {{-- <td>

                        <span class="text-xs font-weight-bold"><img src="/image/{{ $item->image }}"
                                width="100px"></span>
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

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
