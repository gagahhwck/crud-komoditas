@extends('komoditas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Detail Komoditas</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('komoditas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode : </strong>
                {{ $komodita->komoditas_kode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                {{ $komodita->komoditas_nama }}
            </div>
        </div>
    </div>
@endsection