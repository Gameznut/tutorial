@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold"> {{ $car->name }}</h1>
        </div>

        <div class="py-10 text-center">
            <div class="">
                <div class="m-auto">

                    
                    <span class="uppercase text-blue-200 italic text-sm">
                        Founded: {{ $car->founded }}
                    </span>

                    <p class="text-lg text-gray-300 py-3 pb-2">
                        {{ $car->description }}
                    </p>
                    <hr class="border-red-400 border-2 my-2"> 
                </div>  
            </div>
        </div>
    </div>
@endsection