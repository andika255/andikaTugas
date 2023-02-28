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
                    <label for="katagori">Nama Barang</label>
                    <input name="katagori" id="katagori" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="uom">Brand</label>
                                <select name="uom" id="uom" class="form-control">
                                    <option value="">Pilih Brand</option>
                                    <option value="a">BRND/20230228/001 - Kawasaki</option>
                                    <option value="b">BRND/20230228/002 - Kawasaki</option>
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
                                    <option value="a">UOM/20230228/001 - Unit</option>
                                    <option value="b">UOM/20230228/001 - Unit</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="">Jumlah Stock</label>
                            <input type="text" class="form-control" name="quantity" id="">
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