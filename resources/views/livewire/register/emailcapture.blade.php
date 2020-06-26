<div class="mt-8">
    <form wire:submit.prevent="register">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">

            <div>
                <input wire:model="email" id="email" name="email" class="form-input block w-full pl-10 sm:text-sm sm:leading-5" placeholder="you@example.com" />

            </div>
            <div class="mt-2 text-red-600">
                @error('email') <span>{{ $message }}</span> @enderror
            </div>

        </div>
        <div class="mt-6">
            <span class=" rounded-md shadow-sm">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent 
                text-sm font-medium rounded-md  bg-pink hover:bg-purple-700 text-gray-700 focus:outline-none focus:border-indigo-700">
                    Register
                </button>
            </span>
        </div>

    </form>

</div>