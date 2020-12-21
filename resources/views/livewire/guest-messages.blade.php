<div>
    <div class='m-4 text-3xl font-semibold text-center'>
        Messaging System
    </div>
    @if($showform)
    <x-input.card class='w-2/3'>
        <div>
            <h3 class="text-xl font-semibold leading-6 text-center text-gray-900">
                Create your message.
            </h3>
        </div>
        <form wire:submit.prevent="sendmessage">
            <div class="space-y-4">
                <div class='grid grid-cols-2 gap-4 mt-6'>
                    <div class="col-start-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                        <input wire:model='first_name' type="text" name="first_name" id="first_name" autocomplete="first-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-start-2">
                        <label for="family_name" class="block text-sm font-medium text-gray-700">Family name</label>
                        <input wire:model='family_name' type="text" name="family_name" id="family_name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                    </div>

                    <div class="col-start-1 col-end-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input wire:model='email' type="email" name="email" id="email" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>


                    <div class="col-span-2 col-start-1">
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input wire:model='subject' type="text" name="subject" id="subject" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>


                    <div class="col-span-2 mt-1 sm:mt-0">
                        <label for="message_body" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Message or Question
                        </label>
                        <textarea wire:model='message_body' id="message_body" name="message_body" rows="5" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        <p class="mt-2 text-sm text-gray-500"></p>
                    </div>

                    <div class="col-span-2 mx-auto mt-6">
                        <span class="rounded-md shadow-sm ">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 border border-transparent rounded-md bg-gold hover:bg-yellow-200 focus:outline-none focus:border-indigo-700">
                                Send your Message
                            </button>
                        </span>
                    </div>
                </div>

            </div>
        </form>
    </x-input.card>
    @endif

    @if($showthanks)
    <div class="p-8 text-center">
        <h1 class="mb-8 text-4xl">Thank you for your message</h1>
        <p class="text-2xl">
            Your message has been passed to Ray and Bruce, and one of them will get back to you very soon.</p>
        <a href="/">
            <button class="p-3 mt-4 text-gray-800 rounded-lg bg-gold ">Goto Home page</button></a>
    </div>
    @endif

    @if($showlist)
    <x-input.card class='w-2/3'>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Fullname
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Subject
                                    </th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($messages as $entry)
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{$entry->created_at}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{$entry->first_name}}
                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{$entry->subject}}
                                    </td>
                                    <td class="px-6 py-4 space-x-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </x-input.card>
    @endif
</div> <!-- end of grid -->