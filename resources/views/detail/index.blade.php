@extends('layouts.app')

<link href="{{ asset('css/costum.css') }}" rel="stylesheet">

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <iv class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('upload')}}/{{$products->gambar}}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                </div>
                                <div class="col-md-6 mt-5">
                                    <h2>{{ $products->nama }}</h2>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td>:</td>
                                                <td>Rp. {{ number_format($products->harga) }}</td>
                                            </tr>

                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>:</td>
                                                <td>{{ $products->deskripsi }}</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Kuantitas</td>
                                                <td>:</td>
                                                <td>
                                                    <form method="post" action="{{ url('detail') }}/{{ $products->id }}" >
                                                    @csrf
                                                        <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                        <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="ulasan-first">
                <img src="image/User Male.png" alt="" width="30px" ><p>Yanto - Pengirimannya cepat</p>
            </div><br>
            <div class="ulasan-second">
                <img src="image/Female User.png" alt="" width="30px"><p>Susan - Produknya berkualitas</p>
            </div><br>
            <div class="ulasan-third">
                <img src="image/Female User.png" alt="" width="30px"><p>Santi - Harganya standar</p>
            </div>
            </div>
    </div>
    
</div>

@endsection
