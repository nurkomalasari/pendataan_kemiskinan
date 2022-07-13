<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <thead>

                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pertanyaan
                        Survey
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>

                </tr>
            </thead>
            <?php $no = 1; ?>
            <tbody>

                @foreach ($data as $item)
                    <tr>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $no++ }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $item->Isi_pertanyaan }}</span>

                        </td>

                        <td><button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                            <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
