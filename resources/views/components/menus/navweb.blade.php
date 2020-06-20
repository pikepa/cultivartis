<nav class="bg-gold shadow mb-8 py-6">
    <div class="container mx-auto px-6 md:px-0">
        <div class="flex items-center justify-center">
            <div class=" mr-6">
                <a href="{{ url('/') }}" class="text-gray-800 text-2xl font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1 text-right">
                @guest
                <button class="bg-yellow-600 hover:bg-yellow-500 text-gray-700 font-bold py-2 px-4 rounded-md">
                    <a class=" no-underline p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                </button>
                {{-- @if (Route::has('register'))
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif --}}
                @else
                <span class="text-gray-800  pr-4">{{ Auth::user()->name }}</span>

                <a href="{{ route('logout') }}" class="text-gray-800 no-underline hover:underline text-gray-300 p-3" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
                @endguest
            </div>
        </div>
    </div>
</nav>