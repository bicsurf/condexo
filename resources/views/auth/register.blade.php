<x-layout>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- Parte iniziale del form --}}
            <div>
                <img class="mx-auto h-12 w-auto" src="\img\logo.jpg" alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
            </div>

            {{-- If di controllo di eventuali errori --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            {{-- End If di controllo di eventuali errori --}}


            {{-- FORM DI REGISTRAZIONE --}}
            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                {{-- Body form di Register --}}
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name"> Nome </label>
                        <input name="name" id="name" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci il tuo nome..." />
                    </div>
                    <div>
                        <label for="surname"> Cognome </label>
                        <input name="surname" id="surname" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci il tuo cognome...">
                    </div>
                    <div>
                        <label for="date"> Data di nascita </label>
                        <input name="date" id="date" type="date"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci la tua data di nascita...">
                    </div>
                    <div>
                        <label for="city"> Città </label>
                        <input name="city" id="city" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci la tua città...">
                    </div>
                    <div>
                        <label for="nation"> Stato </label>
                        <input name="nation" id="nation" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci la tua nazione...">
                    </div>
                    <div>
                        <label for="address"> Indirizzo </label>
                        <input name="address" id="address" type="text"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci il tuo indirizzo...">
                    </div>
                    <div>
                        <label for="postalCode"> CAP </label>
                        <input name="postalCode" id="postalCode" type="number"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci il codice di avviamento postale..." max="5">
                    </div>
                    <div>
                        <label for="phone"> Numero di telefono </label>
                        <input name="phone" id="phone" type="number"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci il tuo numero di telefono..." max="10">
                    </div>
                    <div>
                        <label for="email"> E-mail </label>
                        <input name="email" id="email" type="email"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci la tua e-mail...">
                    </div>
                    <div>
                        <label for="password"> Password </label>
                        <input name="password" id="password" type="password"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Inserisci una Password...">
                    </div>
                    <div>
                        <label for="password_confirmation"> Password Confirmation </label>
                        <input name="password_confirmation" id="password_confirmation" type="password"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Conferma la tua Password...">
                    </div>
                </div>
                {{-- End Body del form di Register --}}


                {{-- Button Register + Modale --}}
                <!-- Body della Modale -->
                <div id="modalRegister" class="relative z-10 hidden align-center justify-center" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                            <div
                                class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <div
                                                class="mx-auto flex-shrink-0 flex items-center justify-center rounded-full bg-yellow-400">
                                                <img src="\img\iconModalRegister.png" alt="icona festa modale register"
                                                    width="100">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                    id="modal-title">
                                                    Complimenti hai Registrato con successo un Utente!
                                                </h3>
                                            </div>
                                            {{-- <p class="mt-5 mx-auto flex items-center justify-center">Clicca sui bottoni
                                                per tornare alla pagina
                                                desiderata</p> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Buttoni della Modale --}}
                                {{-- <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="button"
                                        class="text-green-800 hover:text-white border border-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                        <a href="{{ route('login') }}">Login</a>
                                    </button>
                                    <button type="button"
                                        class="text-green-800 hover:text-white border border-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                        <a href="{{ route('home') }}">Homepage</a>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modale -->
                <div>
                    <button id="buttonRegister" type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Registrati
                    </button>
                </div>
                {{-- End Button Register --}}
            </form>
            {{-- END FORM DI REGISTRAZIONE --}}
        </div>
    </div>
</x-layout>
