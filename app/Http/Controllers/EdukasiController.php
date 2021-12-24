<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edukasi;

class EdukasiController extends Controller
{
    public function index()
    {
        $edukasis = Edukasi::paginate(8);

        return view('edukasi.index', compact('edukasis'));
        
    }

    public function detail($id)
    {
    	$edukasis = Edukasi::where('id', $id)->first();

     	return view('edukasi.detail', compact('edukasis'));
    }
}
