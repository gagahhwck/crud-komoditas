@extends('komoditas.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Komoditas</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('komoditas.create') }}"> Tambah Komoditas Baru</a>
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
            <th>Kode</th>
            <th>Nama</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($komoditas as $komodita)
        <tr>
            <td>{{ $komodita->komoditas_kode }}</td>
            <td>{{ $komodita->komoditas_nama }}</td>
            <td>
                <form action="{{ route('komoditas.destroy',$komodita->komoditas_kode) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('komoditas.show',$komodita->komoditas_kode) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('komoditas.edit',$komodita->komoditas_kode) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $komoditas->links() !!}
    </div>
      
@endsection