<x-layouts.base>

    <div class="h-screen bg-gray-50">

        <x-navbar />
        <div class="container mx-auto p-4">
            <x-notification />

            {{ $slot}}

        </div>

    </div>

</x-layouts.base>
