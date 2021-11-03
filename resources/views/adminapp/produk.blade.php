@extends('adminapp.master')

@section('content')
<div class="card-body table-responsive p-8">
<table class="table table-hover text-nowrap table-dark table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
            @foreach($getProducts as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->jumlah }}</td>
            <td><a href="{{route('produkDelete', $item->id)}}" class="btn btn-flat btn-danger">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection






