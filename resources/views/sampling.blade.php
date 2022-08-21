@extends('layout.main')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        Form Sampling
                    </div>
                    <div class="card-body ms-5 me-5">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="master" class="form-label">Upload Master Artikel</label>
                                <input class="form-control" type="file" id="master">
                                <p class="fst-italic">Upload master artikel ketika ada update artikel saja</p>
                            </div>
                            <div class="mb-3">
                                <label for="soh" class="form-label">Upload SOH</label>
                                <input class="form-control" type="file" id="soh">
                            </div>
                            <div class="mb-3">
                                <label for="sod" class="form-label">Upload SOD</label>
                                <input class="form-control" type="file" id="sod">
                            </div>
                            <div class="mb-3">
                                <label for="sog" class="form-label">Upload SOG</label>
                                <input class="form-control" type="file" id="sog">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-success">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection