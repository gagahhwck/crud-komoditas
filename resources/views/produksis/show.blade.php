@extends('komoditas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Detail Produksi</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('komoditas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal : </strong>
                {{ $produksi->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode : </strong>
                {{ $produksi->komoditas_kode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Produksi : </strong>
                {{ $produksi->produksi }}
            </div>
        </div>
    </div>
@endsection