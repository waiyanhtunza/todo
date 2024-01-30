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

                    <div class=" w-full ">
                        <div class="mx-auto">
                            <form action="{{ route('tasks.update', $task->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <label for="task">Task</label>
                                <input type="text" name="task" id="task" placeholder="update task"
                                    value="{{ $task->task }}" class="w-full h-10 text-dark pl-2">


                                <div class="w-48 h-20 mt-10 ">
                                    <label for="file">Update Picture</label>
                                    <input type="file" name="img" id="file">
                                </div>

                                <label for="note">Note</label>
                                <textarea name="note" id="note" cols="" rows="" class="w-full h-40 text-dark pl-2">{{$task->note}}</textarea>

                                <div class="flex justify-end mt-5 mr-5">

                                    <a href="{{ route('home') }}" class="btn btn-dark mr-2">Close</a>


                                    <button type="submit" class="btn btn-success ">
                                        Update
                                    </button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
