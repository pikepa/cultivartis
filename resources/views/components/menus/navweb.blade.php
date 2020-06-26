<nav class="bg-pink shadow mb-8 py-6 ">
    <div class=" container mx-auto px-6 md:px-0">
        <div class="flex flex-row items-center justify-between">
            <div class=" mr-6">
                <a href="{{ url('/') }}" class="text-gray-800 text-2xl font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="flex flex-row space-x-6">
                <x-menus.item routename='comingsoon'>About Hamilton Island</x-menus.item>
                <x-menus.item routename='comingsoon'>Places to stay</x-menus.item>
                <x-menus.item routename='comingsoon'>How to get there</x-menus.item>
                <x-menus.item routename='comingsoon'>Contact Us</x-menus.item>
            </div>

            <div class=" text-right">
                @guest
                <x-menus.login />
                @else
                <div  class="flex flex-row items-center space-x-2">
                    <span class="text-gray-800  pr-4">{{ Auth::user()->name }}</span>
                    <x-menus.avatarmenu />

                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>