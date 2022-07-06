<x-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cognome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Città
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Numero di telefono
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->surname }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->city }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->phone }}
                    </td>
                    {{-- Tasto per editare l'utente selezionato --}}
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
