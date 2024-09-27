<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyoMengenaliAku extends Controller
{
    public function index()
    {
        $amarah =
            [
                'nama_emosi' => 'Amarah',
                'jenis_emosi' => 'Emosi Negatif',
                'penjelasan' => 'Amarah muncul sebagai respons terhadap terhalangnya tujuan atau aktivitas penting.',
                'penyebab' => 'Emosi ini bisa disebabkan oleh perasaan diperlakukan tidak adil, kegagalan mencapai sesuatu yang direncanakan, atau penilaian situasi yang dianggap salah.',
                'contoh' => 'Merasa ketidakadilan, gagal mencapai tujuan.',
                'reaksi' => 'Tubuh menegang, menggertakkan gigi, mengepal tangan, wajah memerah, dan merasa akan meledak.',
                'akibat' => 'Bisa menyebabkan tidak fokus, depresi, bahkan melukai orang lain.',
                'pengelolaan' => 'Menenangkan diri, merenungi penyebab amarah, berusaha berpikir positif, dan mencari solusi yang tepat, serta hindari hal-hal yang bisa memicu kemarahan.',
                'potensi_penggunaan_narkoba' => 'Penggunaan narkoba bisa menjadi pelarian dari amarah atau frustasi.',
                'studi_kasus' => [
                    'judul' => 'Studi Kasus Amarah (Anger)',
                    'kasus' => 'Ali adalah seorang siswa SMP yang sangat ambisius...',
                    'reaksi' => 'Karena rasa marahnya, Ali mulai menggertakkan giginya...',
                    'akibat' => 'Setelah kejadian ini, Ali tidak bisa fokus belajar...',
                    'pertanyaan' => [
                        '1. Bagaimana perasaan Ali terhadap hasil ujian yang diterimanya?',
                        '2. Apa reaksi fisik Ali saat merasa marah?',
                        '3. Bagaimana dampak amarah terhadap fokus belajar Ali?'
                    ],
                ],
            ];

        $emosis = [
            $amarah,
            [
                'nama_emosi' => 'Ketakutan',
                'jenis_emosi' => 'Emosi Negatif',
            ]
        ];
        return view('ayo-mengenali-aku.index', compact('emosis'));
    }
}
