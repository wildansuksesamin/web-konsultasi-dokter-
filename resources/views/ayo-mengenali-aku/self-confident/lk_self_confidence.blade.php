<div>
    <div class="space-y-4 rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
        <h1 class="text-2xl font-bold">Self Confident </h1>
        <p class="text-base">Self confidence atau kepercayaan diri merupakan kemampuan untuk
            percaya pada diri sendiri. Self confidence yang tinggi dapat
            meningkatkan kemampuan untuk membuat keputusan yang tepat,
            menghadapi tantangan dengan lebih baik, dan menghindari perilaku
            berisiko seperti penggunaan narkoba.
        </p>
    </div>

    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#self-confident-tab" role="tablist">

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="bagian-1-tab" data-tabs-target="#bagian-1" type="button" role="tab" aria-controls="bagian-1"
                aria-selected="true">Bagian 1</button>
        </li>

        {{-- studi 2 dan 3 --}}
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="bagian-2-tab" data-tabs-target="#bagian-2" type="button" role="tab" aria-controls="bagian-2"
                aria-selected="false">Bagian 2</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="bagian-3-tab" data-tabs-target="#bagian-3" type="button" role="tab" aria-controls="bagian-3"
                aria-selected="false">Bagian 3</button>
        </li>

        {{-- instrumen tes --}}
        
    </div>

    <div id="self-confident-tab">
        <div class="md:p-4 rounded-lg" id="bagian-1" role="tabpanel" aria-labelledby="bagian-1-tab">
            @include('ayo-mengenali-aku.self-confident.bagian_1')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="bagian-2" role="tabpanel" aria-labelledby="bagian-2-tab">
            @include('ayo-mengenali-aku.self-confident.bagian_2')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="bagian-3" role="tabpanel" aria-labelledby="bagian-3-tab">
            @include('ayo-mengenali-aku.self-confident.bagian_3')
        </div>

    </div>
</div>