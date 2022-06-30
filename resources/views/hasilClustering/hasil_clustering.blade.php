@extends('layouts.main')
@section('title', 'Data Hasil Survey')
@section('content')

    <body>
        <h6>Hasil Silhoutte</h6>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 1</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Miskin
                                    <span class="text-success text-sm font-weight-bolder">0.12612220410005048</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 2</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Menengah
                                    <span class="text-success text-sm font-weight-bolder">0.11669299306539814</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cluster 3</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Kaya
                                    <span class="text-success text-sm font-weight-bolder">0.1250472409829619</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
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
