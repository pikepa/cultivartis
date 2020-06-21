@props(['routename'])
<li class="list-none">
    <a href='{{route( $routename )}}' class="my-2  hover:font-bold no-underline">
        {{ $slot }}
    </a>
</li>