<x-layouts.app>
    <div class="flex items-center">
        <div class="w-full">

            @if (session('status'))
            <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-gray-200">
                    Admin Dashboard
                </div>

                <div class="w-full p-6">
                    {{-- This is where your content goes --}}
                    <svg class="w-6 h-6 text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>

</x-layouts.app>