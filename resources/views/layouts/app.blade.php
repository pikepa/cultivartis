<x-layouts.base>

    <div class="h-screen">

        <x-navbar />
        <div class="container p-4 mx-auto">
            <x-notification />

            {{ $slot}}

        </div>

    </div>

</x-layouts.base>
