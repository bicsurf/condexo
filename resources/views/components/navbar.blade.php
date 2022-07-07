<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-14 w-auto" src="\img\logo.jpg">
                    <img class="hidden lg:block h-14 w-auto" src="\img\logo.jpg">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            <a href="{{ route('home') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">
                                Home
                            </a>
                        </button>

                        {{-- Nel caso di un utente loggato --}}
                        @auth
                            <button type="button"
                                class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                <p>Nome Utente:</p>
                                <a href="#" class="text-white underline px-3 py-2 rounded-md text-sm font-medium"
                                    aria-current="page">
                                    {{ Auth::user()->name }}
                                </a>
                            </button>
                            {{-- Form di Logout --}}
                            <button type="button"
                                class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                <a href="{{ route('logout') }}"
                                    class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page"
                                    onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                                    Logout
                                </a>
                                <form action="{{ route('logout') }}" method="POST" id="form-logout">
                                    @csrf
                                </form>
                            </button>
                            {{-- End Form di Logout --}}
                        @endauth

                        {{-- Nel caso di un utente NON loggato --}}
                        @guest
                            <button type="button"
                                class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium"
                                    aria-current="page">
                                    Log-In
                                </a>
                            </button>
                            <button type="button"
                                class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                <a href="{{ route('register') }}"
                                    class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                    Registrati
                                </a>
                            </button>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}"
                class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
                Home
            </a>
            <a href="{{ route('login') }}"
                class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
                Log-In
            </a>
            <a href="{{ route('register') }}"
                class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
                Registrati
            </a>
        </div>
    </div>
</nav>
