<div>
    <div class="flex justify-center h-screen w-screen flex-wrap w-screen items-center px-24">
        <div class="my-28 w-full ">
            <div
                class="sm:max-w-full min-w-full w-1/2 bg-white rounded-lg shadow-md text-center mx-auto">
                <div
                    class="p-6 bg-slate-700 rounded-lg flex justify-start align-middle items-center">
                    <label for="search" class="hidden">Search</label>
                    <input id="search"
                           wire:model="search"
                           class="mx-4 shadow appearance-none border rounded w-2/4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400"
                           type="text">
                    <span class="ml-auto text-sm text-white font-bold">Total Count: {{$successCount}} | Search (YYYY-MM-DD)</span>
                </div>
            </div>
            @forelse($successes as $key => $success)
                <div
                    class="sm:max-w-full w-full bg-white rounded-lg shadow-md text-center my-6">
                    <div
                        class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
                        <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                        <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                        <div class="w-2 h-2 bg-green-300 mx-2 mr-auto"></div>
                        <span class="m-auto text-sm text-white font-bold">{{ $key }}</span>
                        <span class="ml-auto text-sm text-white font-bold">Count: {{ count($successes[$key]) }}</span>
                    </div>
                    <div
                        class="flex flex-wrap flex-row max-h-screen overflow-y-auto max-w-xs sm:max-w-full rounded-lg">
                        <div class="p-12 bg-white">
                            <div class="flex justify-center lg:justify-start"><h1
                                    class="text-2xl font-bold">{{ $key }}</h1></div>
                            <div class="flex flex-wrap justify-center flex-row">
                                @foreach($success as $successdata)
                                    <div
                                        class="w-full bg-white rounded-lg shadow-2xl  m-4 mt-8 mb-8 text-center">
                                        <div
                                            class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
                                            <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                                            <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                                            <div class="w-2 h-2 bg-green-300 mx-2"></div>
                                        </div>
                                        <div class="flex flex-wrap flex-row p-6 justify-center w-full">
                                            <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">
                                                {{$successdata['description']}}
                                                <br>
                                                <a wire:click="deleteSuccess({{$successdata['id']}})">
                                                    <button
                                                        class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate">
                                                        Delete
                                                    </button>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div
                    class="max-w-lg bg-white rounded-lg shadow-md  m-auto text-center mt-5">
                    <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
                        <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                        <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                        <div class="w-2 h-2 bg-green-300 mx-2"></div>
                        <span class="ml-auto text-sm text-white font-bold">View Successes</span>
                    </div>
                    <div class="p-6">
                        <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">No
                            results!
                            @if($successCount === 0)
                                Looks like you don't have any successes yet. Let's fix that &#128077</p>
                        @endif
                        <br>
                        <a href="/add-success">
                            <button
                                class="mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate">
                                Create a success
                            </button>
                        </a>
                    </div>
                </div>
        </div>
        @endforelse
    </div>
</div>
</div>
