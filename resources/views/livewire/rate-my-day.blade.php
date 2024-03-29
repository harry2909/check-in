<div>
    <div class="max-w-lg bg-white rounded-lg shadow-md m-auto text-center">
        <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
            <div class="w-2 h-2 bg-purple-600 mx-2"></div>
            <div class="w-2 h-2 bg-blue-500 mx-2"></div>
            <div class="w-2 h-2 bg-green-300 mx-2"></div>
            <span class="ml-auto text-sm text-white font-bold">Rate your day</span>
        </div>
        <div class="p-6">
            <div class="{{ $currentStep != 1 ? 'hidden' : 'flex flex-col' }}">
                <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Hey! Let's take
                    the
                    time to rate your day &#128197;</p>
                <button
                    class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate"
                    wire:click="firstStepSubmit">
                    Next
                </button>
            </div>
            <div class="{{ $currentStep != 2 ? 'hidden' : 'flex flex-col' }}">
                <p class="mb-4 px-4 font-normal text-md font-bold text-gray-700 dark:text-gray-400 text-left" wire:poll>
                    {{ $currentTime }}</p>
                <div
                    class="px-4 mb-3 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Rate your day
                    &#127881;
                </div>
                <div class="flex flex-wrap flex-row p-3">
                    @foreach($emojis as $emoji)
                        <div class="mx-2 pointer text-2xl"
                             wire:click="secondStepSubmit({{$emoji->id}})">{!!$emoji->emoji_html!!}</div>
                    @endforeach
                </div>
                @error('description') <span class="font-bold text-blue-500">{{ $message }}</span> @enderror
                <button
                    class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate"
                    wire:click="secondStepSubmit">
                    Submit
                </button>
            </div>
            <div class="{{ $currentStep != 3 ? 'hidden' : 'flex flex-col' }}">
                <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Nice! You've rated
                    your day.</p>
                <div class="flex-row whitespace-nowrap">
                    <a href="/dashboard">
                        <button
                            class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate text-center">
                            Dashboard
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
