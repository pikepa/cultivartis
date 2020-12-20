@props([
'label',
'for',
'error' => false,
'helpText' => false,
])

<div >
    <label for="{{ $for }}" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
        {{ $label }}
    </label>

    <div class="mt-1 sm:mt-0 sm:col-span-2">
        {{ $slot }}

        @if ($error)
        <div class="mt-1 text-sm text-red-500">{{ $error }}</div>
        @endif


        @if ($helpText)
        <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
        @endif
    </div>
</div>