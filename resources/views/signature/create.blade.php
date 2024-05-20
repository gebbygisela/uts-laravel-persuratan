<x-app-layout>
    <div class="w-full max-w-md mx-auto p-4 pt-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('signature.store') }}">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Add Signature</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_tandatangan">Signature</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nama_tandatangan" type="text" placeholder="Masukan Signature Anda .." name="nama_tandatangan">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jabatan">Jabatan</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="jabatan" type="text" placeholder="Masukan jabatan Anda .." name="jabatan">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nip">NIP</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nip" type="text" placeholder="Masukan nip Anda .." name="nip">
            </div>
            <button
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition-all ease-in-out duration-200"
                type="submit">Add Signature</button>
        </form>
    </div>
</x-app-layout>
