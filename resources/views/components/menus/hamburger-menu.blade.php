<div class="absolute inset-y-0 right-0 flex items-center ">
    <!-- Mobile menu button -->
    <button @click="open = true" class="inline-flex items-center justify-center p-2 rounded-md text-blue-darker hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
        <!-- Icon when menu is closed. -->
        <!-- Menu open: "hidden", Menu closed: "block" -->
        <svg class="block h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <!-- Icon when menu is open. -->
        <!-- Menu open: "block", Menu closed: "hidden" -->
        <svg class="hidden h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
