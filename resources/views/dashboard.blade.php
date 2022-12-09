@extends('layouts.app')
@section('content')
    <div class="flex justify-center h-screen w-screen items-center px-2">
        <div
            class="w-full max-w-2xl sm:w-full md:w-1/2 lg:1/3 bg-white rounded-lg shadow-md  m-auto text-center">
            <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
                <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                <div class="w-2 h-2 bg-green-300 mx-2"></div>
                <span class="ml-auto text-sm text-white font-bold">Dashboard</span>
            </div>
            <div class="flex justify-center">
                <div class="border-r-2 py-12 h-full w-96">
                    <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">Jot down a new
                        success &#128187;</p>
                    <a href="/add-success">
                        <button
                            class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate">
                            Let's go
                        </button>
                    </a>
                </div>
                <div class="h-full py-12 w-96">
                    <p class="px-4 mb-2 font-normal text-xl text-gray-700 dark:text-gray-400 text-center">View your
                        successes
                        &#128640;</p>
                    <a href="/view-successes">
                        <button
                            class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate">
                            <span>Let's go</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
