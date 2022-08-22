@extends('layout.main')

@section('content')
    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h3>Master Artikel</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Artikel</th>
                                <th>Desc</th>
                                <th>Harga</th>
                                <th>LV 3</th>
                                <th>LV 4</th>
                            </tr>
                            <tr>
                                @foreach ($master as $item)
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->lv3 }}</td>
                                    <td>{{ $item->ilv4 }}</td>
                                @endforeach
                            </tr>
                        </table>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
@endsection