<div>
    <div class="max-w-lg bg-white rounded-lg shadow-md m-auto text-center">
        <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
            <div class="w-2 h-2 bg-purple-600 mx-2"></div>
            <div class="w-2 h-2 bg-blue-500 mx-2"></div>
            <div class="w-2 h-2 bg-green-300 mx-2"></div>
            <span class="ml-auto text-sm text-white font-bold">Add Success</span>
        </div>
        <div class="p-6">
            <div class="{{ $currentStep != 1 ? 'hidden' : 'flex flex-col' }}">
                <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Hey! Let's take
                    the
                    time to note down what went well today &#128522;</p>
                <button
                    class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate"
                    wire:click="firstStepSubmit">
                    Next
                </button>
            </div>
            <div class="{{ $currentStep != 2 ? 'hidden' : 'flex flex-col' }}">
                <p class="mb-4 px-4 font-normal text-md font-bold text-gray-700 dark:text-gray-400 text-left" wire:poll>
                    {{ $currentTime }}</p>
                <label for="description"
                       class="px-4 mb-3 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Give a
                    description of your success &#127881;</label>
                <textarea wire:model="description" id="description"
                          class="mx-4 mb-3 px-4 py-3 rounded-lg focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400 shadow-lg border"></textarea>
                @error('description') <span class="font-bold text-blue-500">{{ $message }}</span> @enderror
                <button
                    class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate"
                    wire:click="secondStepSubmit">
                    Submit
                </button>
            </div>
            <div class="{{ $currentStep != 3 ? 'hidden' : 'flex flex-col' }}">
                <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Great
                    job, this is your {{ $successCount }} success of the day! Your
                    success has been saved &#128522;</p>
                <div class="flex-row whitespace-nowrap">
                    <button
                        wire:click="firstStepSubmit"
                        class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate text-center">
                        Add another
                    </button>
                    <a href="/dashboard">
                        <button
                            class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate text-center">
                            Dashboard
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
