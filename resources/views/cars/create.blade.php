@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Create car</h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars" method="post">
            @csrf
            <div class="block">
                <input type="text" class="block shadow-zinc-900 shadow-2xl mb-10 p-2 w-80 placeholder-slate-400" name="name" id="" placeholder="Brand name....">

                <input type="text" class="block shadow-zinc-900 shadow-2xl mb-10 p-2 w-80 placeholder-slate-400" name="founded" id="" placeholder="founded....">

                <input type="text" class="block shadow-zinc-900 shadow-2xl mb-10 p-2 w-80 placeholder-slate-400" name="description" id="" placeholder="Description....">

                <button type="submit" class="bg-green-300 block shadow-2xl shadow-orange-300 animate-bounce mb-10 p-2 w-80 ">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection