@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Add Barang Baru</p>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                @csrf
                <div class="form-group">
                    <label for="katagori">Katagori</label>
                    <select name="katagori" id="katagori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="a">poqe soker</option>
                        <option value="b">poqe biasa</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="uom">Brand</label>
                                <select name="uom" id="uom" class="form-control">
                                    <option value="">Pilih Brand</option>
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="brand">UOM</label>
                                <select name="brand" id="brand" class="form-control">
                                    <option value="">Pilih Satuan</option>
                                    <option value="a">Onic</option>
                                    <option value="b">Alter Ego</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="nama-barang">Jumlah Stock</label>
                            <input class="form-control" id="nama-barang">
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-info">Simpan Stock</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection