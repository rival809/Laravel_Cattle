@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{ url('edukasi') }}">Edukasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edukasi{{$edukasis->id}}</li>

                </ol>
            </nav>
            <div class="row justify-content-center">
                <div class="col-md-12 mb-3 ">
                    <img class="rounded mx-auto d-block" src="{{('image/Slider Berita.png')}}" alt="">
                </div>
                <div class="col-md-12 mb-3 ">
                    <h1 class="Produk text-center">{{($edukasis->judul_edu)}}</h1>
                </div>

                <div class="card border-success mb-3 ">
                    <img src="{{ url('image')}}/{{($edukasis->gambar)}}" class="card-img-top mt-2" style="max-width: 440px;" alt="...">
                    <div class="card-body">
                      <p class="card-text">{{($edukasis->isi_edu)}}</p>
                      <p class="card-text"><small class="text-muted">Last updated 7 mins ago</small></p>
                    </div>
                  </div>
{{-- 
                @foreach ($beritas as $berita)
                <div class="row mb-4 justify-content-center">
                    <div class="card mb-6" style="max-width: 540px;" href="{{url ('berita')}}/{{$berita->id}}">
                        <div class="row g-4">
                          <div class="col-md-4">
                            <img src="{{ url('image')}}/{{$berita->gambar}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ ($berita->judul_berita) }}</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection