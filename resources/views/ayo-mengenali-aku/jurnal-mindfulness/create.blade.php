@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">

        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 md:p-8 space-y-6">
            <h1 class="text-3xl font-bold text-center mb-6">Jurnal Mindfulness</h1>

            <div class="space-y-4">
                <div class="flex items-center">
                    <label for="date" class="w-32 font-semibold">Hari/Tanggal:</label>
                    <input type="date" id="date" class="flex-grow border rounded p-2">
                </div>

                <h2 class="text-xl font-semibold">1. Refleksi Harian</h2>

                <div class="space-y-4 pl-4">
                    <h3 class="font-semibold">a) Pagi</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu saat bangun tidur?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apakah kamu merasa siap untuk memulai hari?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu syukuri hari ini?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>

                    <h3 class="font-semibold">b) Siang</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu setelah setengah hari berlalu?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apakah kamu menghadapi situasi yang sulit?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu lakukan untuk tetap tenang dan fokus dalam menghadapinya?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>

                    <h3 class="font-semibold">c) Malam</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu saat hari berakhir?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu pelajari hari ini?
                            <input type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>
                </div>

                <h2 class="text-xl font-semibold">2. Praktik Mindfulness</h2>
                <div class="space-y-2 pl-4">
                    <label class="block">Berapa lama kamu berlatih mindfulness hari ini?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu sebelum latihan?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu selama latihan berlangsung?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu setelah latihan?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana pola pernapasanmu selama kegiatan mindfulness? (misalnya: tenang,
                        teratur, pendek, panjang, dan lain-lain)
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa saja sensasi fisik yang kamu rasakan selama kegiatan mindfulness? (misalnya:
                        rasa hangat, dingin, berat, ringan, dan lain-lain)
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa yang kamu dapatkan dari latihan mindfulness hari ini? (misalnya: merasa lebih
                        tenang, merasa lebih mengenal diri)
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                </div>

                <h2 class="text-xl font-semibold">3. Pengamatan</h2>
                <div class="space-y-2 pl-4">
                    <label class="block">Apakah kamu mempraktikkan materi mengamati sekitar hari ini?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa yang kamu perhatikan tentang pikiran dan emosimu hari ini?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana kamu merespons stres atau situasi sulit hari ini?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                </div>

                <h2 class="text-xl font-semibold">4. Rencana untuk Besok</h2>
                <div class="pl-4">
                    <label class="block">Apa yang ingin kamu capai dalam latihan mindfulness besok?
                        <input type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                </div>

                <div class="flex justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block">Simpan</button>
                </div>
            </div>
        </div>

    </div>
@endsection
