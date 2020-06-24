   <div class="font-sans card bg-grey-light mx-4 mt-2 md:ml-0 ">
       <x-menus.group groupname='Home'>
           {{$showme}}

           <li><button wire:click="setcontacts">Contacts</button></li>
           <button wire:click="setcontacts" class="btn btn-xs btn-warning">Edit</button>
           <li><button wire:click="setusers">Users</button></li>
           <li><button wire:click="setusers">Messages</button></li>
       </x-menus.group>

       @auth
       <x-menus.group groupname='Admin'>
           <ul>
               <x-menus.item routename='dashboard'>Dashboard</x-menus.item>
           </ul>
           <a href="{{ route('logout') }}" class="hover:font-semibold no-underline" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
               {{ csrf_field() }}
           </form>
       </x-menus.group>
       @endauth
   </div>