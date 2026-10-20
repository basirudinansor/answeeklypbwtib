<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function tampilBerita()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all(),
        ]);
    }

    public function getBerita($slug)
    {
        $beritas = Berita::all();

        $beritatunggal = [];
        foreach($beritas  as $berita)
        {
            if($berita['slug'] === $slug)
            {
                $beritatunggal = $berita;
            }
        }

        return view('beritatunggal', [
            "title" => $beritatunggal['judul'],
            "berita" => $beritatunggal,
        ]);
    }
}

