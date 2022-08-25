@extends('layout.main')

@section('content')
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <a href="/export_master">
                <button class="btn btn-success">Export</button>
            </a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Import
            </button>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
@endsection