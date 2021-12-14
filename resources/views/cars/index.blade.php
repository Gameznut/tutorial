@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Cars</h1>
        </div>

        <div class='pt-10'>
            <a href="/cars/create" class="border-b-2 italic pb-2 text-gray-500 border-dotted">Add a new car &rarr;</a>
        </div>

        <div class="w-5/6 py-10">
        <div class="">
                @foreach ($cars as $car )
                    <div class="m-auto">
                        <div class="float-right ">
                            <a  class="border-b-2 italic pb-1 text-green-500 border-dotted" href="cars/{{ $car->id }}/edit">
                                Edit &rarr;
                            </a>
                            <form class="mt-2" action="/cars/{{ $car->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="border-b-2 italic pb-1 text-red-500 border-dotted" type="submit">
                                    Delete &rarr;
                                </button>
                            </form>
                        </div>
                        <span class="uppercas text-blue-200 italic text-sm">
                            Founded: {{ $car->founded }}
                        </span>
                        <h1 class="text-gray-300 hover:text-gray-900 text-2xl">
                            <a href="/cars/{{ $car->id }}">{{ $car->name }}</a>
                            
                        </h1>
                        <p class="text-lg text-gray-300 py-3 pb-2">
                            {{ $car->description }}
                        </p>
                        <hr class="border-red-400 border-2 my-2"> 
                    </div>
                    
                @endforeach
            
        </div>
        </div>
    </div>
@endsection