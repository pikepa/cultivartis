@props([
'for',
'type' => 'text'
])
<div>
    <label class="block pt-2">
        <input wire:model='name' id='{{$id}}' type="text" placeholder='{{ $placeholder}}' class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('name') <span class="mt-1 text-sm text-red-500"> {{ $message }}</span> @enderror
    </label>
</div>