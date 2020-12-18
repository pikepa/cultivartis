    <div class="flex justify-center mx-auto mt-20">

        <div class="flex flex-col justify-center sm:flex-row">
            <div class="m-4">
                <x-image-sets.fr_book-image />
            </div>
            <div class="flex flex-col items-center -mt-12">

                <div class="">
                    <x-input.centered.text>
                        <p class="mb-2 text-5xl font-bold"> 'The Erlang Enigma'</p>
                        <x-menus.item routename='thebook'>Read More here</x-menus.item>

                    </x-input.centered.text>
                </div>

                <div class="w-10/12">
                    <livewire:register.emailcapture />
                </div>

            </div>
            <div class="m-4">
                <x-image-sets.bk_book-image />
            </div>
        </div>

    </div>