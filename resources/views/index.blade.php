@extends('layout.main')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="m-2">
                <a href="/export_master">
                    <button class="btn btn-success">Export</button>
                </a>
                <!-- Button trigger modal master artikel-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalImportMaster">
                    Import
                </button>
                <!-- Button trigger modal sampling SO -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalImportSOD">
                    Sampling
                </button>
            </div>
            

            <div class="reader m-3" id="reader"></div>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <form class="d-flex" action="/index" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" id="search" autofocus autocomplete="">
                        <button class="btn btn-outline-success" type="submit" id="btnSearch">Search</button>
                    </form>
                </div>
                <div class="card-body">
                    <div id="container">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Master Artikel -->
    <div class="modal fade" id="ModalImportMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Master Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/import_master" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                        <input type="file" name="file" required="required">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Master Sampling SOH -->
    <div class="modal fade" id="ModalImportSOD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import SOD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/import_SOD" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                        <input type="file" name="file" required="required">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection