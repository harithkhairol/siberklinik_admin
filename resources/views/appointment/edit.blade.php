@extends('layouts.app')
@section('title', $appointment->title)
@section('content')

<div class="w-full md:p-8 p-3 space-y-4">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>{{ $appointment->title }}</li>
        </ol>
    </nav>

    <div class="w-full">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col mb-1">

            <div class="w-full xl:flex flex-row xl:space-x-7 space-y-4 xl:space-y-0">

                <div class="w-full xl:w-5/12">

                    <!-- <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">{{ $appointment->title }}</h1> -->

                    <div class="lg:flex lg:items-center lg:justify-between px-1 py-2 lg:py-3 mb-2 ml-2 pt-1.5">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-xl font-bold leading-7 text-gray-900">
                            {{ $appointment->title }}
                            </h2>

                        </div>
                        <div class="mt-5 flex lg:mt-0 lg:ml-4">
                            <span class="hidden sm:block">
                            <a class="delete-modal inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer" data-id="{{ $appointment->id }}" data-title="{{ $appointment->title }}">
                                <!-- Heroicon name: solid/pencil -->
                                <!-- <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg> -->
                                <span class="-ml-1 mr-2 h-5 w-5 text-gray-500">
                                    <i class="h-5 w-5" data-feather="trash-2"></i>
                                </span> 
                                Delete
                            </a>
                            </span>

                            <span class="hidden sm:block ml-3">
                            <a href="{{ route('appointment.reschedule.date', [$appointment->id, $appointment->title]) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 pointer">
                                <!-- Heroicon name: solid/link -->
                                <!-- <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
                                </svg> -->
                                <span class="-ml-1 mr-2 h-5 w-5 text-gray-500">
                                    <i class="h-5 w-5" data-feather="calendar"></i>
                                </span> 
                                Reschedule
                            </a>
                            </span>

                            <!-- Dropdown -->
                            <span class="md:ml-3 relative sm:hidden">
                            <button id="more" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="mobile-menu" aria-haspopup="true">
                                More
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!--
                                Dropdown panel, show/hide based on dropdown state.

                                Entering: "transition ease-out duration-200"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div id="more-menu" class="hidden origin-top-right absolute mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 z-10" aria-labelledby="mobile-menu" role="menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Delete</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Reschedule</a>
                            </div>
                            </span>
                        </div>
                    </div>

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
                                    @csrf

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-5">

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Date</label>

                                                <div class="relative">

                                                    <input type="text" value="{{ date('D', strtotime($appointment->date)).', '.date('d/m/Y', strtotime($appointment->date)) }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>
                                                    
                                                </div>

                                            </div>

                                        
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Time</label>

                                                <div class="relative">

                                                <input type="time" value="{{ $appointment->time }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>

                                                </div>

                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Type</label>

                                                <div class="relative">

                                                    <select id="type" name="type" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none" required>
                                                        <option value="Cyber Practice" {{ $appointment->type == ('Cyber Practice') ? 'selected' : '' }}>Cyber Practice</option>
                                                        <option value="Cyber Awareness" {{ $appointment->type == ('Cyber Awareness') ? 'selected' : '' }}>Cyber Awareness</option>
                                                    </select>
                                                
                                                </div>

                                            </div>

                                        
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Category</label>

                                                <div class="relative">

                                                    <select id="category" name="category" autocomplete="category" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none" required>
                                                        <option value="Consultation" {{ $appointment->category == ('Consultation') ? 'selected' : '' }}>Consultation</option>
                                                        <option value="Training" {{ $appointment->category == ('Training') ? 'selected' : '' }}>Training</option>
                                                        <option value="Talk" {{ $appointment->category == ('Talk') ? 'selected' : '' }}>Talk</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Title</label>
                                                <input type="text" value="{{ $appointment->title }}" name="title" id="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" required>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="description" class="block text-sm font-medium text-gray-700 pb-1">Description</label>
                                                <textarea type="text" value="{{ $appointment->description }}" name="description" id="description" autocomplete="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base h-60" required>{{ $appointment->description }}</textarea>
                                            </div>
                                
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                                        <a href="{{ url()->previous() }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 pointer">
                                            Back
                                        </a>
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 float-right">
                                            Update
                                        </button>
                                    </div>

                                </form>
                            
                            </div>
                        </div>
                    </div>
                
                </div>

                <div class="w-full xl:w-5/12">

                    <!-- <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">{{ $appointment->title }}</h1> -->

                    <div class="lg:flex lg:items-center lg:justify-between px-1 py-2 lg:py-3 mb-2 ml-2 pt-1.5">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-xl font-bold leading-7 text-transparent">
                                Appointment Outcome
                            </h2>

                        </div>

                       
                    </div>

                    <div class="xl:pt-2.5 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <form action="{{ route('appointment.update.outcome', $appointment->id) }}" method="POST">
                                    @csrf

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-5">
                                    
                                            <div class="col-span-6">
                                                <label for="outcome" class="block text-sm font-medium text-gray-700 pb-1">Appointment Outcome</label>
                                                <textarea type="text" value="{{ $appointment->outcome }}" name="outcome" id="outcome" autocomplete="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base h-60">{{ $appointment->outcome }}</textarea>
                                            </div>
                                
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                                        <!-- <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 pointer">
                                            Back
                                        </a> -->
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 right-0">
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
    </div>

   

</div>

<script nonce="HiKXla3KMpqbUaEPadLeV5607Yl/7/uTaSOa">var url = "{{ config('app.url') }}";</script>
<script src="{{ asset('js/appointment.js') }}"></script>

@endsection