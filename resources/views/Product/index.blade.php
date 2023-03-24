@extends('layout.tamplate')

@section('content')
<div class="pb-3">
    <a href='' class="btn btn-primary">+ Tambah Data</a>
</div>
<div class="container">
    <div class="row" >
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="product text-center">
        {{-- <img src="img\Ps4.jpeg" class="product-img-top" alt="" width="200px"> --}}
        <div class="product-body">
            <h5 class="product-title">FIFA 23</h5>
            <h6 class="product-price">Rp. 500.000</h6>
            <p class="product-desc">CD FIFA 2023</p>
            <a href="" class="btn btn-dark d-grid ">Buy</a>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
