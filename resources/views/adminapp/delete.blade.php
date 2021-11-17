@extends('adminapp.master')

@section('content')
<div class="card-body table-responsive p-8">
<table class="table table-hover text-nowrap table-dark table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Customer</td>
            <td>Email</td>
            <td>Alamat</td>
            <td>No Telpon</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
            @foreach($getCustomers as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->phone }}</td>
            <td><a href="{{route('customerDelete', $item->id)}}" class="btn btn-flat btn-danger">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection






