@extends('komoditas.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Produksi</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('komoditas.create') }}"> Tambah Produksi Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Komoditas</th>
            <th>Produksi (kg)</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produksis as $produksi)
        <tr>
            <td>{{ $produksi->tanggal }}</td>
            <td>{{ $produksi->komoditas_kode }}</td>
            <td>{{ $produksi->produksi }}</td>
            <td>
                <form action="{{ route('produksis.destroy',$produksi->komoditas_kode) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('produksis.show',$produksi->komoditas_kode) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('produksis.edit',$produksi->komoditas_kode) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $produksis->links() !!}
    </div>
      
@endsection