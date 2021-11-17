@extends('adminapp.master')

@section('content')
<div class="card-body table-responsive p-8">
<table class="table table-hover text-nowrap table-dark table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Kategori</td>
            <td>Deskripsi</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
            @foreach($getCategories as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td><a href="{{route('categoriesDelete', $item->id)}}" class="btn btn-flat btn-danger">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection






