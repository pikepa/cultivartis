<div x-data="{ open: false }" x-cloak>
    <nav class="w-full py-2 shadow bg-gold ">

        <div class="container relative flex flex-row px-6 mx-auto md:px-0">
            <x-menus.hamburger-menu />
            <div class="">
                <x-menus.item routename='welcome'>
                    <x-logo />
                </x-menus.item>
            </div>
            <div class="flex flex-col items-center justify-end mx-auto font-muli text-blue-darker">
                <h1 class="text-3xl font-bold">CultivartiS</h1>
                <h4 class='text-lg font-medium text-center uppercase'> presents 'The Erlang Enigma'</h4>
            </div>
        </div>

    </nav>
    <div x-show="open" @click.away="open = false" class="container relative mx-auto">
        <div class="md:w-2/12  sm:z-10 mt-2  absolute inset-y-0 right-0 z-10 ; ">
            <x-menus.left-menu />
        </div>
    </div>
</div>