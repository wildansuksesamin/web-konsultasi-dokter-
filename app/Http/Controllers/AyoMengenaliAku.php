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
                    '1' => [
                        'pertanyaan' =>  'Apa penyebab utama kemarahan Ali dalam situasi ini?',
                        'pilihan' => [
                            'a' => 'Ali merasa nilai yang didapatkan tidak sesuai dengan usahanya',
                            'b' => 'Ali tidak mempersiapkan ujian dengan baik',
                            'c' => 'Ali tidak menyukai mata pelajaran matematika',
                            'd' => 'Teman-temannya mendapatkan nilai lebih tinggi darinya',
                        ]
                    ],
                    '2' => [
                        'pertanyaan' => 'Apa reaksi fisik yang Ali rasakan ketika marah?',
                        'pilihan' => [
                            'a' => 'Dia merasa bahagia dan bersemangat',
                            'b' => 'Dia merasa tenang dan santai',
                            'c' => 'Dia menggertakkan gigi, mengepalkan tangan, dan wajahnya memerah',
                            'd' => 'Dia tertawa dan berbicara dengan lantang',
                        ]
                    ],
                    '3' => [
                        'pertanyaan' => 'Bagaimana Ali dapat mengelola kemarahannya dengan lebih baik?',
                        'pilihan' => [
                            'a' => 'Menyalahkan guru atas soal-soal yang sulit',
                            'b' => 'Melampiaskan kemarahannya pada teman-temannya',
                            'c' => 'Menenangkan diri dengan menarik napas dalam dan berbicara dengan orang lain tentang perasaannya',
                            'd' => 'Mengabaikan rasa marahnya dan terus menyalahkan dirinya sendiri',
                        ]
                    ],
                    '4' => [
                        'pertanyaan' => 'Apa dampak dari kemarahan Ali terhadap kinerjanya di sekolah?',
                        'pilihan' => [
                            'a' => 'Ia menjadi lebih fokus dan termotivasi untuk belajar',
                            'b' => 'Ia menjadi sulit berkonsentrasi dan sensitif terhadap komentar orang lain',
                            'c' => 'Ia semakin tertarik dengan matematika',
                            'd' => 'Ia menjadi lebih bersahabat dengan teman-temannya',
                        ]
                    ],
                    '5' => [
                        'pertanyaan' => 'Jika Ali tidak dapat mengelola kemarahannya dengan baik, bagaimana potensi penggunaan narkoba dapat menjadi pelarian bagi Ali?',
                        'pilihan' => [
                            'a' => 'Ali akan mencari dukungan dari teman-temannya',
                            'b' => 'Ali akan mulai mempelajari lebih banyak tentang narkoba sebagai solusi akademis',
                            'c' => 'Ali akan berhenti berusaha dan menyerah dalam belajar',
                            'd' => 'Ali mungkin mencari pelarian dari rasa frustrasi dan kemarahannya melalui penggunaan narkoba',
                        ]
                    ],
                    '6' => [
                        'pertanyaan' => 'Berikan saran mengenai cara yang dapat dilakukan Ali untuk meredakan rasa marahnya?',
                        'pilihan' => [
                            'a' => 'Menyalahkan orang lain atas masalah yang dihadapi',
                            'b' => 'Membicarakan perasaan dengan guru atau konselor, melakukan meditasi, atau menulis jurnal',
                            'c' => 'Menghindari semua interaksi dengan orang lain',
                            'd' => 'Membiarkan kemarahan mengendalikan keputusannya',
                        ]
                    ]

                ]
            ];

        $emosis = [
            $amarah
        ];
        return view('ayo-mengenali-aku.index', compact('emosis'));
    }
}
