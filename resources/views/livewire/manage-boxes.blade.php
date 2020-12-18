    <div>
        @if($updateMode)
        <x-layouts.card>
            <x-boxes.box_update :tenants=$tenants :users=$users :cities=$cities :countries=$countries :addMode=$addMode />
        </x-layouts.card>
        @else
        <div class="flex flex-col ">
            <div>
                <h1 class="mb-2 text-2xl font-semibold text-center">Box Listing</h1>
            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    @can('Super User')
                                    <x-tables.th label="Tenant" />
                                    @endcan
                                    <x-tables.th label="Box Name" />
                                    <x-tables.th label="City" />
                                    <x-tables.th label="Owner" />
                                    <x-tables.th label="Status" />
                                    <x-tables.th_center label="Members" />

                                    <th class="bg-gray-50">
                                        @can('box.manage')
                                        @if($showBoxes)
                                        <button wire:click="changeMode" class="py-4 text-2xl font-medium leading-5 text-center text-indigo-600 whitespace-no-wrap hover:pointer hover:text-indigo-900">+</button>
                                        @endif
                                        @endcan
                                        @if($showsessions || $showmembers)
                                        <button wire:click="hideboxsess" wire:click="hidemembers" class="ml-4 text-sm font-medium leading-5 text-center text-indigo-600 whitespace-no-wrap hover:pointer hover:text-indigo-900">
                                            <svg class="w-4 h-4 font-medium text-indigo-600 hover:text-indigo-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                            </svg>
                                        </button>
                                        @endif
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach($boxes as $box)
                                <tr>
                                    @can('Super User')
                                    <x-tables.td>{{$box->tenant->name}}</x-tables.td>
                                    @endcan
                                    <x-tables.td>{{$box->box_name}}</x-tables.td>
                                    <x-tables.td>{{$box->city->name}}</x-tables.td>
                                    <x-tables.td>{{$box->owner->name}}</x-tables.td>
                                    <x-tables.td>{{$box->status}}</x-tables.td>
                                    <x-tables.td_center>{{$box->members->count()}} </x-tables.td_center>

                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-center whitespace-no-wrap">
                                        @can('session.manage')
                                        <button wire:click="edit({{ $box->id }})" class="mr-4 text-indigo-600 hover:text-indigo-900">Edit</button>
                                        @endcan
                                        @can('box.delete')
                                        <button wire:click="delete({{ $box->id }})" class="mr-4 text-indigo-600 hover:text-indigo-900">Delete</button>
                                        @endcan
                                        @can('session.manage')
                                        <button wire:click="showboxsess({{ $box->id }})" class="mr-4 text-indigo-600 hover:text-indigo-900">Sessions</button>
                                        @endcan
                                        @can('members.manage')
                                        <button wire:click="showmembership({{ $box->id }})" class="mr-4 text-indigo-600 hover:text-indigo-900">Members</button>
                                        @endcan
                                    </td>

                                </tr>
                                @endforeach
                                <!-- More rows... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($showsessions)
        <div class="mt-4">
            @livewire('sessions.manage-sessions', ['id' => $box->id])
        </div>
        @endif

        @if($showmembers)
        <div class="mt-4">
            @livewire('members.manage-members', ['id' => $box->id])
        </div>
        @endif

        @if($viewSession)
        <div class="mt-4">
            @livewire('sessions.view-session', ['id' => $this->session_id])
        </div>
        @endif
    </div>