<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Product;
use SweetAlert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\DetailPesanan;
use App\Models\User;

class DetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $products = Product::where('id', $id)->first();

        return view('detail.index', compact('products'));
        
    }
    public function pesan(Request $request, $id)
    {
        $products = Product::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //simpan ke database pesanan
        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->total_harga = 0;
            $pesanan->kode_unik = mt_rand(100, 999);
            $pesanan->save();
        }

        //simpan pesanan ke detail_pesanan
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();


        //cek detail_pesanan
        $cek_detail_pesanan = DetailPesanan::where('product_id', $products->id)->where('pesanan_id',$pesanan_baru->id)->first();

        if(empty($cek_detail_pesanan))
        {
        $detail_pesanan = new DetailPesanan;
        $detail_pesanan->product_id = $products->id;
        $detail_pesanan->pesanan_id = $pesanan_baru->id;
        $detail_pesanan->jumlah_pesanan = $request->jumlah_pesan;
        $detail_pesanan->total_harga = $products->harga*$request->jumlah_pesan;
        $detail_pesanan->save();
        }else
        {
        $detail_pesanan = DetailPesanan::where('product_id', $products->id)->where('pesanan_id',$pesanan_baru->id)->first();

        $detail_pesanan->jumlah_pesanan = $detail_pesanan->jumlah_pesanan+$request->jumlah_pesan;
        //harga sekarang
        $harga_detail_pesanan_baru = $products->harga*$request->jumlah_pesan;
        $detail_pesanan->total_harga = $detail_pesanan->total_harga+$harga_detail_pesanan_baru;
        $detail_pesanan->update();
        }

        //jumlah_pesanan
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $harga_pesanan_baru = $products->harga*$request->jumlah_pesan;
        $pesanan->total_harga = $pesanan->total_harga+$harga_pesanan_baru;
        $pesanan->update();

        // $products = Product::where('id', $id)->first();

        // return view('detail.index', compact('products'));

        alert()->success('Pesanan Sukses Masuk Keranjang', 'Sukses');
        return redirect('/');
        
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $detail_pesanans = [];
        if(!empty($pesanan))
        {
        $detail_pesanans = DetailPesanan::where('pesanan_id', $pesanan->id)->get();
        }
        return view('detail.check_out', compact('pesanan', 'detail_pesanans'));
    }

    public function delete($id)
    {
        $detail_pesanan = DetailPesanan::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $detail_pesanan->pesanan_id)->first();
        $pesanan->total_harga = $pesanan->total_harga-$detail_pesanan->total_harga;
        $pesanan->update();

        $detail_pesanan->delete();

        alert()->error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $detail_pesanans = DetailPesanan::where('pesanan_id', $pesanan_id)->get();
        foreach ($detail_pesanans as $detail_pesanan) {
            $product = Product::where('id', $detail_pesanan->product_id)->first();
            $product->update();
        }


        alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }

}
