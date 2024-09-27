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
                'studi_kasus' => 'Ali adalah seorang siswa SMP yang sangat ambisius dan selalu ingin mencapai nilai tinggi di sekolah. Suatu hari, saat mengikuti ujian matematika, ia merasa telah mempersiapkan diri dengan baik dan yakin akan mendapatkan nilai sempurna. Namun, ketika hasil ujian keluar, Ali mendapatkan nilai lebih rendah daripada harapannya karena ada beberapa soal yang salah ia jawab. Ali merasasangat kecewa dan marah pada dirinya sendiri serta menganggap bahwa soal-soal tersebut tidak adil. Dia merasa seharusnya mendapatkan nilai lebih tinggi dan menilai bahwa keadaan tersebut tidak seharusnya terjadi. <br> Karena rasa marahnya, Ali mulai menggertakkan giginya, mengepalkan tangan, dan merasakan wajahnya memerah. Ia merasa akan "meledak" dan mulai menyalahkan guru yang membuat soal serta merasa bahwa temantemannya tidak seharusnya mendapatkan nilai lebih baik darinya. Setelah kejadian ini, Ali tidak bisa fokus belajar selama beberapa hari  dan menjadi sangat sensitif terhadap komentar orang lain.',
                'pertanyaan' => [
                    'Apa penyebab utama kemarahan Ali dalam situasi ini?',
                    'pilihan' => [
                        
                    ]
                ]
            ];

        $emosis = [
            $amarah
        ];
        return view('ayo-mengenali-aku.index', compact('emosis'));
    }
}
