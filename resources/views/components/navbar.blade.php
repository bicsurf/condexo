<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto" src="\img\logo.jpg" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto" src="\img\logo.jpg" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                            class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                            Home
                        </a>
                        {{-- Nel caso di un utente loggato --}}
                        @auth
                            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                Nome Utente:
                                {{ Auth::user()->name }}
                            </a>
                            {{-- Form di Logout --}}
                            <a href="{{ route('logout') }}"
                                class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page"
                                onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                                Logout
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout">
                                @csrf
                            </form>
                            {{-- End Form di Logout --}}
                        @endauth

                        {{-- Nel caso di un utente NON loggato --}}
                        @guest
                            <a href="{{ route('login') }}"
                                class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                Log-In
                            </a>
                            <a href="{{ route('register') }}"
                                class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                Registrati
                            </a>
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
