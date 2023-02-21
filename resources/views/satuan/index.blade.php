@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Satuan</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form>
                    <div class="form-group">
                        <label for="nama-katagori">Nama Satuan</label>
                        <input type="email" class="form-control" id="nama-katagori" placeholder="">
                        <button type="submit" class="btn btn-outline-primary mt-3">Simpan Satuan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Satuan</th>
                        <th scope="col">Nama Satuan</th>
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