@extends('layout.tamplate')

@section('content')

<form action="/category/{{ $category->id }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}">
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="desc"  rows="3">{{$category->desc}}
        </textarea>
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>

@endsection
