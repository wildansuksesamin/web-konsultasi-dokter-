<div>
    <h1 class="text-3xl font-bold mb-6">Refleksi Diri</h1>
    <p class="mb-4">Setelah mengisi penilaian diri ini, renungkan hasilnya:</p>
    <form action="#" method="POST">
        @csrf
        <div class="mb-6">
            @foreach ($acc_self_as as $studi)
                @if ($studi['nama'] == 'refleksi diri')
                    @foreach ($studi['pertanyaan'] as $key => $soal)
                        <div class="space-y-4">

                            @if ($soal['judul'])
                                <h2 class="text-xl font-semibold mb-2 capitalize">
                                    {{ str_replace('_', ' ', $soal['judul']) }}
                                </h2>
                            @endif

                            @foreach ($soal['pertanyaan'] as $key => $item)
                                <div class="mb-3">
                                    <label class="block mb-1" for="{{ $soal['judul'] . $key }}">
                                        {{ $key . '). ' }} {!! $item !!}
                                    </label>
                                    <input type="text" id="{{ $soal['judul'] . $key }}"
                                        class="w-full border rounded p-2" name="{{ $soal['judul'] . $key }}">
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            @endforeach

            {{-- <div class="space-y-4">
                <div>
                    <label class="block mb-1" for="kelebihan-a">
                        a) Aspek apa yang menunjukkan bahwa Anda memiliki kelebihan atau kemampuan yang baik? (misal:
                        mengatasi stres)
                    </label>
                    <input type="text" id="kelebihan-a" class="w-full border rounded p-2" name="kelebihan-a">
                </div>
                <div>
                    <label class="block mb-1" for="kelebihan-b">
                        b) Bagaimana Anda dapat memanfaatkan kelebihan ini dalam kehidupan sehari-hari? (misal:
                        mempratikkan mindfulness meditasi)
                    </label>
                    <input type="text" id="kelebihan-b" class="w-full border rounded p-2" name="kelebihan-b">
                </div>
                <div>
                    <label class="block mb-1" for="kelebihan-c">
                        c) Bagaimana kelebihan Anda dapat membantu dalam menolak menggunakan narkoba? (misal: ketika
                        stres tidak menggunakan narkoba sebagai pelampiasan)
                    </label>
                    <input type="text" id="kelebihan-c" class="w-full border rounded p-2" name="kelebihan-b">
                </div>
            </div> --}}
        </div>

        <div class="flex">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>

    </form>
</div>
