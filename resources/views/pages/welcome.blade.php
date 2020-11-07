<x-layouts.app>

    <div class="flex items-center mx-auto mt-24">

        <div class="flex flex-col justify-center sm:flex-row">
            <div class="m-4">
                <x-image-sets.fr_book-image />
            </div>
            <div class="flex flex-col items-center -mt-24">

                <div class="">
                    <x-input.centered.text />
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

    {{--
    <div class="flex flex-row justify-center mt-10">
        <video width="70%" controls>
            <source src="{{URL::asset("/imgs/TEEV6.MP4")}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    </div>

    --}}

</x-layouts.app>