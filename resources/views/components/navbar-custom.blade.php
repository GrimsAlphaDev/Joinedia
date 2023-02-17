<nav-x class="w-full">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div class="flex justify-between px-5 py-1 items-center outline-1 outline-black border-2 w-full bg-white">
        {{-- Logo Brand --}}
        <div class="text-start">
            <a href="{{ url('/dashboard') }}">
                <img src="assets/image/Logo Joinedia Mix.png" alt="" class="w-36">
            </a>
        </div>
        {{-- Nav link --}}
        <div class="text-center flex justify-between w-1/4 font-bold">
            <p><a href="dashboard" class='{{ Request::is('dashboard') ? 'text-blue-500' : '' }}'>Home</a></p>
            <p><a href="event" class='{{ Request::is('event') ? 'text-blue-500' : '' }}'>Event</a></p>
            <p><a href="forum" class='{{ Request::is('forum') ? 'text-blue-500' : '' }}'>Forum</a></p>
            <p><a href="promotion" class='{{ Request::is('promotion') ? 'text-blue-500' : '' }}'>Promotion</a></p>
        </div>
        {{-- Button Sign Up/Login --}}
        <div class="text-end">
            @if (Route::has('login'))
                @auth

                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">Profile <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></button>

                    <!-- Dropdown menu -->
                    <div id="dropdownInformation"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{ Auth::user()->email }}</div>
                            <div class="font-medium truncate">{{ Auth::user()->name }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="profile"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            </li>

                        </ul>
                        <div class="py-2">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </form>
                        </div>
                    </div>
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('login') }}"
                            class="btn btn-primary bg-cyan-600 text-white pt-2 pb-2 pl-4 pr-4 rounded-lg">Log in</a>
                        <a href="{{ route('register') }}"
                            class="btn btn-primary bg-cyan-600 text-white pt-2 pb-2 pl-4 pr-4 rounded-lg">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav-x>
