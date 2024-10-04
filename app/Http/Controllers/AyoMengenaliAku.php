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

        $cinta = [
            'nama_emosi' => 'Cinta',
            'jenis_emosi' => 'Emosi Positif',
            'penjelasan' => 'Cinta (Love) merupakan salah satu emosi positif yang menggambarkan perasaan keterikatan, kasih sayang, dan kepedulian yang kuat terhadap seseorang atau sesuatu. Emosi ini bisa diarahkan kepada orang terdekat, seperti keluarga dan teman, maupun aktivitas atau hobi yang disukai. Cinta menghasilkan perasaan bahagia, nyaman, dan damai. Ketika merasakan cinta, seseorang biasanya lebih bersemangat, optimis, dan merasa aman.',
            'penyebab' => 'Perasaan cinta bisa berasal dari rasa dihargai, dibutuhkan atau membutuhkan orang lain. Cinta juga bisa muncul karena adanya ketertarikan terhadap kepribadian baik seseorang atau keterlibatan dalam kegiatan yang menyenangkan.',
            'reaksi' => 'Biasanya ditandai dengan meningkatnya rasa percaya diri, kebahagiaan, keinginan untuk menghabiskan waktu bersama, dan sering kali diekspresikan dengan senyuman. Emosi cinta cenderung membuat seseorang fokus pada sisi positif dari hal-hal atau orang yang mereka cintai.',
            'dampak' => 'Meningkatnya rasa percaya diri dan optimisme. Selain itu, cinta juga mendorong seseorang untuk menjaga dan melindungi hal-hal yang mereka cintai, tanpa terobsesi berlebihan.',
            'pengelolaan' => 'Menjaga keseimbangan dalam hubungan atau aktivitas yang dicintai, menghargai momen bersama, dan tidak terlalu terikat secara obsesif pada orang atau hal-hal yang dicintai.',
            'potensi_penggunaan_narkoba' => 'Cinta sebagai emosi positif tidak memiliki potensi langsung menyebabkan penggunaan narkoba, melainkan bisa menjadi motivasi untuk menjaga kesejahteraan pribadi dan orang-orang di sekitar.',
            'studi_kasus' => 'Rina adalah seorang remaja yang sangat mencintai dunia musik. Sejak kecil, ia sudah terbiasa mendengarkan berbagai jenis musik dan belajar memainkan gitar. Musik menjadi pelarian bagi Rina ketika ia merasa sedih, stres, atau bosan. Bermain gitar dan menciptakan lagu-lagu sederhana membuatnya merasa tenang dan bahagia. Setiap kali ia pulang dari sekolah, hal pertama yang ia lakukan adalah mengambil gitarnya dan mulai memainkan lagu favoritnya. Cinta Rina terhadap musik bahkan membuatnya bergabung dengan sebuah band di sekolahnya, dan ia sangat menikmati setiap kesempatan untuk tampil di depan teman-temannya. Suatu hari, ibunya meminta Rina untuk mengurangi waktu yang dihabiskan bermain gitar dan lebih fokus pada tugas sekolahnya, karena nilainya mulai menurun. Rina merasa terjebak di antara cintanya terhadap musik dan kewajibannya untuk belajar lebih keras. Ia merasa bahwa bermain musik adalah bagian penting dari dirinya dan sulit baginya untuk mengurangi waktu yang ia habiskan dengan gitarnya. Ia mulai merasa frustrasi karena tidak dapat menyeimbangkan hobinya dan tanggung jawabnya sebagai siswa.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama dilema yang dialami Rina dalam situasi ini?',
                    'pilihan' => [
                        'a' => 'Rina ingin bergabung dengan band yang lebih besar',
                        'b' => 'Nilai Rina menurun akibat terlalu banyak bermain musik',
                        'c' => 'Rina tidak memiliki cukup waktu untuk berlatih gitar',
                        'd' => 'Teman-teman Rina tidak mendukung hobinya',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana perasaan cinta Rina terhadap musik mempengaruhi kehidupannya secara keseluruhan?',
                    'pilihan' => [
                        'a' => 'Musik membuat Rina merasa tenang dan bahagia',
                        'b' => 'Musik membuat Rina mudah marah dan kecewa',
                        'c' => 'Musik membuat Rina lebih fokus pada tugas sekolah',
                        'd' => 'Musik tidak memiliki dampak pada kehidupan Rina',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari hobi Rina terhadap kinerjanya di sekolah?',
                    'pilihan' => [
                        'a' => 'Rina mendapat nilai yang lebih tinggi',
                        'b' => 'Rina mengabaikan band sekolahnya',
                        'c' => 'Rina mengalami penurunan nilai karena lebih banyak bermain gitar',
                        'd' => 'Rina menjadi lebih populer di sekolah',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Rina tidak dapat menemukan keseimbangan antara hobinya dan kewajibannya, bagaimana ini dapat memengaruhi kesehatannya secara emosional dan akademik?',
                    'pilihan' => [
                        'a' => 'Rina mungkin akan merasa lebih stres dan tertekan',
                        'b' => 'Rina akan menjadi lebih sukses secara akademik',
                        'c' => 'Rina akan berhenti bermain musik sepenuhnya',
                        'd' => 'Rina akan memiliki lebih banyak waktu untuk bersosialisasi',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Berikan saran mengenai cara-cara yang dapat dilakukan Rina untuk tetap mencintai musiknya tanpa mengorbankan tanggung jawabnya di sekolah?',
                    'pilihan' => [
                        'a' => 'Rina dapat meninggalkan musik agar fokus pada sekolah',
                        'b' => 'Rina dapat membuat jadwal yang seimbang antara bermain musik dan belajar',
                        'c' => 'Rina dapat meminta teman-temannya untuk menggantikan tugas sekolahnya',
                        'd' => 'Rina harus berhenti dari band sekolah',
                    ]
                ]
            ]
        ];

        $iri = [
            'nama_emosi' => 'Iri',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Perasaan iri muncul ketika seseorang menginginkan apa yang dimiliki oleh orang lain, seperti kekayaan, prestasi, atau penampilan. Emosi ini sering muncul karena perbandingan diri sendiri dengan orang lain yang memiliki kelebihan tertentu',
            'penyebab' => '- Merasa hidup tidak adil dan tidak dihargai <br> - Membandingkan diri dengan orang lain yang dianggap lebih sukses, beruntung, atau memiliki sesuatu yang diinginkan (misalnya, materi, prestasi, atau pengakuan)',
            'contoh' => '- Merasa iri ketika melihat teman selalu mendapatkan nilai tertinggi di kelas <br> - Iri pada teman yang lebih populer dan memiliki banyak teman di sekolah',
            'reaksi' => '- Iri sering memicu perasaan marah, frustrasi, rendah diri, atau bahkan kebencian terhadap orang yang menjadi target iri <br> -  Bisa mengarah pada tindakan negatif seperti merendahkan orang lain, bersikap dingin, atau mencari cara untuk menyaingi mereka',
            'dampak' => '- Terlalu fokus pada pencapaian orang lain <br> - Tidak dapat melihat apa yang telah dimiliki <br> - Merusak hubungan sosial dan memicu konflik antar individu <br> - Menyebabkan stres, kecemasan, dan penurunan harga diri yang berlebihan',
            'pengelolaan' => '- Bersyukur dengan apa yang dimiliki <br> - Berusaha berpikir positif <br> - Fokus pada diri sendiri dan mengembangkan potensi yang dimiliki <br> - Menjauh dari lingkungan yang toxic',
            'potensi_penggunaan_narkoba' => 'Menggunakan narkoba sebagai pelarian dari perasaan iri atau ketidakpuasan terhadap diri sendiri',
            'studi_kasus' => 'Budi adalah seorang siswa yang rajin dan selalu berusaha keras dalam belajar. Namun, ia merasa kecewa karena meskipun sudah berusaha sebaik mungkin, nilainya masih belum memuaskan. Di sisi lain, teman sekelasnya, Doni, tampaknya selalu mendapatkan nilai yang tinggi tanpa perlu usaha yang terlalu keras. Budi mulai merasa iri terhadap Doni. Ia merasa bahwa tidak adil bahwa Doni bisa mendapatkan nilai yang lebih baik dengan usaha yang lebih sedikit. Setiap kali Doni mendapatkan pujian dari guru atau teman-temannya karena prestasinya, Budi merasa kesal dan semakin tidak puas dengan dirinya sendiri. <br> Perasaan iri ini mulai mempengaruhi hubungan Budi dengan Doni. Budi mulai menjauhi Doni, enggan berbicara dengannya, dan bahkan merasa senang jika Doni melakukan kesalahan kecil. Perasaan ini membuat Budi sulit untuk fokus pada tugastugas sekolahnya, dan ia mulai meragukan kemampuan dirinya sendiri.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama rasa iri yang dialami oleh Budi?',
                    'pilihan' => [
                        'a' => 'Budi merasa bahwa Doni tidak berhak mendapatkan pujian',
                        'b' => 'Budi merasa bahwa usahanya tidak dihargai sebanding dengan hasilnya',
                        'c' => 'Doni sering merendahkan Budi di depan teman-temannya',
                        'd' => 'Budi iri karena Doni sering bermain video game',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana perasaan iri Budi mempengaruhi hubungannya dengan Doni?',
                    'pilihan' => [
                        'a' => 'Budi menjadi lebih dekat dengan Doni',
                        'b' => 'Budi mulai menjauhi dan enggan berbicara dengan Doni',
                        'c' => ' Budi berusaha membantu Doni agar lebih sukses',
                        'd' => 'Budi mengabaikan perasaan irinya dan tetap bersahabat dengan Doni',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari perasaan iri Budi terhadap kinerjanya di sekolah?',
                    'pilihan' => [
                        'a' => ' Budi menjadi lebih fokus dan termotivasi untuk belajar',
                        'b' => 'Budi semakin sulit fokus pada tugastugas sekolahnya',
                        'c' => 'Budi meraih prestasi yang lebih tinggi daripada sebelumnya',
                        'd' => 'Budi mulai mengerjakan tugas bersama dengan Doni',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Budi tidak dapat mengelola rasa irinya, bagaimana ini dapat mempengaruhi kesehatan emosionalnya?',
                    'pilihan' => [
                        'a' => 'Budi mungkin akan merasa lebih stres dan cemas',
                        'b' => 'Budi akan menjadi lebih percaya diri dan optimis',
                        'c' => 'Budi akan merasa lebih damai dan tenang',
                        'd' => 'Budi akan mengembangkan hubungan yang lebih baik dengan Doni ',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Berikan saran mengenai cara-cara yang dapat dilakukan Budi untuk mengatasi rasa irinya dan tetap fokus pada pengembangan dirinya?',
                    'pilihan' => [
                        'a' => 'Budi dapat berhenti belajar dan menyerah pada situasinya',
                        'b' => 'Budi dapat terus membandingkan dirinya dengan Doni untuk meningkatkan motivasinya',
                        'c' => 'Budi harus menghindari Doni dan teman-temannya agar tidak merasa iri lagi',
                        'd' => 'Budi dapat membicarakan perasaannya dengan Doni dan mencoba memahami perjuangan Doni',
                    ]
                ]
            ]
        ];

        $happiness = [
            'nama_emosi' => 'Kebahagiaan',
            'jenis_emosi' => 'Emosi Positif',
            'penjelasan' => 'Kebahagiaan (Happiness) adalah salah satu jenis emosi positif yang muncul ketika seseorang merasa senang, tenang, dan puas terhadap sesuatu hal atau seseorang. Emosi ini sering terjadi saat seseorang menerima kejutan yang menyenangkan, mendapatkan hasil yang diinginkan setelah berusaha keras, atau mendapatkan kasih sayang dari orang-orang di sekitar mereka.',
            'penyebab' => "- Mendapatkan hasil yang memuaskan dari usaha atau kerja keras, - Menerima kejutan yang luar biasa, - Mendapatkan kasih sayang dan perhatian",
            'reaksi' => "- Wajah cerah dan tersenyum, - Merasa tenang dan damai, - Berbicara dengan nada positif dan penuh antusiasme",
            'dampak' => "- Meningkatkan rasa percaya diri dan optimisme, - Meningkatkan kesejahteraan fisik dan mental, - Membuat seseorang lebih terbuka dan ramah terhadap orang lain",
            'pengelolaan' => "- Bersyukur kepada Tuhan atas segala hal yang membuat bahagia, - Menghargai dan menyadari bahwa kebahagiaan mungkin tidak selalu bertahan selamanya, dan itu adalah hal yang wajar, - Berbagi kebahagiaan dengan orang lain, misalnya melalui tindakan kebaikan atau sedekah",
            'potensi_penggunaan_narkoba' => 'Tidak ada potensi penggunaan narkoba langsung dari emosi ini, karena kebahagiaan cenderung membawa seseorang pada tindakan positif.',
            'studi_kasus' => 'Siti adalah seorang siswa yang sangat menyukai seni melukis. Setiap kali ia meluangkan waktu untuk melukis, ia merasa tenang dan bahagia. Suatu hari, sekolahnya mengadakan lomba melukis antar kelas, dan Siti dengan penuh semangat ikut berpartisipasi. Setelah berhari-hari bekerja keras menyempurnakan lukisannya, akhirnya ia memenangkan juara pertama dalam lomba tersebut. Kemenangan ini membuat Siti sangat bahagia. Ia merasa dihargai atas hasil karyanya dan bangga bisa membuktikan kemampuan dirinya. Tidak hanya itu, teman-temannya juga memberikan ucapan selamat dan guru seni mengapresiasi kerja kerasnya. Perasaan bahagia Siti membuatnya semakin percaya diri. Ia mulai merencanakan untuk terus mengembangkan bakat melukisnya dan bahkan berpikir untuk berpartisipasi dalam kompetisi-kompetisi melukis yang lebih besar di masa mendatang. Kebahagiaan yang ia rasakan juga membuatnya lebih terbuka dengan teman-temannya, dan ia merasa lebih termotivasi untuk berprestasi di bidang lain.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama kebahagiaan yang dirasakan oleh Siti?',
                    'pilihan' => [
                        'a' => 'Siti memenangkan lomba melukis antar kelas di sekolahnya',
                        'b' => 'Siti mendapat pujian dari teman-teman dan gurunya',
                        'c' => 'Siti merasa tenang setiap kali melukis',
                        'd' => 'Siti bisa meluangkan waktu untuk hobinya',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana kebahagiaan memengaruhi sikap Siti setelah memenangkan lomba?',
                    'pilihan' => [
                        'a' => 'Siti menjadi lebih percaya diri dan bersemangat untuk melukis',
                        'b' => 'Siti berhenti melukis karena merasa sudah mencapai puncak kariernya',
                        'c' => 'Siti mulai meremehkan prestasi teman-temannya yang lain',
                        'd' => 'Siti mengabaikan saran gurunya dan menjadi sombong',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak kebahagiaan yang dirasakan Siti terhadap hubungan sosialnya?',
                    'pilihan' => [
                        'a' => 'Siti menjadi lebih tertutup terhadap teman-temannya',
                        'b' => 'Siti merasa tidak perlu lagi menjalin hubungan dengan teman-teman',
                        'c' => 'Siti menjadi lebih terbuka dan ramah terhadap teman-temannya',
                        'd' => 'Siti mulai bersikap tidak peduli dengan lingkungan sekitarnya',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Siti terus merasakan kebahagiaan dan motivasi ini, apa yang mungkin terjadi pada masa depannya?',
                    'pilihan' => [
                        'a' => 'Siti mungkin akan kehilangan minat pada melukis',
                        'b' => 'Siti mungkin akan meraih lebih banyak prestasi dalam seni dan bidang lainnya',
                        'c' => 'Siti mungkin akan menjadi lebih malas untuk berprestasi',
                        'd' => 'Siti mungkin akan berhenti mencoba hal-hal baru karena terlalu puas dengan keberhasilannya',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Apa saran yang dapat diberikan kepada Siti agar ia dapat terus merasakan kebahagiaan dalam mengejar hobinya?',
                    'pilihan' => [
                        'a' => 'Siti harus berhenti melukis untuk mencari hobi baru',
                        'b' => 'Siti harus mulai membandingkan karyanya dengan orang lain untuk melihat sejauh mana ia bisa bersaing',
                        'c' => 'Siti harus mengabaikan pujian dan berusaha sendirian',
                        'd' => 'Siti dapat terus mengikuti kompetisi dan mencari tantangan baru dalam melukis',
                    ]
                ]
            ]
        ];


        $emosis = [
            $amarah,
            $cemburu,
            $cinta,
            $iri,
            $happiness
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

        $jwb_love = [
            '1' => 'b',
            '2' => 'a',
            '3' => 'c',
            '4' => 'a',
            '5' => 'b'
        ];

        $jwb_envy = [
            '1' => 'b',
            '2' => 'b',
            '3' => 'b',
            '4' => 'a',
            '5' => 'd'
        ];

        $jwb_happiness = [
            '1' => 'a',
            '2' => 'a',
            '3' => 'c',
            '4' => 'b',
            '5' => 'd'
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
        } else if ($request->emosi == 'Cinta') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_love[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_love,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Iri') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_envy[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_envy,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Kebahagiaan') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_happiness[$key]) {
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
                'jawaban_benar' => $jwb_happiness,
                'score' => $score,
                'message' => $message
            ]);
        }
    }
}
