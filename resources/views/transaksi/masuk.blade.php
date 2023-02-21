@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold;">Transaksi</div>
        <div style="margin-left: 5px;">/ Barang Masuk /</div>
        <button type="button" class="btn btn-outline-primary ml-2">Tambah Stock Baru</button>
    </div>
    <tr>
        <div class="alert alert-danger" style="margin-top: 3%" role="alert">
            Request Barang Akan Masuk Kedalam Table Dibawah Ini
        </div>
    </tr>
    <div class="card mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Referensi</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah permintaan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <td></td>
            </tbody>
        </div>
    </div>

@endsection