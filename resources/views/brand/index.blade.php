@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Edit Brand</p>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-brand">Nama Brand</label>
                            <input type="email" class="form-control" id="nama-brand" placeholder="">
                            <button type="submit" class="btn btn-outline-primary mt-3">Simpan Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Brand</th>
                        <th scope="col">Nama Brand</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        <td></td>
                    </tbody>
                </div>
            </div>

    </div>
</div>

@endsection