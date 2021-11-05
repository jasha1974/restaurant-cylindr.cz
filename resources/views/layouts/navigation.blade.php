<!-- header/navigation -->
<nav x-data="{ isOpen: false }" class="container mx-auto flex justify-between bg-gray-600 p-5 top-0 z-10">
    <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-white mb-2 md:mb-0">
        <img src="{{ URL::asset('images/logo.png') }}" width="280" alt="restaurant cylindr">
        {{--<span class="ml-3 text-xl">Restaurant Cylindr</span>--}}
    </a>

    <!-- left header section -->
    <div class="flex items-center justify-between">
        <button @click="isOpen = !isOpen" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="hidden space-x-6 lg:inline-block">
            <a href="{{ route('contact') }}" class="text-base text-white {{ (request()->is('contact')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Contact</a>
            @if(Auth::check())

                <a href="{{ route('dashboard') }}" class="text-base text-white {{ (request()->is('dashboard')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Dashboard</a>
                <a href="{{ route('logout') }}" class="text-base text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <span class="text-base text-gray-400">{{ Auth::user()->name }}</span>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            @else

                <a href="{{ route('login') }}" class="text-base text-white {{ (request()->is('login')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Login</a>


            @endif
        </div>

        <!-- mobile navbar -->
        <div class="mobile-navbar z-10">
            <!-- navbar wrapper -->
            <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                 @click.away=" isOpen = false">
                <div class="flex flex-col space-y-6">
                    <a href="{{ route('contact') }}" class="text-sm text-black {{ (request()->is('contact')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Contact</a>
                    @if(Auth::check())

                        <a href="{{ route('dashboard') }}" class="text-sm text-black {{ (request()->is('dashboard')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Dashboard</a>
                        <a href="{{ route('logout') }}" class="text-sm text-black" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else

                        <a href="{{ route('login') }}" class="text-sm text-black {{ (request()->is('login')) ? 'py-2 border-b-2 border-indigo-400' : '' }}">Login</a>

                    @endif
                </div>
            </div>
        </div>
        <!-- end mobile navbar -->
    </div>
    <!-- right header section -->

</nav>

