@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center ">
    <div>
        <H1 class="text-pink text-6xl my-8">Pippa's 40 on 28th May 2021!</H1>   
        </div>
    <div class="w-1/2">
        <x-input.centered.text />
    </div>
    <div class="w-1/2">
        <livewire:register.emailcapture />
    </div>
</div>
@endsection