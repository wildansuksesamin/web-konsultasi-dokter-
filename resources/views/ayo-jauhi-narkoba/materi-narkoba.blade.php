{{-- VIDEO CONTAINER --}}
<div class="lg:aspect-w-16 lg:aspect-h-9">
    <iframe src="https://www.youtube.com/embed/JsawJcfR6R0?si=ocDnfVpOnM1jfxRC" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
{{-- END VIDEO CONTAINER --}}

<h1 class="text-xl mt-9">Soal Narkoba</h1>

<form action="" method="" class="space-y-5">
    @csrf
    <div class="soal">
        <p class="text-base  text-gray-500 mt-5">1. Apa yang dimaksud dengan narkoba?</p>
        {{-- multiple option a b c d --}}
        <div class="flex items-center mt-3 bg-green-400">
            <input type="radio" id="1-a" name="soal-1" value="a">
            <label for="1-a" class="ml-2">A. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="1-b" name="soal-1" value="b">
            <label for="1-b" class="ml-2">B. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="1-c" name="soal-1" value="c">
            <label for="1-c" class="ml-2">C. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>

    </div>

    <div class="soal">
        <p class="text-base  text-gray-500 mt-5">2.
            Mengapa narkoba sangat berbahaya bagi kesehatan tubuh?</p>

        {{-- multiple option a b c d --}}
        <div class="flex items-center mt-3">
            <input type="radio" id="2-a" name="soal-2" value="a">
            <label for="2-a" class="ml-2">
                A. Karena narkoba dapat merusak organ tubuh, seperti hati, ginjal, dan otak
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="2-b" name="soal-2" value="b">
            <label for="2-b" class="ml-2">
                B. Karena narkoba dapat menyebabkan ketergantungan dan merusak organ tubuh
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="2-c" name="soal-2" value="c">
            <label for="2-c" class="ml-2">
                C. Karena narkoba dapat menyebabkan ketergantungan dan merusak organ tubuh
            </label>
        </div>
    </div>

    <div class="soal">
        <p class="text-base  text-gray-500 mt-5">
            Sebutkan Jenis-jenis narkoba yang ada di Indonesia
        </p>

        {{-- multiple option a b c d --}}
        <div class="flex items-center mt-3">
            <input type="radio" id="3-a" name="soal-3" value="a">
            <label for="3-a" class="ml-2">
                A. Jenis narkoba yang ada di Indonesia adalah ganja, sabu-sabu, ekstasi, dan heroin
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="3-b" name="soal-3" value="b">
            <label for="3-b" class="ml-2">
                B. Jenis narkoba yang ada di Indonesia adalah Happydent
            </label>
        </div>
        <div class="flex items-center mt-3">
            <input type="radio" id="3-c" name="soal-3" value="c">
            <label for="3-c" class="ml-2">
                C. Jenis narkoba yang ada di indonesia adalah seblak
            </label>
        </div>
    </div>

    {{-- button --}}
    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>


</form>
