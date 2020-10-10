<x-layouts.app>
    <div class="flex flex-row justify-center">
        <div class="m-4">
            <x-image-sets.book-image />
        </div>
        <div class="flex flex-col items-center ">

            <div class="">
                <x-input.centered.text />
            </div>

            <div class="w-10/12">
                <livewire:register.emailcapture />
            </div>

        </div>



    </div>

    <div class="flex flex-row justify-center">
        <video width="70%"  controls>
            <source src="{{URL::asset("/imgs/TEEV6.MP4")}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

</x-layouts.app>