<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::paginate(8);

        return view('berita.index', compact('beritas'));
        
    }

    public function detail($id)
    {
    	$beritas = Berita::where('id', $id)->first();

     	return view('berita.detail', compact('beritas'));
    }
}
