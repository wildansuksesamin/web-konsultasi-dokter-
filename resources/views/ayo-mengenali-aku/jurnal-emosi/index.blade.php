@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">
        <div class="space-y-8 p-3">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Daily Journal</h1>

                {{-- add journal --}}
                <a href="{{ route('jurnal-emosi.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Journal</a>

            </div>

            {{-- <!-- Journal Entries Table --> --}}
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="py-3 px-4 text-left">Date</th>
                            {{-- hari, kejadian, emosi, penyebab, respon, pengaruh, aksi (detail, hapus) --}}
                            <th class="py-3 px-4 text-left">kejadian</th>
                            <th class="py-3 px-4 text-left">Emosi</th>
                            <th class="py-3 px-4 text-left">Penyebab</th>
                            <th class="py-3 px-4 text-left">Respon</th>
                            <th class="py-3 px-4 text-left">Pengaruh</th>
                            <th class="py-3 px-4 text-left">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">2023-05-01</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Marah</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">
                                <a href="{{ route('jurnal-emosi.show', 1) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                <a href="{{ route('jurnal-emosi.edit', 1) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                <form action="{{ route('jurnal-emosi.destroy', 1) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">2023-05-01</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Marah</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">
                                <a href="{{ route('jurnal-emosi.show', 1) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                <a href="{{ route('jurnal-emosi.edit', 1) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                <form action="{{ route('jurnal-emosi.destroy', 1) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
