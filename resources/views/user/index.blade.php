@extends('layouts.main')
@section('title', 'Manage Data Pengguna')
@section('page', 'Data Pengguna')

@section('content')

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="mt-4 ml-2">
                        <button class="btn btn-primary" type="button" onclick="create()">+ Tambah Data </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importExcel">
                            Import
                        </button>
                        <a class="btn btn-primary" href="/export"> export</a>
                    </div>


                    <div id="read" class="mt-3">

                    </div>



                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->


                    <!-- Modal untuk import -->
                    <div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Untuk crud-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-2" id="page"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        read()
                    });



                    function read() {
                        $.get("{{ url('pengguna/read') }}", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }

                    function create() {
                        $.get("{{ url('pengguna/create') }}", {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Tambah pengguna');
                            $('#exampleModal').modal('show');

                        });
                    }

                    function store() {
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var password = $("#password").val();
                        var kecamatan = $("#kecamatan").val();
                        var desa = $("#desa").val();






                        $.ajax({
                            type: "get",
                            url: "{{ url('pengguna/store') }}",
                            data: {
                                name: name,
                                email: email,
                                password: password,
                                kecamatan: kecamatan,
                                desa: desa,

                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }
                        });


                    }

                    function show(id) {
                        $.get("{{ url('pengguna/show') }}/" + id, {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Edite pengguna');
                            $('#exampleModal').modal('show');

                        });

                    }

                    function edit(id) {
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var password = $("#password").val();
                        var kecamatan = $("#kecamatan").val();
                        var desa = $("#desa").val();
                        $.ajax({
                            type: "get",
                            url: "{{ url('pengguna/update') }}/" + id,
                            data: {
                                name: name,
                                email: email,
                                password: password,
                                kecamatan: kecamatan,
                                desa: desa,

                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }


                        });


                    }

                    function destroy(id) {
                        // confirm("Apakah ingin mengapus data ?");

                        $.ajax({
                            type: "get",
                            url: "{{ url('pengguna/destroy') }}/" + id,
                            success: function(data) {
                                $("#page").html('');
                                // $(".btn-close").click();
                                read()
                            }
                        });

                    }
                </script>
            @endsection
