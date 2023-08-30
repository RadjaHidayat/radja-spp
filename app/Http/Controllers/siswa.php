<?php

namespace App\Http\Controllers;

use App\Models\SppModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class siswa extends Controller
{
    public function index()
    {
        $pembayaran = SppModel::all();
        $data = [
            'title' => 'Spp | MyApp',
            'active' => 'Spp',
            'pembayaran' => $pembayaran
        ];
        return view('siswa.index', $data);
    }
   
}