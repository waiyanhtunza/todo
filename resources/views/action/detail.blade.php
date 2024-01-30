@extends('layouts.layout')
@section('content')
    <div class="flex items-center justify-center w-screen h-screen font-medium">
        <div class="flex flex-grow items-center justify-center bg-gray-white h-full">
            <!-- Component Start -->
            <div class="md:w-1/2 w-full  p-8 bg-gray-900 rounded-lg shadow-lg  text-gray-200 ">

                <div class="flex items-center justify-center mb-10">
                    <svg class="h-12 w-12 text-indigo-500 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <h4 class="font-semibold ml-3 text-3xl "><a href="{{ route('home') }}">Sam's Tasks Details</a></h4>
                </div>

                <div>
                    <div class="flex  w-full text-center">
                        <div class="mx-auto">
                            <p class="text-3xl capitalize"> {{ $task->task }}</p>
                            <p class=" text-sm text-gray-600 mb-5">Create at {{ $task->created_at->diffForHumans() }}</p>

                            <div class="w-48 h-40 mb-5 mx-auto">
                                
                                    <img src="{{ asset($task->img) }}" alt="" class="w-full h-full rounded-lg">
                                
                            </div>
                            <p class="text-sm text-left ">
                                {{ $task->note }}
                            </p>

                        </div>

                    </div>
                    <div class="flex justify-end mt-5 mr-5">
                        <a href="{{ route('home') }}" class="btn btn-dark ">Close</a>
                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection
