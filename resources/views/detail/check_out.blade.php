@extends('layouts.app')

<link href="{{ asset('css/costum.css') }}" rel="stylesheet">

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Keranjang</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($detail_pesanans as $detail_pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('upload') }}/{{ $detail_pesanan->product->gambar }}" width="100" alt="...">
                                </td>
                                <td>{{ $detail_pesanan->product->nama }}</td>
                                <td>{{ $detail_pesanan->jumlah_pesanan}} Kilogram</td>
                                <td align="left">Rp. {{ number_format($detail_pesanan->product->harga) }}</td>
                                <td align="left">Rp. {{ number_format($detail_pesanan->total_harga) }}</td>
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $detail_pesanan->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="fa fa-shopping-cart"></i> Check Out
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>  
        </div>
    </div>
    
</div>

@endsection
