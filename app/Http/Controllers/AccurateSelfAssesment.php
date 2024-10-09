<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccurateSelfAssesment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refleksi = true;
        return view('ayo-mengenali-aku.accurate-self-assesment.refleksi-diri', compact('refleksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $jawaban = $request->jawaban;

        // modif key $request->jawaban + 1
        $jawaban = array_combine(range(1, count($jawaban)), array_values($jawaban));

        $score = 0;
        $message_lulus = "Selamat! Anda telah menjawab semua pertanyaan dengan benar.";
        $message_gagal = "Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.";
        $message = "";

        $jwb_stud_kas_1 = [
            '1' => 'd',
            '2' => 'a',
            '3' => 'c',
            '4' => 'b'
        ];

        $jwb_stud_kas_2 = [
            '1' => 'c',
            '2' => 'b',
            '3' => 'd',
            '4' => 'd'
        ];

        $jwb_stud_kas_3 = [
            // b d a c
            '1' => 'b',
            '2' => 'd',
            '3' => 'a',
            '4' => 'c'
        ];

        if ($request->studi_kasus == 1) {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_stud_kas_1[$key]) {
                    $score += 1;
                }
            }

            if ($score == 4) {
                $message = $message_lulus;
            } else {
                $message = $message_gagal;
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_stud_kas_1,
                'score' => $score,
                'message' => $message
            ]);
        } else  if ($request->studi_kasus == 2) {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_stud_kas_2[$key]) {
                    $score += 1;
                }
            }

            if ($score == 4) {
                $message = $message_lulus;
            } else {
                $message = $message_gagal;
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_stud_kas_2,
                'score' => $score,
                'message' => $message
            ]);
        } else  if ($request->studi_kasus == 3) {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_stud_kas_3[$key]) {
                    $score += 1;
                }
            }

            if ($score == 4) {
                $message = $message_lulus;
            } else {
                $message = $message_gagal;
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_stud_kas_3,
                'score' => $score,
                'message' => $message
            ]);
        }
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

    public function tesInstrumen(Request $request)
    {
        // dd('tes instrumen');
        // dd($request->all());
        // dd($request->data);
        $score = array_sum(array_map('intval', $request->data));
        $message = "";

        // if score 60 - 80, if 40 - 59, if 20 - 39, if < 20

        if ($score >= 60 && $score <= 80) {
            $message = "Anda memiliki tingkat Accurate Self-Assessment yang sangat baik. Anda mampu mengevaluasi kelebihan dan kekurangan Anda secara obyektif, terbuka terhadap kritik dan saran, dan secara aktif mengambil langkah-langkah untuk memperbaiki diri";
        } else if ($score >= 40 && $score <= 59) {
            $message = "Anda cukup baik dalam penilaian diri yang akurat, namun mungkin masih ada beberapa area di mana Anda bisa lebih proaktif dalam menerima kritik dan saran atau memperbaiki kekurangan diri";
        } else if ($score >= 20 && $score <= 39) {
            $message = "Anda mungkin perlu bekerja lebih keras dalam mengenali kelebihan, kekurangan, dan menggunakan kritik konstruktif atau membangun untuk pengembangan diri. Refleksi lebih lanjut dan tindakan perbaikan dapat membantu meningkatkan kemampuan Anda dalam penilaian diri";
        } else if ($score < 20) {
            $message = "Anda mungkin menghadapi kesulitan dalam menilai diri secara obyektif, mengenali kekurangan, atau menerima kritik. Mungkin ini saatnya untuk mempertimbangkan lebih banyak refleksi diri dan keterbukaan terhadap masukan dari orang lain.";
        }

        // session(['refleksi' => true]);

        // delete session
        // session()->forget('refleksi');

        return response()->json([
            'score' => $score,
            'message' => $message
        ]);
    }
}
