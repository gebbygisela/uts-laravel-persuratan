<x-app-layout>

    <table class="w-full mt-5 text-sm text-left text-gray-500 ">
        <thead class="text-xs text-white uppercase bg-red-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Head Kop
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat Kop
                </th>
                <th scope="col" class="px-6 py-3">
                    Tujuan
                </th>
                <th scope="col" class="px-6 py-3">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Updated At
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                <td class="px-6 py-4">
                    {{ $data->nama_kop }}
                </td>
                <td class="px-6 py-4">
                    {{ $data->alamat_kop }}
                </td>
                <td class="px-6 py-4">
                    {{ $data->nama_tujuan }}
                </td>
                <td class="px-6 py-4">
                    {{ $data->created_at }}
                </td>
                <td class="px-6 py-4 text-right">
                    {{ $data->updated_at }}
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
