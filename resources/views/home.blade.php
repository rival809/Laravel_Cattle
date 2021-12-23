@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <nav>
        <div class="navbarSecond">
            <ul class="menuSecond">
              <li class="itemSecond">
                <div class="input-icon">
                <input type="search" name="search" id="search-produk" placeholder="Cari Produk">
                <i class="fas fa-search"></i>
                </div>
              </li>
              <li class="itemSecond"><a href="#">Keranjang</a></li>
              <li class="itemSecond"><a href="#">Favourite</a></li>
              <li class="itemSecond"><a href="#">Transaksi</a></li>
            </ul>
          </div>
    </nav> --}}
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3 ">
            <img class="rounded mx-auto d-block" src="{{('image/banner.png')}}" alt="">
        </div>
        <div class="col-md-12 mb-3 ">
            <h1 class="Produk text-center">Kategori</h1>
            <p class="keterangan text-center">Pilih Berdasarkan Kategori</p>
        </div>
         @foreach ($kategoris as $kategori)
        <div class="col-md-2 mb-4">
            <div class="card text-center">
                <img class="card-img-top" src="{{('upload')}}/{{$kategori->gambar}}" alt="Card image cap" height="100">
                <div class="card-body">
                     <a href="{{--{{url ('kategori')}}/{{$kategori->kategori_id}}--}}" class="btn btn-primary">{{$kategori->nama}}</a> 
                </div>
                </div>
        </div>
        @endforeach
        <div class="col-md-12 mb-3 ">
            <h1 class="Produk text-center">Produk</h1>
            <p class="keterangan text-center">Produk Peternakan Terbaik</p>
        </div>
        @foreach ($products as $product)
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{('upload')}}/{{$product->gambar}}" alt="Card image cap" height="150">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->nama}}</h5>
                      <p class="card-text">Rp. {{$product->harga}}</p>
                      <a href="{{url ('detail')}}/{{$product->id}}" class="btn btn-primary btn-center" style="font-size: 10px" >Detail Produk</a>
                    </div>
                  </div>
            </div>
        @endforeach 
    </div>
</div>
@endsection
