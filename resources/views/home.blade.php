@extends('layouts.app')
@section('content')
    <div class="flex justify-center h-screen w-screen items-center">
        <div class="max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-auto text-center ">
            <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start">
                <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                <div class="w-2 h-2 bg-green-300 mx-2"></div>
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-lg text-gray-700 dark:text-gray-400">Hey! Let's take the time to note down what went well today &#128522;</p>
            </div>
        </div>
    </div>
@endsection
