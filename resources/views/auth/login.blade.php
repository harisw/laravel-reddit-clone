@extends('layout')
@section('content')
    <div class="border-2 bg-slate-200 rounded-lg border-gray-900/10 px-6 py-4 mt-24 w-2/5 h-2/5">
        <form method="POST">
            @csrf
            <div class="flex flex-col items-center gap-6">
                <div class="w-3/5">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input type="text" name="username"
                               placeholder="Enter your username / email"
                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="w-3/5">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="email" name="password" type="password" autocomplete="password"
                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="w-full flex justify-end mt-4">
                    <button class="font-semibold px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                        Log in
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
