<?php

namespace App\Http\Controllers;


use App\Models\Angket;

use Illuminate\Http\Request;

class AngketController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'jawaban_angket' => 'required|string',
        ]);

        $angket = Angket::create($validatedData);

        return response()->json($angket, 201);
    }

    public function index()
    {
        return Angket::all();
    }
}