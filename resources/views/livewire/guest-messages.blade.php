<div>
    <x-input.card>
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
                        <label for="message" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Message or Question
                        </label>
                        <textarea wire:model='message' id="message" name="message" rows="5" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
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
</div> <!-- end of grid -->

</div>

</form>
</x-card>
</div>