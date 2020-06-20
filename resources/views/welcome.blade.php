@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center ">
    <div>
        <img src='./imgs/logo4.svg' width="500" alt="logo"></img>
    </div>
    <div class="w-1/2">
        <x-input.centered.text />
    </div>
    <div class="w-1/2">
        <livewire:register.emailcapture />
    </div>
</div>
@endsection