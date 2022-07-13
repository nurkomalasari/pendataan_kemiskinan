@extends('layouts.main')
@section('title', 'Data Status')
@section('content')
@section('page', 'Data Status')


<body>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card">
                    <div class="mt-3 ml-2">

                        <button class="btn btn-primary" type="button" onclick="create()">+ Tambah Data </button>
                    </div>

                    <div id="read" class="mt-3">

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-2" id="page"></div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            read()
        });

        function read() {
            $.get("{{ url('status/read') }}", {}, function(data, status) {
                $('#read').html(data);

            });
        }

        function create() {
            $.get("{{ url('status/create') }}", {}, function(data, status) {
                $('#page').html(data);
                $('#exampleModalLabel').html('Tambah Status');
                $('#exampleModal').modal('show');

            });
        }

        function store() {
            var status_penduduk = $("#status_penduduk").val();


            $.ajax({
                type: "get",
                url: "{{ url('status/store') }}",
                data: {
                    status_penduduk: status_penduduk,





                },

                success: function(data) {
                    // $("#page").html('');
                    $(".btn-close").click();
                    read()
                }
            });


        }

        function show(id) {
            $.get("{{ url('status/show') }}/" + id, {}, function(data, status) {
                $('#page').html(data);
                $('#exampleModalLabel').html('Edite Status');
                $('#exampleModal').modal('show');

            });

        }

        function edit(id) {
            var status_penduduk = $("#status_penduduk").val();


            $.ajax({
                type: "get",
                url: "{{ url('status/update') }}/" + id,
                data: {
                    status_penduduk: status_penduduk,





                },

                success: function(data) {
                    // $("#page").html('');
                    $(".btn-close").click();
                    read()
                }


            });


        }

        function destroy(id) {
            confirm("Apakah ingin mengapus data ?");

            $.ajax({
                type: "get",
                url: "{{ url('status/destroy') }}/" + id,
                success: function(data) {
                    // $("#page").html('');
                    $(".btn-close").click();
                    read()
                }


            });


        }
    </script>
@endsection
