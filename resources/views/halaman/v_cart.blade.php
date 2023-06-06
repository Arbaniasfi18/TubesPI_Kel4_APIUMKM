@extends('template.v_navbar')

@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title mb-3">List barang yang dibeli</h5>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
            <li class="list-group-item">Nama barang</li>
            <li class="list-group-item"><img style="width:30%; height:30%" src="" alt=""></li>
            <li class="list-group-item">Jumlah barang</li>
            <li class="list-group-item">Total</li>
            </ul>
        </div>
    </div>
  </div>
</div>

@endsection