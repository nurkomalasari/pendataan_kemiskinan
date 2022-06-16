<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        X1</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        X2</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X3</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X4</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X5</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X6</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X7</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X8</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X9</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X10</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X11</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X12</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X13</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        X14</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                        Hasil Clustering</th>






                </tr>
            </thead>
            <?php $no = 1; ?>

            <tbody>
                @php
                    $jumlahData = count($data['X1']);
                @endphp
                @for ($i = 0; $i < $jumlahData; $i++)
                    <tr>
                        <td>
                            <div class="d-flex px-2">
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">
                                {{ $data['X1'][$i] }}
                            </p>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X2'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X3'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X4'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X5'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X6'][$i] }}</span>
                        </td>


                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X7'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X8'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X9'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X10'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X11'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X12'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X13'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['X14'][$i] }}</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">{{ $data['cluster'][$i] }}</span>
                        </td>



                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
