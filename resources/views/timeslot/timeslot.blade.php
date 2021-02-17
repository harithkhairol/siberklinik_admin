@extends('layouts.app')
@section('title', "Time Slot" )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Siberdoctor</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Time Slot</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">Time Slot</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                    
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead >
                        <tr>
                            
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="sr-only">Time</span>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                <span class="align-middle">Monday</span>  <a href="{{ route('timeslot.show', 'Monday') }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                <span class="align-middle">Tuesday</span>  <a href="{{ route('timeslot.show', 'Tuesday') }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                <span class="align-middle">Wednesday</span>  <a href="{{ route('timeslot.show', 'Wednesday') }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                <span class="align-middle">Thursday</span>  <a href="{{ route('timeslot.show', 'Thursday') }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                <span class="align-middle">Friday</span>  <a href="{{ route('timeslot.show', 'Friday') }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                            </th>

                            <!-- <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th> -->
                            </tr>
                        </thead>

                        <!-- <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                            <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                        </td> -->

                        <tbody class="divide-y divide-gray-200">

                            @for ($i = 9; $i <= 16; $i++)

                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $i }}:00
                                    </td>

                                    @foreach ($timeslots as $timeslot)
                                        
                                        <!-- At 9:00 -->
                                        @if($timeslot->time == "0".$i.":00:00")

                                            <!-- Monday -->
                                            @if($timeslot->day == "Monday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Tuesday -->
                                            @if($timeslot->day == "Tuesday")

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Wednesday -->
                                            @if($timeslot->day == "Wednesday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Thursday -->
                                            @if($timeslot->day == "Thursday")

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Friday -->
                                            @if($timeslot->day == "Friday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                        <!-- After 9:00 -->
                                        @elseif($timeslot->time == $i.":00:00")

                                            <!-- Monday -->
                                            @if($timeslot->day == "Monday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>
                                    
                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    Jane Cooper
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    01X-XXXXXXX
                                                                </div>

                                                            @endif
                                                
                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Tuesday -->
                                            @if($timeslot->day == "Tuesday")

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Wednesday -->
                                            @if($timeslot->day == "Wednesday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Thursday -->
                                            @if($timeslot->day == "Thursday")

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                            <!-- Friday -->
                                            @if($timeslot->day == "Friday")

                                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
                                                    <div class="flex items-center">                                    
                                                        <div>
                                                            
                                                            @if($timeslot->doctor_id == "0")

                                                                <div class="text-sm text-gray-900">
                                                                    None
                                                                </div>

                                                            @else

                                                                <div class="text-sm text-gray-900">
                                                                    {{ $timeslot->doctor->name }}
                                                                </div>

                                                                <div class="text-sm text-gray-500">
                                                                    {{ $timeslot->doctor->phone_no }}
                                                                </div>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                            @endif

                                        @endif

                                    @endforeach

                                </tr>

                            @endfor
                   
                    </tbody>
                    </table>

                </div>
            </div>
            </div>
        


    </div>
</div>
@endsection