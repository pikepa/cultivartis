<div class="mt-8">
    <form wire:submit.prevent="register">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email
        </label>
        <div class="relative mt-1 rounded-md shadow-sm">

            <div>
                <input wire:model="email" id="email" name="email" class="block w-full pl-10 form-input sm:text-sm sm:leading-5" placeholder="you@example.com" />

            </div>
            <div class="mt-2 text-red-600">
                @error('email') <span>{{ $message }}</span> @enderror
            </div>

        </div>
        <div class="mt-6">
            <span class="rounded-md shadow-sm ">
                <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 border border-transparent rounded-md bg-gold hover:bg-yellow-500 focus:outline-none focus:border-indigo-700">
                    Register your Interest
                </button>
            </span>
        </div>

    </form>

</div>