<nav class="bg-gold shadow mb-8 py-6 ">
    <div class=" container mx-auto px-6 md:px-0">
    <div class="flex flex-row items-center justify-between">
        <div class=" mr-6">
            <a href="{{ url('/') }}" class="text-gray-800 text-2xl font-semibold text-gray-100 no-underline">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="flex flex-row space-x-6">
            <x-menus.item routename='welcome'>Home</x-menus.item>
            <x-menus.item routename='welcome'>Articles</x-menus.item>
            <x-menus.item routename='welcome'>Contact Us</x-menus.item>
        </div>

        <div class=" text-right">
            @guest
            <x-menus.login />
            {{-- @if (Route::has('register'))
                    <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif --}}
            @else
            <div class="flex flex-row items-center">
                <span class="text-gray-800  pr-4">{{ Auth::user()->name }}</span>
                <x-menus.logout />
            </div>


            @endguest
        </div>
    </div>
    </div>
</nav>