<x-app-layout>
    <div class="w-full max-w-md mx-auto p-4 pt-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('headmail.store') }}">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Add Head Mail</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_kop">Nama Kop</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nama_kop" type="text" placeholder="Masukan nama kop Anda .." name="nama_kop">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat_kop">Alamat Kop</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="alamat_kop" type="text" placeholder="Masukan alamat kop Anda .." name="alamat_kop">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_tujuan">Nama tujuan</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nama_tujuan" type="text" placeholder="Masukan nama tujuan Anda .." name="nama_tujuan">
            </div>
            <div class="mb-4">
                <select name="id_user">
                    @foreach ($users as $user )
                        <option value="{{ $user->id }}">{{ $user->nama_petugas }}</option>
                    @endforeach
                </select>
            </div>
          
            <button
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition-all ease-in-out duration-200"
                type="submit">Add Head Mail</button>
        </form>
    </div>
</x-app-layout>
