<div class="bg-white  p-2 space-y-8">
    @foreach ($self_conf as $lk)
        @if ($lk['nama'] === 'LK SELF CONFIDENT')
            <h1 class="text-3xl font-bold text-center "> {{ $lk['bagian_2']['nama'] }}
            </h1>

            <form class="space-y-6">
                <ol class="space-y-1 list-decimal list-inside">
                    @foreach ($lk['bagian_2'] as $item)
                        @isset($item['judul'])
                            <p class="text-center font-bold text-2xl">
                                {{ $item['judul'] }}
                            </p>
                        @endisset

                        @isset($item['pertanyaan'])
                            <li class="mt-4">
                                <label for="{{ $item['pertanyaan'] . 'bagian2' }}" class="text-sm font-medium  mb-2">
                                    {!! $item['pertanyaan'] !!}
                                </label>
                                <textarea id="{{ $item['pertanyaan'] . 'bagian2' }}" name="{{ $item['pertanyaan'] . 'bagian2' }}" rows="3"
                                    class="w-full px-3 py-2  border rounded-lg  " placeholder="Silakan dijawab"></textarea>
                            </li>
                        @endisset
                    @endforeach

                </ol>

                <button type="submit"
                    class="w-full text-white rounded-lg px-4 py-2 transition duration-300 ease-in-out bg-blue-700 hover:bg-blue-800">
                    Submit
                </button>
            </form>
        @endif
    @endforeach
</div>
