<x-app-layout>
    <div class="w-full px-4 py-5 bg-white shadow-md rounded-lg">
        <a href="{{ route('headmail.create') }}" class="px-4 py-3 text-white bg-red-500 hover:bg-red-600 transition duration-200 rounded-lg">Add Mail Header</a>
        <table class="w-full mt-5 text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-red-500">
                <tr>
                    <th scope="col" class="px-6 py-3">Head Kop</th>
                    <th scope="col" class="px-6 py-3">Alamat Kop</th>
                    <th scope="col" class="px-6 py-3 text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $data->nama_kop }}</td>
                        <td class="px-6 py-4">{{ $data->alamat_kop }}</td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-4">
                                <a href="{{ route('headmail.show',$data) }}" class="text-blue-600 hover:underline">Show</a>
                                <a href="{{ route('headmail.edit',$data->id) }}" class="text-green-600 hover:underline">Edit</a>
                                <form action="{{ route('headmail.destroy',$data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
