<div>
    <table class="table-auto overflow-auto w-full border-separate border-spacing-y-3 border-spacing-x-4">
        <tbody class="">
            @foreach ($emosis as $key => $emosi)
                @if ($emosi['nama_emosi'] == 'Amarah')
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
        </tbody>
    </table>
</div>
