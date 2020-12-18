<div class="p-6 mt-4 rounded bg-gray-50">
    <form wire:submit.prevent="register">
        <div>
            <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">First Name
            </label>
            <div class="mt-2">
                <input type=text wire:model="firstname" id="firstname" name="firstname" class="block w-full pl-3 rounded-md shadow-sm form-input sm:text-sm sm:leading-5" placeholder="Tom" />
                <div class="mt-2 text-red-600">
                    @error('firstname') <span>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div>
            <label for="familyname" class="block text-sm font-medium leading-5 text-gray-700">Family Name
            </label>
            <div class="mt-2 ">
                <div>
                    <input type=text wire:model="familyname" id="familyname" name="familyname" class="block w-full pl-3 rounded-md shadow-sm form-input sm:text-sm sm:leading-5" placeholder="Jones" />
                </div>
                <div class="mt-2 text-red-600">
                    @error('familyname') <span>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div>
            <label for="companyname" class="block text-sm font-medium leading-5 text-gray-700">Company Name
            </label>
            <div class="mt-1 ">
                <div>
                    <input type=text wire:model="companyname" id="companyname" name="companyname" class="block w-full pl-3 rounded-md shadow-sm form-input sm:text-sm sm:leading-5" placeholder="Acme Telscoms Co." />
                </div>
                <div class="mt-2 text-red-600">
                    @error('companyname') <span>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email
            </label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <div>
                    <input type=email wire:model="email" id="email" name="email" class="block w-full pl-3 rounded-md shadow-sm form-input sm:text-sm sm:leading-5" placeholder="you@example.com" />
                </div>
                <div class="mt-2 text-red-600">
                    @error('email') <span>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <label for="check" class="block text-sm font-medium leading-5 text-gray-700">Human Check
        </label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <input type=text wire:model="check" id="check" name="check" class="block w-full pl-3 rounded-md shadow-sm form-input sm:text-sm sm:leading-5" placeholder="Enter the 2nd word of the book name." />
            <div class="mt-2 text-red-600">
                @error('check') <span>{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mt-6">
            <span class="rounded-md shadow-sm ">
                <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 border border-transparent rounded-md bg-gold hover:bg-yellow-200 focus:outline-none focus:border-indigo-700">
                    Register your Interest
                </button>
            </span>
        </div>

    </form>

</div>