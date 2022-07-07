<x-layout>
    {{-- Barra di ricerca contatto tra gli utenti registrati --}}
    <div class="flex justify-center mt-5">
        <div class="xl:w-96">
            <div class="input-group relative flex items-stretch w-full mb-4">
                <form action="{{ route('users.search') }}" method="get"></form>
                <input name="searched" type="search" id="search"
                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Search" aria-label="Search">
                <button
                    class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 text-center"
                    type="submit">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- End Barra di ricerca contatto --}}

    {{-- Body della tabella degli utenti registrati --}}
    <div class="min-h-full items-center justify-center px-4 sm:px-6 lg:px-8 overflow-x-auto sm:rounded-lg">
        <h1 class="italic font-bold text-center text-3xl mb-5">Lista Utenti registrati</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
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
                    <th scope="col" class="px-6 py-3 text-center">
                        Modifica/Rimuovi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
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
                        <td class="px-6 py-4 text-center">
                            <button
                                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-orange-200 via-orange-400 to-yellow-200 group-hover:from-orange-200 group-hover:via-orange-400 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-orange-100 dark:focus:ring-orange-400">
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Edit
                                </a>
                            </button>
                            <form method="POST" action="{{ route('users.delete', $user->id) }}">
                                @method('delete')
                                @csrf
                                <button
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-400 to-red-200 group-hover:from-red-200 group-hover:via-red-400 group-hover:to-red-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
                                    <a
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Rimuovi
                                    </a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <span>Non sono presenti utenti registrati</span>
                        </th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- End Body della tabella degli utenti registrati --}}
</x-layout>
