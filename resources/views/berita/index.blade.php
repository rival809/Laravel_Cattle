@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
            <div class="row justify-content-center">
                <div class="col-md-12 mb-3 ">
                    <img class="rounded mx-auto d-block" src="{{('image/Slider Berita.png')}}" alt="">
                </div>
                <div class="col-md-12 mb-3 ">
                    <h1 class="Produk text-center">Berita</h1>
                    <p class="keterangan text-center">Temukan Informasi Terbaru Seputar Peternakan</p>
                </div>

                @foreach ($beritas as $berita)
                <div class="row mb-4 justify-content-center">
                    <div class="card mb-6" style="max-width: 940px;" ">
                        <div class="row g-4">
                          <div class="col-md-4 ">
                            <img src="{{ url('image')}}/{{$berita->gambar}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ ($berita->judul_berita) }}</h5>
                              <a href="{{ url('berita')}}/{{$berita->id}}">Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection