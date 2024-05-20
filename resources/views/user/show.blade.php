<x-app-layout>
    <table class="w-full mt-5 text-sm text-left text-gray-500 ">
        <thead class="text-xs text-white uppercase bg-red-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    User name
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
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
                    {{ $user->nama_petugas }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->username }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->status }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->created_at }}
                </td>
                <td class="px-6 py-4 text-right">
                    {{ $user->updated_at }}
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>
