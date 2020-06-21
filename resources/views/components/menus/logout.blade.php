<div>
    <button class="bg-yellow-600 hover:bg-yellow-500 text-gray-700 font-bold py-2 px-4 rounded-md">

        <a href="{{ route('logout') }}" class="text-gray-800 no-underline  text-gray-300 p-3" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    </button>
</div>