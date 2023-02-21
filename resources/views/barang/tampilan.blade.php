@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Tampilkan Stock</p>
    </div>
<div class="card">
    <div class="col-lg-6 col-md-6 mx-auto">
        <div class="image">
            <img src="{{asset('/image/monitor.jpg')}}" width="100%" alt="...">
        </div>
    </div>
    <table class="table" style="margin-top: 10%">
      <thead>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang </th>
          <th scope="col">Brand</th>
          <th scope="col">UOM</th>
          <th scope="col">Price</th>
      </thead>
      <tbody>
        <td></td>
      </tbody>
    </table>
</div>
@endsection