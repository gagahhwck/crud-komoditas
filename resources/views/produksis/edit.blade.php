@extends('komoditas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Produksi</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('produksis.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('produksis.update',$produksi->komoditas_kode) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal : </strong>
                    <input type="date" name="tanggal" value="{{ $produksi->tanggal }}" class="form-control" placeholder="Tanggal Produksi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode : </strong>
                    <input type="text" name="produksis_kode" value="{{ $produksi->komoditas_kode }}" class="form-control" placeholder="Kode Komoditas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah : </strong>
                    <input class="form-control" name="produksi" placeholder="Jumlah Produksi" value="{{ $produksi->produksi }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection