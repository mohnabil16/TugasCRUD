@extends('layout.tamplate')

@section('content')
<div class="pb-3">
    <a href='{{url('product/create')}}' class="btn btn-primary">+ Tambah Data</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Nama</th>
            <th class="col-md-2">Kategori</th>
            <th class="col-md-2">Harga</th>
            <th class="col-md-4">Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->desc}}</td>
            <td>
                <a href='{{url('product/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                <form class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')" action="{{ url('product/'.$item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
