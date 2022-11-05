<div>
    <div class="max-w-lg bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-auto text-center">
        <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start">
            <div class="w-2 h-2 bg-purple-600 mx-2"></div>
            <div class="w-2 h-2 bg-blue-500 mx-2"></div>
            <div class="w-2 h-2 bg-green-300 mx-2"></div>
        </div>
        <div class="p-6">
            <div class="{{ $currentStep != 1 ? 'hidden' : 'block' }}">
                <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Hey! Let's take
                    the
                    time to note down what went well today &#128522;</p>
                <button
                    class="mx-auto w-32 px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate hover:animate-bounce"
                    wire:click="firstStepSubmit">
                    Let's go
                </button>
            </div>
            <div class="{{ $currentStep != 2 ? 'hidden' : 'block' }} flex flex-col">
                <label for="description" class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Give a description of your success:</label>
                <textarea id="description" class="mx-4 px-4 py-3 rounded-lg focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400"></textarea>
                <button
                    class="mx-auto w-32 px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate hover:animate-bounce"
                    wire:click="firstStepSubmit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
