<?php

namespace App\Http\Controllers;
use App\Models\JurnalEmosi as JurnalEmosiModels; 
use Illuminate\Http\Request;

class JurnalEmosi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = JurnalEmosiModels::where('user_id', auth()->user()->id)->orderBy("created_at","desc")->get();
        // dd($jurnal);
        return view('ayo-mengenali-aku.jurnal-emosi.index', compact('jurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ayo-mengenali-aku.jurnal-emosi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // dd($request->all());
        $simpan = JurnalEmosiModels::create($data);
        // if ($simpan) {
        //     dd("berhasil");

        // } else {
            // dd("gagal");
        // }
         return redirect()->route('jurnal-emosi.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
