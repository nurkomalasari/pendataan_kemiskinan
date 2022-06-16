@extends('layouts.main')
@section('title', 'Data Opsi Jawaban')
@section('content')

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Opsi Jawaban</h6>
                        <button class="btn btn-primary" type="button" onclick="create()">+ Tambah Data </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importExcel">
                            Import
                        </button>
                        <a class="btn btn-primary" href="/export"> export</a>
                        <div id="read" class="mt-3">

                        </div>
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
                        $.get("{{ url('opsiJawaban/read') }}", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }

                    function create() {
                        $.get("{{ url('opsiJawaban/create') }}", {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Tambah Opsi Jawaban');
                            $('#exampleModal').modal('show');

                        });
                    }

                    function store() {
                        var id_pertanyaan = $("#id_pertanyaan").val();
                        var pilihan_jawaban = $("#pilihan_jawaban").val();
                        var poin_jawaban = $("#poin_jawaban").val();


                        $.ajax({
                            type: "get",
                            url: "{{ url('opsiJawaban/store') }}",
                            data: {
                                id_pertanyaan: id_pertanyaan,
                                pilihan_jawaban: pilihan_jawaban,
                                poin_jawaban: poin_jawaban,


                            },

                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }
                        });


                    }

                    function show(id) {
                        $.get("{{ url('opsiJawaban/show') }}/" + id, {}, function(data, status) {
                            $('#page').html(data);
                            $('#exampleModalLabel').html('Edite opsiJawaban');
                            $('#exampleModal').modal('show');

                        });

                    }

                    function edit(id) {
                        var id_pertanyaan = $("#id_pertanyaan").val();
                        var pilihan_jawaban = $("#pilihan_jawaban").val();
                        var poin_jawaban = $("#poin_jawaban").val();
                        var agama = $("#agama").val();

                        $.ajax({
                            type: "get",
                            url: "{{ url('opsiJawaban/update') }}/" + id,
                            data: {
                                id_pertanyaan: id_pertanyaan,
                                pilihan_jawaban: pilihan_jawaban,
                                poin_jawaban: poin_jawaban,

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
                            url: "{{ url('opsiJawaban/destroy') }}/" + id,
                            success: function(data) {
                                // $("#page").html('');
                                $(".btn-close").click();
                                read()
                            }


                        });


                    }
                </script>
            @endsection
