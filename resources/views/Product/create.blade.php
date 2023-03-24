@extends('layout.tamplate')

@section('content')

<form action="{{url('product')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="text" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="desc" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>

@endsection
