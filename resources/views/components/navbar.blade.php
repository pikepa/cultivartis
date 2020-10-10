<div x-data="{ open: false }">
    <nav class=" w-full bg-gold shadow py-2">

        <div class="relative flex flex-row container mx-auto px-6 md:px-0">
            <x-menus.hamburger-menu />
            <div class="">
                <x-logo  />
            </div>
            <div class="font-muli text-blue-darker mx-auto flex flex-col justify-end items-center">
                <h1 class="font-bold text-3xl">CultivartiS</h1>
                <h4 class='font-medium text-lg uppercase text-center'> presents 'The Erlang Enigma'</h4>
            </div>
        </div>

    </nav>
    <div x-show="open" @click.away="open = false" class="relative container mx-auto">
        <div class="md:w-2/12  sm:z-10 mt-2  absolute inset-y-0 right-0 z-10 ; ">
            <x-menus.left-menu />
        </div>
    </div>
</div>
