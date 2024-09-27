<div>
    @foreach ($emosis as $keyz => $emosi)
        @if ($emosi['nama_emosi'] == 'Amarah')
            <table class="table-auto overflow-auto w-full border-separate border-spacing-y-3 border-spacing-x-4">
                <tbody class="">
                    <tr>
                        <th>Jenis Emosi:</th>
                        <td>{{ $emosi['nama_emosi'] }}</td>
                    </tr>
                    <tr>
                        <th>Penjelasan:</th>
                        <td>{{ $emosi['penjelasan'] }}</td>
                    </tr>
                    <tr>
                        <th>Penyebab:</th>
                        <td>{{ $emosi['penyebab'] }}</td>
                    </tr>
                    <tr>
                        <th>Contoh:</th>
                        <td>{{ $emosi['contoh'] }}</td>
                    </tr>
                    <tr>
                        <th>Reaksi terhadap Amarah:</th>
                        <td>{{ $emosi['reaksi'] }}</td>
                    </tr>
                    <tr>
                        <th>Akibat Amarah</th>
                        <td>{{ $emosi['akibat'] }}</td>
                    </tr>
                    <tr>
                        <th>Pengelolaan Emosi</th>
                        <td>{{ $emosi['pengelolaan'] }}</td>
                    </tr>
                    <tr>
                        <th>Potensi Penggunaan Narkoba</th>
                        <td>{{ $emosi['potensi_penggunaan_narkoba'] }}</td>
                    </tr>
                    <tr>
                        <th>Studi Kasus</th>
                        {{-- {!! $html_data !!} --}}
                        <td class="indent-8">{!! $emosi['studi_kasus'] !!}</td>
                    </tr>
                </tbody>
            </table>

            <div class="my-4 -translate-x-8">
                <h1 class="font-semibold text-lg">Jawablah Soal Di bawah ini</h1>

                <form action="#" class="space-y-5">
                    @foreach ($emosi['pertanyaan'] as $key => $soal)
                        <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

                        @foreach ($soal['pilihan'] as $key2 => $pilihan)
                            <div class="flex items-center mt-3 rounded-md">
                                <input type="radio" id="{{ $key . '_' . $key2 }}" name="{{ $key }}"
                                    value="{{ $key2 }}"
                                    {{ isset($show_jawaban) && $soal['jawaban_user'] == $key2 ? 'checked' : '' }}>
                                <label for="{{ $key . '_' . $key2 }}" class="ml-2">
                                    {{ $key2 }}. {{ $pilihan }}
                                </label>
                            </div>
                        @endforeach
                    @endforeach

                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form>
            </div>
        @endif
    @endforeach
    {{-- <tr>
                <th>Jenis Emosi:</th>
                <td>Emosi Negatif</td>
            </tr>
            <tr>
                <th>Penjelasan:</th>
                <td>Amarah muncul sebagai respons terhadap terhalangnya tujuan atau aktivitas yang diinginkan</td>
            </tr>
            <tr>
                <th>Penyebab:</th>
                <td>Emosi ini bisa disebabkan oleh perasaan diperlakukan tidak adil, kegagalan mencapai sesuatu yang
                    direncanakan, atau penilaian situasi yang dianggap salah</td>
            </tr>
            <tr>
                <th>Contoh:</th>
                <td>Merasa ketidakadilan, gagal mencapai tujuan</td>
            </tr>
            <tr>
                <th>Reaksi terhadap Amarah:</th>
                <td>Tubuh menegang, menggertakkan gigi, mengepal tangan, wajah memerah, dan merasa akan meledak</td>
            </tr>
            <tr>
                <th>Akibat Amarah</th>
                <td>Bisa menyebabkan tidak
                    fokus, depresi, bahkan melukai orang lain
                </td>
            </tr>
            <tr>
                <th>Pengelolaan Emosi</th>
                <td>Menenangkan diri,
                    merenungi penyebab amarah, berusaha
                    berpikir positif, dan mencari solusi yang tepat,
                    serta hindari hal-hal yang bisa memicu
                    kemarahan</td>
            </tr> --}}

</div>
