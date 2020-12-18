<div>
    <div class="text-2xl font-semibold text-center">
        <h1>Box Details</h1>
    </div>
    @if($addMode)
    <form wire:submit.prevent="store">
        @else
        <form wire:submit.prevent="update">
            @endif
            <div class="mt-6 space-y-4 sm:mt-5">

                <x-input.group label="Organisation" for="tenant_id" :error="$errors->first('tenant_id')" help-text="">
                    <select name="tenant_id" wire:model="tenant_id" class="p-2 bg-white border shadow">
                        @can('Super User')
                        <option value=''>Select a Tenant</option>
                        @endcan
                        @foreach($tenants as $tenant)
                        <option display value={{ $tenant->id }}>{{ $tenant->name }}</option>
                        @endforeach
                    </select>
                </x-input.group>

                <x-input.group label="Owner" for="owner_id" :error="$errors->first('owner_id')" help-text="">
                    <select name="owner_id" wire:model="owner_id" class="p-2 bg-white border shadow">
                        <option value=''>Choose an Owner</option>
                        @foreach($users as $owner)
                        <option value={{ $owner->id }}>{{ $owner->name }}</option>
                        @endforeach
                    </select>
                </x-input.group>

                <x-input.group label="Country" for="country" :error="$errors->first('country')" help-text="">
                    <select name="country" wire:model="country" class="p-2 bg-white border shadow">
                        <option value=''>Choose a country</option>
                        @foreach($countries as $country)
                        <option value={{ $country->id }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </x-input.group>

                <div class="mt-5">
                    <x-input.group label="City" for="city" :error="$errors->first('city')" help-text="">
                        <select name="city" wire:model="city" class="p-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value=''>Choose a city</option>
                            @foreach($cities as $city)
                            <option value={{ $city->id }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </x-input.group>
                </div>

                <x-input.group label="Box Name" for="box_name" :error="$errors->first('box_name')" help-text="Enter the Box's Full Name.">
                    <x-input.text wire:model="box_name" id="box_name" leading-add-on="" />
                </x-input.group>

                <x-input.group label="Status" for="status" :error="$errors->first('status')" help-text="You must select one option.">
                    <div class="flex pt-2">
                        <x-input.radio @click="open = true" wire:model=" status" value='Active' name="status">Active</x-input.radio>
                        <x-input.radio @click="open = false" wire:model="status" value='InActive' name="status">InActive</x-input.radio>
                    </div>
                </x-input.group>
                @if($addMode)
                <div class="flex justify-end">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button wire:click='cancel' type="button" class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                            Cancel
                        </button>
                    </span>
                    <span class="inline-flex ml-3 rounded-md shadow-sm">
                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                            Save new Box
                        </button>
                    </span>
                </div>
                @else
                <div class="flex justify-end">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button wire:click='cancel' type="button" class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                            Cancel
                        </button>
                    </span>
                    <span class="inline-flex ml-3 rounded-md shadow-sm">
                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                            Save
                        </button>
                    </span>
                </div>
                @endif

            </div>
        </form>
</div>