<table id="table" class="table">
    <tr>
        <th>No</th>
        <th>Status Penduduk</th>
        <th>Action</th>

    </tr>
    <?php $no = 1; ?>
    @foreach ($data as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->status_penduduk }}</td>

            <td><button class="btn btn-warning" onclick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onclick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
