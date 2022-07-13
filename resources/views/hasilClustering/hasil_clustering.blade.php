@extends('layouts.main')
@section('title', 'Data Hasil Clustering')
@section('page', 'Data Hasil Clustering')

@section('content')

    <body>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Hasil Clustering</h6>
                        <a href="/newClustering" type="button" class="btn btn-primary">+ Tambah
                            Data clustering</a>
                        {{-- <button class="btn btn-primary" type="button" onclick="create()">+ Tambah Data clustering </button> --}}
                        <div id="read" class="mt-3">

                        </div>
                    </div>


                    <!-- Button trigger modal -->


                    <!-- Modal -->
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
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                >
                <script>
                    $(document).ready(function() {
                        read()
                    });



                    function read() {
                        $.get("{{ url('/hasilClustering/read') }}", {}, function(data, status) {
                            $('#read').html(data);

                        });
                    }
                </script>
            @endsection
