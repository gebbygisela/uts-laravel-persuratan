<x-app-layout>
    <table class="w-full mt-5 text-sm text-left text-gray-500 ">
        <thead class="text-xs text-white uppercase bg-red-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Signature
                </th>
                <th scope="col" class="px-6 py-3">
                    Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nip
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
                    {{ $signature->nama_tandatangan }}
                </td>
                <td class="px-6 py-4">
                    {{ $signature->jabatan }}
                </td>
                <td class="px-6 py-4">
                    {{ $signature->nip }}
                </td>
                <td class="px-6 py-4">
                    {{ $signature->created_at }}
                </td>
                <td class="px-6 py-4 text-right">
                    {{ $signature->updated_at }}
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
