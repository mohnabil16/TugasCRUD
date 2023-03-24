@extends('layout.tamplate')

@section('content')

<form>
    <div class="mb-3">
        <label for="product_name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="product_name">
    </div>
    <div class="mb-3">
        <label for="product_price" class="form-label">Harga</label>
        <input type="text" class="form-control" id="product_price">
    </div>
    <div class="mb-3">
        <label for="product_desc" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="product_desc" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>

@endsection
