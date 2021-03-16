<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function proses(Request $request)
    {
        $name = $request->nama;
        $gambar = $request->file('gambar');
        $namaGambar = $gambar->getClientOriginalName();
        $gambar->storeAs('public/user', $namaGambar);
        return view(
            'form',
            [
                'name' => $name,
                'image' => $namaGambar
            ]
        );
    }
}
