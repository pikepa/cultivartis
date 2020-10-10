<div>

    <div class=" bg-white rounded-lg shadow px-4 mx-4  md:ml-0 ">

        <x-menus.group groupname='Home'>
            <x-menus.item routename='welcome'>Welcome</x-menus.item>
            <x-menus.item routename='home'>Admin Home</x-menus.item>
        </x-menus.group>

        <x-menus.group groupname='Welcome'>
            @guest
            <li class="hover:font-semibold"><a href="{{ url('login') }}"></i>Select Box</a></li>
            <li class="hover:font-semibold"><a href="{{ url('login') }}"></i>Sign In</a></li>
            @endguest

            @auth
            {{auth()->user()->name}}<br>
            <x-menus.item routename='password.request'>Reset Password</x-menus.item>
            <a href="{{ route('logout') }}" class="hover:font-semibold no-underline" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            @endauth

        </x-menus.group>
    </div>
</div>
