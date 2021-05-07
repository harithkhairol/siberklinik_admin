@extends('layouts.app')
@section('title', "Show User")
@section('content')
<div class="w-full lg:w-4/12 md:p-8 p-3 space-y-4">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">User</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>{{ $user->email }}</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">

        <div class="flex flex-col lg:flex-row w-full">
            <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">Edit User</h1>
        </div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                    <form action="{{ route('user.update', $user->email) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-5">

                                <div class="col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 pb-1">Email</label>
                                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 bg-gray-100 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" disabled>
                                </div>

                                <div class="col-span-6">
                                    <label for="type" class="block text-sm font-medium text-gray-700 pb-1">User Level</label>

                                    <div class="relative">

                                        <select id="user_level" name="user_level" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">

                                            @foreach ($user_levels as $user_level)
                                                <option value="{{ $user_level->id }}">{{ $user_level->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    
                                    </div>

                                </div>
                                
                                <div class="col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Name</label>
                                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base">
                                </div>
                    
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update
                            </button>
                        </div>

                    </form>


            
                
            </div>
            </div>
        </div>

    </div>
</div>

@endsection