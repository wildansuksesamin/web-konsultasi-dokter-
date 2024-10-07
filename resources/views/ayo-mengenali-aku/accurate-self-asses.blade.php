<div>
    <div class="space-y-4 rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
        <h1 class="text-2xl font-bold">Accurate Self Assesment </h1>
        <p class="text-base   ">Penilaian diri yang akurat adalah kemampuan untuk memahami
            kelebihan dan kekurangan pada diri sendiri. Penilaian diri yang akurat
            mencakup mengenali bagaimana perilaku, tindakan, dan emosi diri
            sendiri mempengaruhi orang lain, serta mengakui kebutuhan untuk
            pengembangan diri dan perbaikan.
        </p>
    </div>

    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#myTabContent" role="tablist">

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="studi-1-tab" data-tabs-target="#studi-1" type="button" role="tab" aria-controls="studi-1"
                aria-selected="true">Studi Kasus 1</button>
        </li>

        {{-- studi 2 dan 3 --}}
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-2-tab" data-tabs-target="#studi-2" type="button" role="tab" aria-controls="studi-2"
                aria-selected="false">Studi Kasus 2</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-3-tab" data-tabs-target="#studi-3" type="button" role="tab" aria-controls="studi-3"
                aria-selected="false">Studi Kasus 3</button>
        </li>
    </div>

    <div id="myTabContent">
        <div class="p-4 rounded-lg" id="studi-1" role="tabpanel" aria-labelledby="studi-1-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_1')
        </div>

        <div class="hidden p-4 rounded-lg" id="studi-2" role="tabpanel" aria-labelledby="studi-2-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_2')
        </div>

        <div class="hidden p-4 rounded-lg" id="studi-3" role="tabpanel" aria-labelledby="studi-3-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_3')
        </div>

    </div>
</div>
