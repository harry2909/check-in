@extends('layouts.app')
@section('content')
    <div class="flex justify-center h-screen w-screen items-center px-2">
        <div
            class="w-full max-w-lg sm:w-full md:w-1/2 lg:1/3 bg-white rounded-lg shadow-md  m-auto text-center">
            <div class="p-4 bg-slate-700 rounded-t-lg flex justify-start align-middle items-center">
                <div class="w-2 h-2 bg-purple-600 mx-2"></div>
                <div class="w-2 h-2 bg-blue-500 mx-2"></div>
                <div class="w-2 h-2 bg-green-300 mx-2"></div>
                <span class="ml-auto text-sm text-white font-bold">Register</span>
            </div>
            <div class="flex px-6 flex-col">
                <div class="py-12">
                    <form class="bg-white rounded px-8 mb-4" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-start text-gray-700 text-md font-bold mb-2" for="name">
                                Full Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400"
                                id="name" name="name" type="text" placeholder="Full Name">
                            @if ($errors->has('name'))
                                <span class="text-blue-500">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="block text-start text-gray-700 text-md font-bold mb-2" for="username">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400"
                                id="username" type="email" name="email" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="text-blue-500">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label class="block text-start text-gray-700 text-md font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:transition focus:ease-in focus:outline-none focus:ring focus:ring-purple-400"
                                id="password" type="password" name="password" placeholder="******************">
                            @if ($errors->has('password'))
                                @foreach($errors->get('password') as $error)
                                    <span class="text-blue-500">{{ $error }}<br></span>
                                @endforeach
                            @endif
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="custom-button mx-auto w-auto px-6 my-2 py-2 text-white text-lg mt-3 rounded-md bg-gradient-to-r from-purple-600 via-blue-500 to-green-300 background-animate">
                                Register
                            </button>
                        </div>
                    </form>
                    @if ($errors->has('registerError'))
                        <span class="text-blue-500">{{ $errors->first('registerError') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
