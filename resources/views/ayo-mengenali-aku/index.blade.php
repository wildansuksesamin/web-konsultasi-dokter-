@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">

        <div class="md:p-4 rounded-2xl  lg:mx-auto mx-5 mt-5 ">

            <div class="mb-4 border-b border-gray-200  text-lg">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-lg dark:border-blue-500"
                            id="emotional-awareness-tab" data-tabs-target="#emotional-awareness" type="button"
                            role="tab" aria-controls="emotional-awareness" aria-selected="true">Emotional
                            Awareness</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="accurate-tab" data-tabs-target="#accurate" type="button" role="tab"
                            aria-controls="accurate" aria-selected="false">Accurate Self Assesment</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="self-confident-tab" data-tabs-target="#self-confident" type="button" role="tab"
                            aria-controls="self-confident" aria-selected="false">Self Confident</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="md:p-4 rounded-lg " id="emotional-awareness" role="tabpanel"
                    aria-labelledby="emotional-awareness-tab">
                    @include('ayo-mengenali-aku.emotional-awareness')
                </div>

                <div class="hidden md:p-4  rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
                    {{-- <h1 class=" text-xl">Penyebab TBC </h1>
                    <img src="img/3.jpg" class="float-left" width="400px" alt="">
                    <p class="text-base  text-gray-500 ">{!! get_meta_value('isi') !!} </p> --}}

                    @include('ayo-mengenali-aku.accurate-self-asses')

                </div>


                <div class="hidden md:p-4  rounded-lg " id="self-confident" role="tabpanel"
                    aria-labelledby="self-confident-tab">
                    @include('ayo-mengenali-aku.self-confident')
                </div>

            </div>

        </div>


    </div>
@endsection
