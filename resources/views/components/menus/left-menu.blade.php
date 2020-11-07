<div>

    <div class="px-4 mx-4 bg-white rounded-lg shadow border-rounded md:ml-0">

        <x-menus.group groupname='Home'>
            @guest
            <x-menus.item routename='welcome'>Welcome</x-menus.item>
            <x-menus.item routename='thebook'>The Book</x-menus.item>
            @endguest
            @auth
            <x-menus.item routename='home'>Admin Home</x-menus.item>
            @endauth
        </x-menus.group>

        <x-menus.group groupname='Welcome'>
            @guest
            <li class="hover:font-semibold"><a href="{{ url('login') }}"></i>Sign In</a></li>
            @endguest

            @auth
            {{auth()->user()->name}}<br>
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