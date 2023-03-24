@extends('layout.tamplate')

@section('content')
<div class="pb-3">
    <a href='{{url('category/create')}}' class="btn btn-primary">+ Tambah Data</a>
</div>
{{-- @foreach ($category as $data) --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-4">Nama</th>
            <th class="col-md-2">Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->desc}}</td>
            <td>
                <a href='{{url('category/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                <form class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')" action="{{ url('category/'.$item->id) }}" method="post">
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
{{-- @endforeach --}}

@endsection
