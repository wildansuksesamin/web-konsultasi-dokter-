<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyoJauhiNarkoba extends Controller
{
    //
    public function index()
    {
        $soal_jawaban = [
            'soal_1' => [
                'pertanyaan' => 'Apa yang dimaksud dengan narkoba menurut Badan Narkotika Nasional (BNN)?',
                'pilihan' => [
                    'a' => 'Zat yang menyebabkan peningkatan kesadaran',
                    'b' => 'Zat yang dapat menyebabkan efek halusinasi dan menurunkan kesadaran',
                    'c' => 'Obat alami yang tidak berbahaya',
                    'd' => 'Zat buatan untuk pengobatan umum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_2' => [
                'pertanyaan' => 'Narkotika Golongan I termasuk dalam kelompok yang?',
                'pilihan' => [
                    'a' => 'Tidak memiliki potensi ketergantungan',
                    'b' => 'Sangat berbahaya dan tidak digunakan untuk pengobatan',
                    'c' => 'Berbahaya tetapi bisa digunakan untuk pengobatan',
                    'd' => 'Aman digunakan dalam terapi sehari-hari',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_3' => [
                'pertanyaan' => 'Apa perbedaan utama antara narkotika dan psikotropika?',
                'pilihan' => [
                    'a' => 'Narkotika menyebabkan efek halusinasi, sementara psikotropika menyebabkan euforia',
                    'b' => 'Narkotika digunakan untuk pengobatan, sedangkan psikotropika tidak',
                    'c' => 'Narkotika menyebabkan perubahan kesadaran, sementara psikotropika menyebabkan perubahan mental dan perilaku',
                    'd' => 'Tidak ada perbedaan, keduanya sama',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_4' => [
                'pertanyaan' => 'Faktor eksternal yang dapat mendorong remaja untuk menggunakan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan sosial atau masyarakat yang tidak peduli',
                    'b' => 'Kepribadian yang labil',
                    'c' => 'Keluarga yang tidak harmonis',
                    'd' => 'Masalah ekonomi keluarga',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_5' => [
                'pertanyaan' => 'Salah satu dampak fisik dari penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Menjadi lebih produktif',
                    'b' => 'Meningkatnya rasa percaya diri',
                    'c' => 'Hilangnya ketergantungan sosial',
                    'd' => 'Menurunnya fungsi reproduksi',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_6' => [
                'pertanyaan' => 'Tindakan pencegahan terhadap narkoba yang bersifat represif adalah?',
                'pilihan' => [
                    'a' => 'Penyuluhan dan pembinaan masyarakat',
                    'b' => 'Pelaporan dan penindakan hukum',
                    'c' => 'Penyembuhan melalui rehabilitasi',
                    'd' => 'Pencegahan sebelum terjadi penyalahgunaan',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_7' => [
                'pertanyaan' => 'Narkotika Golongan II dapat digunakan untuk pengobatan namun memiliki potensi menyebabkan?',
                'pilihan' => [
                    'a' => 'Gangguan mental',
                    'b' => 'Efek jangka pendek yang ringan',
                    'c' => 'Kecanduan yang kuat',
                    'd' => 'Peningkatan produktivitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_8' => [
                'pertanyaan' => 'Salah satu contoh psikotropika Golongan I yang hanya digunakan untuk ilmu pengetahuan dan tidak digunakan dalam terapi adalah?',
                'pilihan' => [
                    'a' => 'Deskloroketamin',
                    'b' => 'Alprazolam',
                    'c' => 'Diazepam',
                    'd' => 'Lorazepam',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_9' => [
                'pertanyaan' => 'Dampak psikologis dari penyalahgunaan narkoba dapat mencakup?',
                'pilihan' => [
                    'a' => 'Kecenderungan menyakiti diri sendiri',
                    'b' => 'Penurunan fungsi jantung',
                    'c' => 'Kenaikan berat badan',
                    'd' => 'Pemulihan cepat dari kecanduan',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_10' => [
                'pertanyaan' => 'Faktor internal yang membuat remaja lebih rentan terhadap penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan yang buruk',
                    'b' => 'Kepribadian yang tidak stabil',
                    'c' => 'Pengaruh kelompok pertemanan',
                    'd' => 'Kurangnya pengawasan dari aparat hukum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_11' => [
                'pertanyaan' => 'Upaya rehabilitatif bertujuan untuk?',
                'pilihan' => [
                    'a' => 'Mengobati para pecandu secara medis',
                    'b' => 'Menegakkan hukum terhadap pengedar narkoba',
                    'c' => 'Mencegah penyebaran narkoba melalui pembinaan masyarakat',
                    'd' => 'Membantu pecandu kembali ke masyarakat dengan kondisi yang sehat secara fisik dan mental',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_12' => [
                'pertanyaan' => 'Apa yang menjadi salah satu penyebab sosial yang dapat mendorong peningkatan penggunaan narkoba di kalangan remaja?',
                'pilihan' => [
                    'a' => 'Kurangnya kesempatan kerja',
                    'b' => 'Lingkungan sosial yang tidak peduli',
                    'c' => 'Keluarga yang mendukung',
                    'd' => 'Kehidupan yang stabil',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_13' => [
                'pertanyaan' => 'Narkotika Golongan III memiliki potensi ketergantungan yang?',
                'pilihan' => [
                    'a' => 'Ringan',
                    'b' => 'Tinggi',
                    'c' => 'Sangat kuat',
                    'd' => 'Tidak berbahaya',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_14' => [
                'pertanyaan' => 'Apa saja yang termasuk dalam dampak sosial dari penggunaan narkoba?',
                'pilihan' => [
                    'a' => 'Peningkatan kualitas hidup',
                    'b' => 'Pemulihan fisik yang cepat',
                    'c' => 'Gangguan mental dan perilaku anti-sosial',
                    'd' => 'Menjadi pemimpin di komunitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_15' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan I yang berpotensi menyebabkan ketergantungan tinggi adalah?',
                'pilihan' => [
                    'a' => 'Kodein',
                    'b' => 'Morfin',
                    'c' => 'Opium',
                    'd' => 'Buprenorfin',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_16' => [
                'pertanyaan' => 'Yang termasuk dalam psikotropika Golongan IV adalah?',
                'pilihan' => [
                    'a' => 'Metilfenidat',
                    'b' => 'Alprazolam',
                    'c' => 'Sekobarbital',
                    'd' => 'Deskloroketamin',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_17' => [
                'pertanyaan' => 'Salah satu cara pencegahan penyalahgunaan narkoba secara preventif adalah?',
                'pilihan' => [
                    'a' => 'Membangun tempat rehabilitasi',
                    'b' => 'Mengadakan penyuluhan bahaya narkoba kepada masyarakat',
                    'c' => 'Menindak pengedar narkoba melalui hukum',
                    'd' => 'Menyembuhkan pengguna narkoba secara medis',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_18' => [
                'pertanyaan' => 'Apa dampak jangka panjang penggunaan narkoba pada paru-paru?',
                'pilihan' => [
                    'a' => 'Kerusakan jaringan paru-paru',
                    'b' => 'Gangguan tidur',
                    'c' => 'Peningkatan imunitas',
                    'd' => 'Pemulihan cepat dari infeksi',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_19' => [
                'pertanyaan' => 'Psikotropika dapat menyebabkan perubahan pada?',
                'pilihan' => [
                    'a' => 'Struktur fisik tubuh',
                    'b' => 'Kecepatan metabolisme',
                    'c' => 'Keseimbangan hormon tubuh',
                    'd' => 'Fungsi mental dan emosional',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_20' => [
                'pertanyaan' => 'Dampak penyalahgunaan narkoba terhadap sistem saraf meliputi?',
                'pilihan' => [
                    'a' => 'Peningkatan kecerdasan',
                    'b' => 'Peningkatan energi',
                    'c' => 'Pemulihan dari rasa sakit',
                    'd' => 'Halusinasi dan kejang-kejang',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_21' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan II yang masih digunakan untuk pengobatan adalah?',
                'pilihan' => [
                    'a' => 'Heroin',
                    'b' => 'Dekstromoramid',
                    'c' => 'Etkatinon',
                    'd' => 'Ganja',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_22' => [
                'pertanyaan' => 'Keluarga yang tidak harmonis dapat memicu remaja untuk?',
                'pilihan' => [
                    'a' => 'Memilih teman yang baik',
                    'b' => 'Menghindari narkoba',
                    'c' => 'Mencari pelarian melalui narkoba',
                    'd' => 'Menjadi lebih mandiri',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_23' => [
                'pertanyaan' => 'Langkah represif dalam pencegahan narkoba melibatkan?',
                'pilihan' => [
                    'a' => 'Pelaporan dan tindakan hukum terhadap penyalahgunaan narkoba',
                    'b' => 'Rehabilitasi medis',
                    'c' => 'Pencegahan penggunaan narkoba melalui pendidikan',
                    'd' => 'Pengobatan terhadap pengguna narkoba',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_24' => [
                'pertanyaan' => 'Mengapa rehabilitasi penting setelah seseorang menjalani pengobatan narkoba?',
                'pilihan' => [
                    'a' => 'Untuk menindak pengedar narkoba',
                    'b' => 'Untuk mengembalikan fisik dan mental pengguna menjadi normal',
                    'c' => 'Untuk mengurangi efek kecanduan narkoba',
                    'd' => 'Untuk mencegah penyakit menular',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_25' => [
                'pertanyaan' => 'Narkoba dapat menyebabkan gangguan reproduksi yang meliputi?',
                'pilihan' => [
                    'a' => 'Penurunan fungsi hormon reproduksi dan gangguan fungsi seksual',
                    'b' => 'Peningkatan fungsi hormon',
                    'c' => 'Pemulihan cepat dari penyakit menular seksual',
                    'd' => 'Peningkatan kesuburan',
                ],
                'jawaban_benar' => 'a'
            ],
        ];

        return view('ayo-jauhi-narkoba.index', compact('soal_jawaban'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        // modif soal_jawaban, tambahkan key 'jawaban_user' dan 'benar' pada setiap soal

        $soal_jawaban = [
            'soal_1' => [
                'pertanyaan' => 'Apa yang dimaksud dengan narkoba menurut Badan Narkotika Nasional (BNN)?',
                'pilihan' => [
                    'a' => 'Zat yang menyebabkan peningkatan kesadaran',
                    'b' => 'Zat yang dapat menyebabkan efek halusinasi dan menurunkan kesadaran',
                    'c' => 'Obat alami yang tidak berbahaya',
                    'd' => 'Zat buatan untuk pengobatan umum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_2' => [
                'pertanyaan' => 'Narkotika Golongan I termasuk dalam kelompok yang?',
                'pilihan' => [
                    'a' => 'Tidak memiliki potensi ketergantungan',
                    'b' => 'Sangat berbahaya dan tidak digunakan untuk pengobatan',
                    'c' => 'Berbahaya tetapi bisa digunakan untuk pengobatan',
                    'd' => 'Aman digunakan dalam terapi sehari-hari',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_3' => [
                'pertanyaan' => 'Apa perbedaan utama antara narkotika dan psikotropika?',
                'pilihan' => [
                    'a' => 'Narkotika menyebabkan efek halusinasi, sementara psikotropika menyebabkan euforia',
                    'b' => 'Narkotika digunakan untuk pengobatan, sedangkan psikotropika tidak',
                    'c' => 'Narkotika menyebabkan perubahan kesadaran, sementara psikotropika menyebabkan perubahan mental dan perilaku',
                    'd' => 'Tidak ada perbedaan, keduanya sama',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_4' => [
                'pertanyaan' => 'Faktor eksternal yang dapat mendorong remaja untuk menggunakan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan sosial atau masyarakat yang tidak peduli',
                    'b' => 'Kepribadian yang labil',
                    'c' => 'Keluarga yang tidak harmonis',
                    'd' => 'Masalah ekonomi keluarga',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_5' => [
                'pertanyaan' => 'Salah satu dampak fisik dari penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Menjadi lebih produktif',
                    'b' => 'Meningkatnya rasa percaya diri',
                    'c' => 'Hilangnya ketergantungan sosial',
                    'd' => 'Menurunnya fungsi reproduksi',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_6' => [
                'pertanyaan' => 'Tindakan pencegahan terhadap narkoba yang bersifat represif adalah?',
                'pilihan' => [
                    'a' => 'Penyuluhan dan pembinaan masyarakat',
                    'b' => 'Pelaporan dan penindakan hukum',
                    'c' => 'Penyembuhan melalui rehabilitasi',
                    'd' => 'Pencegahan sebelum terjadi penyalahgunaan',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_7' => [
                'pertanyaan' => 'Narkotika Golongan II dapat digunakan untuk pengobatan namun memiliki potensi menyebabkan?',
                'pilihan' => [
                    'a' => 'Gangguan mental',
                    'b' => 'Efek jangka pendek yang ringan',
                    'c' => 'Kecanduan yang kuat',
                    'd' => 'Peningkatan produktivitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_8' => [
                'pertanyaan' => 'Salah satu contoh psikotropika Golongan I yang hanya digunakan untuk ilmu pengetahuan dan tidak digunakan dalam terapi adalah?',
                'pilihan' => [
                    'a' => 'Deskloroketamin',
                    'b' => 'Alprazolam',
                    'c' => 'Diazepam',
                    'd' => 'Lorazepam',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_9' => [
                'pertanyaan' => 'Dampak psikologis dari penyalahgunaan narkoba dapat mencakup?',
                'pilihan' => [
                    'a' => 'Kecenderungan menyakiti diri sendiri',
                    'b' => 'Penurunan fungsi jantung',
                    'c' => 'Kenaikan berat badan',
                    'd' => 'Pemulihan cepat dari kecanduan',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_10' => [
                'pertanyaan' => 'Faktor internal yang membuat remaja lebih rentan terhadap penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan yang buruk',
                    'b' => 'Kepribadian yang tidak stabil',
                    'c' => 'Pengaruh kelompok pertemanan',
                    'd' => 'Kurangnya pengawasan dari aparat hukum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_11' => [
                'pertanyaan' => 'Upaya rehabilitatif bertujuan untuk?',
                'pilihan' => [
                    'a' => 'Mengobati para pecandu secara medis',
                    'b' => 'Menegakkan hukum terhadap pengedar narkoba',
                    'c' => 'Mencegah penyebaran narkoba melalui pembinaan masyarakat',
                    'd' => 'Membantu pecandu kembali ke masyarakat dengan kondisi yang sehat secara fisik dan mental',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_12' => [
                'pertanyaan' => 'Apa yang menjadi salah satu penyebab sosial yang dapat mendorong peningkatan penggunaan narkoba di kalangan remaja?',
                'pilihan' => [
                    'a' => 'Kurangnya kesempatan kerja',
                    'b' => 'Lingkungan sosial yang tidak peduli',
                    'c' => 'Keluarga yang mendukung',
                    'd' => 'Kehidupan yang stabil',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_13' => [
                'pertanyaan' => 'Narkotika Golongan III memiliki potensi ketergantungan yang?',
                'pilihan' => [
                    'a' => 'Ringan',
                    'b' => 'Tinggi',
                    'c' => 'Sangat kuat',
                    'd' => 'Tidak berbahaya',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_14' => [
                'pertanyaan' => 'Apa saja yang termasuk dalam dampak sosial dari penggunaan narkoba?',
                'pilihan' => [
                    'a' => 'Peningkatan kualitas hidup',
                    'b' => 'Pemulihan fisik yang cepat',
                    'c' => 'Gangguan mental dan perilaku anti-sosial',
                    'd' => 'Menjadi pemimpin di komunitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_15' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan I yang berpotensi menyebabkan ketergantungan tinggi adalah?',
                'pilihan' => [
                    'a' => 'Kodein',
                    'b' => 'Morfin',
                    'c' => 'Opium',
                    'd' => 'Buprenorfin',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_16' => [
                'pertanyaan' => 'Yang termasuk dalam psikotropika Golongan IV adalah?',
                'pilihan' => [
                    'a' => 'Metilfenidat',
                    'b' => 'Alprazolam',
                    'c' => 'Sekobarbital',
                    'd' => 'Deskloroketamin',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_17' => [
                'pertanyaan' => 'Salah satu cara pencegahan penyalahgunaan narkoba secara preventif adalah?',
                'pilihan' => [
                    'a' => 'Membangun tempat rehabilitasi',
                    'b' => 'Mengadakan penyuluhan bahaya narkoba kepada masyarakat',
                    'c' => 'Menindak pengedar narkoba melalui hukum',
                    'd' => 'Menyembuhkan pengguna narkoba secara medis',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_18' => [
                'pertanyaan' => 'Apa dampak jangka panjang penggunaan narkoba pada paru-paru?',
                'pilihan' => [
                    'a' => 'Kerusakan jaringan paru-paru',
                    'b' => 'Gangguan tidur',
                    'c' => 'Peningkatan imunitas',
                    'd' => 'Pemulihan cepat dari infeksi',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_19' => [
                'pertanyaan' => 'Psikotropika dapat menyebabkan perubahan pada?',
                'pilihan' => [
                    'a' => 'Struktur fisik tubuh',
                    'b' => 'Kecepatan metabolisme',
                    'c' => 'Keseimbangan hormon tubuh',
                    'd' => 'Fungsi mental dan emosional',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_20' => [
                'pertanyaan' => 'Dampak penyalahgunaan narkoba terhadap sistem saraf meliputi?',
                'pilihan' => [
                    'a' => 'Peningkatan kecerdasan',
                    'b' => 'Peningkatan energi',
                    'c' => 'Pemulihan dari rasa sakit',
                    'd' => 'Halusinasi dan kejang-kejang',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_21' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan II yang masih digunakan untuk pengobatan adalah?',
                'pilihan' => [
                    'a' => 'Heroin',
                    'b' => 'Dekstromoramid',
                    'c' => 'Etkatinon',
                    'd' => 'Ganja',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_22' => [
                'pertanyaan' => 'Keluarga yang tidak harmonis dapat memicu remaja untuk?',
                'pilihan' => [
                    'a' => 'Memilih teman yang baik',
                    'b' => 'Menghindari narkoba',
                    'c' => 'Mencari pelarian melalui narkoba',
                    'd' => 'Menjadi lebih mandiri',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_23' => [
                'pertanyaan' => 'Langkah represif dalam pencegahan narkoba melibatkan?',
                'pilihan' => [
                    'a' => 'Pelaporan dan tindakan hukum terhadap penyalahgunaan narkoba',
                    'b' => 'Rehabilitasi medis',
                    'c' => 'Pencegahan penggunaan narkoba melalui pendidikan',
                    'd' => 'Pengobatan terhadap pengguna narkoba',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_24' => [
                'pertanyaan' => 'Mengapa rehabilitasi penting setelah seseorang menjalani pengobatan narkoba?',
                'pilihan' => [
                    'a' => 'Untuk menindak pengedar narkoba',
                    'b' => 'Untuk mengembalikan fisik dan mental pengguna menjadi normal',
                    'c' => 'Untuk mengurangi efek kecanduan narkoba',
                    'd' => 'Untuk mencegah penyakit menular',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_25' => [
                'pertanyaan' => 'Narkoba dapat menyebabkan gangguan reproduksi yang meliputi?',
                'pilihan' => [
                    'a' => 'Penurunan fungsi hormon reproduksi dan gangguan fungsi seksual',
                    'b' => 'Peningkatan fungsi hormon',
                    'c' => 'Pemulihan cepat dari penyakit menular seksual',
                    'd' => 'Peningkatan kesuburan',
                ],
                'jawaban_benar' => 'a'
            ],
        ];

        foreach ($soal_jawaban as $key => $value) {
            $soal_jawaban[$key]['jawaban_user'] = $request->input($key);
            $soal_jawaban[$key]['benar'] = $request->input($key) == $value['jawaban_benar'];
        }

        $show_jawaban = true;

        // dd($soal_jawaban);

        return view('ayo-jauhi-narkoba.index', compact('soal_jawaban', 'show_jawaban'));
    }
}
