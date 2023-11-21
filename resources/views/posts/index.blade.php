@extends('layout')
@section('content')
    <div class="flex flex-col gap-10 w-3/5">
        <div class="flex justify-between bg-white py-3 px-8 rounded">
            <div class="flex gap-4">
                <button class="px-2 py-0.5 rounded-xl bg-slate-400 text-slate-600 font-bold hover:bg-slate-300">
                    Best
                </button>
                <button class="px-2 py-0.5 text-slate-600 font-bold">
                    Hot
                </button>
                <button class="px-2 py-0.5 text-slate-600 font-bold">
                    New
                </button>
            </div>
            <a class="px-4 py-2 rounded-xl bg-orange-700 text-white hover:bg-orange-500 font-semibold"
               href="/post/create">
                Create New Post
            </a>
        </div>
    </div>
@endsection
