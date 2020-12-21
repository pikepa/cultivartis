<div>

    <div class="px-4 mx-4 rounded-lg shadow bg-yellow-50 border-rounded md:ml-0">

        <x-menus.group groupname='Home'>
            @guest
            <x-menus.item routename='welcome'>Home</x-menus.item>
            <x-menus.item routename='thebook'>The Book</x-menus.item>
            <x-menus.item routename='comingsoon'>Snippets</x-menus.item>
            <x-menus.item routename='podcasts'>Our Podcasts</x-menus.item>
            <x-menus.item routename='comingsoon'>Consulting</x-menus.item>
            @endguest
            @auth
            <x-menus.item routename='home'>Admin Home</x-menus.item>
            @endauth
        </x-menus.group>


        <x-menus.group groupname='Welcome'>
            @guest
            <li class="hover:font-semibold"><a href="{{ route('guestmessage') }}"></i>Contact Us</a></li>
            <li class="hover:font-semibold"><a href="{{ url('login') }}"></i>Sign In</a></li>
            @endguest

            @auth
            <li class='text-blue-700 border-b-2' >{{auth()->user()->name}}</li>
            <li class="hover:font-semibold"><a href="{{ route('guestmessage') }}"></i>Messages</a></li>
            <x-menus.item routename='password.request'>Reset Password</x-menus.item>
            <a href="{{ route('logout') }}" class="no-underline hover:font-semibold" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            @endauth

        </x-menus.group>
    </div>
</div>