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


        $cemburu = [
            'nama_emosi' => 'Cemburu',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Cemburu (Jealousy) merupakan salah satu emosi negatif yang muncul ketika seseorang merasa ada ancaman terhadap hal penting yang dimilikinya, baik itu hubungan, perhatian, atau barang yang disukai.',
            'penyebab' => 'Cemburu sering kali berkaitan dengan perasaan bahwa seseorang atau sesuatu yang sangat berharga akan diambil oleh orang lain. Perasaan ini juga dapat dipicu oleh situasi di mana perhatian yang diinginkan tertuju pada orang lain, atau ketika seseorang merasa tidak setara dengan orang lain.',
            'ciri_ciri' => 'Berkaitan dengan rasa kurang percaya, posesif (perilaku ketika seseorang merasa menjadi pemilik atas sesuatu, baik benda maupun manusia), dan takut kehilangan.',
            'contoh' => 'Melihat teman mendapatkan barang mewah atau perhatian yang diinginkan, atau merasa bahwa orang tua lebih menyayangi saudara lain.',
            'reaksi' => 'Tubuh mungkin menegang, jantung berdetak cepat, sesak napas, atau muncul perasaan curiga dan terluka harga dirinya. Perilaku bisa menjadi defensif, waspada, atau mencoba mempertahankan hal yang menjadi sumber kecemburuan.',
            'pengelolaan' => 'Mengelola cemburu dapat dilakukan dengan belajar berbagi, menghargai apa yang sudah dimiliki, dan berhenti mengontrol orang lain.<br> Fokus pada diri sendiri, seperti mengembangkan keterampilan atau hobi, bisa membantu mengurangi intensitas emosi ini.',
            'potensi_penggunaan_narkoba' => 'Ada kemungkinan seseorang menggunakan narkoba sebagai pelarian dari perasaan cemburu atau rendah diri yang intens, terutama jika emosi ini tidak dikelola dengan baik. Emosi cemburu sering kali memengaruhi kualitas hubungan dan interaksi sosial.',
            'studi_kasus' => 'Sinta adalah seorang siswi yang rajin dan selalu mendapatkan nilai yang baik di kelas. Namun, suatu hari, dia merasa sangat cemburu ketika mengetahui bahwa temannya, Rina, mendapatkan nilai lebih tinggi darinya dalam ujian matematika. Sinta merasa bahwa ia sudah belajar keras dan tidak pantas kalah dari Rina. Selain itu, ia juga melihat Rina sering mendapatkan perhatian lebih dari teman-temannya karena sering dipuji oleh guru. Hal ini membuat Sinta merasa cemburu dan semakin tidak nyaman berada di dekat Rina. <br> Suatu hari, Sinta menghindari Rina dan mulai menyebarkan gosip bahwa Rina sebenarnya menyontek dalam ujian agar mendapatkan nilai tinggi. Teman-teman mulai percaya pada gosip tersebut, dan hubungan Sinta dan Rina menjadi semakin renggang.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama dari perasaan cemburu yang dirasakan oleh Sinta?',
                    'pilihan' => [
                        'a' => 'Rina mendapatkan perhatian lebih dari guru dan teman-teman',
                        'b' => 'Sinta merasa tidak belajar cukup keras',
                        'c' => 'Sinta merasa terancam oleh prestasi Rina yang lebih baik',
                        'd' => 'Rina menyontek dalam ujian',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana reaksi Sinta terhadap perasaan cemburunya?',
                    'pilihan' => [
                        'a' => 'Sinta mulai belajar lebih keras untuk mengalahkan Rina di ujian berikutnya',
                        'b' => 'Sinta menghindari Rina dan menyebarkan gosip tentangnya',
                        'c' => 'Sinta menerima kenyataan dan tetap bersahabat dengan Rina',
                        'd' => 'Sinta meminta bantuan kepada guru untuk meningkatkan nilainya',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apakah akibat dari reaksi Sinta terhadap perasaan cemburunya?',
                    'pilihan' => [
                        'a' => 'Hubungan antara Sinta dan Rina menjadi semakin renggang',
                        'b' => 'Hubungan antara Sinta dan Rina menjadi semakin dekat',
                        'c' => 'Sinta berhasil mendapatkan nilai yang lebih baik dari Rina',
                        'd' => 'Teman-teman mulai menjauhi Sinta karena gosipnya terbukti salah',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana Sinta seharusnya mengelola perasaan cemburunya dengan cara yang lebih positif?',
                    'pilihan' => [
                        'a' => 'Membandingkan dirinya lebih sering dengan Rina untuk mendapatkan motivasi',
                        'b' => 'Mencari cara untuk menjatuhkan Rina di depan teman-teman',
                        'c' => 'Fokus pada pengembangan diri dan mensyukuri apa yang telah ia capai',
                        'd' => 'Menyebarkan lebih banyak gosip untuk mendapatkan simpati teman-teman',
                    ]
                ]
            ]

        ];


        $emosis = [
            $amarah,
            $cemburu
        ];
        return view('ayo-mengenali-aku.index', compact('emosis'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $jawaban = $request->jawaban;

        // modif key $request->jawaban + 1
        $jawaban = array_combine(range(1, count($jawaban)), array_values($jawaban));

        // dd($jawaban);

        // jawaban benar untuk anger
        $jwb_anger = [
            '1' => 'a',
            '2' => 'c',
            '3' => 'c',
            '4' => 'b',
            '5' => 'd',
            '6' => 'b'
        ];
        $jwb_jealousy = [
            '1' => 'c',
            '2' => 'b',
            '3' => 'a',
            '4' => 'c'
        ];

        $score = 0;
        $message = '';
        if ($request->emosi == 'Amarah') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_anger[$key]) {
                    $score += 1;
                }
            }

            if ($score == 6) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_anger,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Cemburu') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_jealousy[$key]) {
                    $score += 1;
                }
            }

            if ($score == 4) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_jealousy,
                'score' => $score,
                'message' => $message
            ]);
        }
    }
}
