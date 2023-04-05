@extends('layout.tamplate')

@section('content')

<form action="{{url('product')}}" method="post">
    @csrf
    <select class="form-select" aria-label="Default select example" name="category_id">
        <option selected hidden disabled>Kategori</option>
        @foreach ($category as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

    </select>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="desc" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>

@endsection
