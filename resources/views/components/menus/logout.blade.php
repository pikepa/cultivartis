<div>
    <button class="bg-yellow-600 hover:bg-yellow-500 text-gray-700 font-bold py-2 px-4 rounded-md">
        <a href="{{ route('logout') }}" class="text-gray-800 no-underline  text-gray-300 p-3" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-gray-600">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
            </svg><span class="ml-2">Logout</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    </button>
</div>