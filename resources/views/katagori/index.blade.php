@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Katagori</p>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-katagori">Nama Katagori</label>
                            <input type="email" class="form-control" id="nama-katagori" placeholder="">
                            <button type="submit" class="btn btn-outline-primary mt-3">Perbarui Katagori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Katagori</th>
                        <th scope="col">Nama Katagori</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection