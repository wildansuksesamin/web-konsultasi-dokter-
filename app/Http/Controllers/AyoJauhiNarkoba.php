<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyoJauhiNarkoba extends Controller
{
    //
    public function index()
    {
        return view('ayo-jauhi-narkoba.index');
    }

    public function jawabanMateri()
    {
        $jawaban = (object)[
            'soal_1' => 'a',
            'soal_2' => 'b',
            'soal_3' => 'c',
        ];
        return view('ayo-jauhi-narkoba.index', compact('jawaban'));
    }
}
