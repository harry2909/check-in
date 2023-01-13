<div
    class="w-full max-w-2xl sm:w-full md:w-1/2 lg:1/3 bg-white rounded-lg shadow-md  m-auto text-center">
    <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
        <div class="w-2 h-2 bg-purple-600 mx-2"></div>
        <div class="w-2 h-2 bg-blue-500 mx-2"></div>
        <div class="w-2 h-2 bg-green-300 mx-2"></div>
        <span class="ml-auto text-sm text-white font-bold">Dashboard</span>
    </div>
    <div class="flex justify-center">
        <div class="border-r-2 border-b-2 py-12 min-h-full w-96">
            <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Average day of
                submission: <b>{{$averageDay}}</b></p>
        </div>
        <div class="min-h-full border-b-2 py-12 w-96">
            <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center"> Here's a list of your
                common words:
                @if($commonWords)
                    @foreach($commonWords as $word)
                        <b>{{ $word }}</b>
                    @endforeach
                @endif
            </p>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="border-r-2 py-12 min-h-full w-96">
            <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Total success
                count: <b>{{$totalSuccesses}}</b></p>
        </div>
        <div class="min-h-full py-12 w-96">
            <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Most used emoji:
            @if($averageEmoji)
                {!! $averageEmoji !!}
            @endif
        </div>
    </div>
</div>
