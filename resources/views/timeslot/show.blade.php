@extends('layouts.app')
@section('title', 'Time Slot' )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Siberdoctor</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li><a href="#" class="text-blue font-bold">Time Slot</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>{{ $day }}</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">{{ $day }}</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead >
                            <tr>
                                
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">9:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">10:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">11:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">12:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">13:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">14:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">15:00</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                    <span class="align-middle">16:00</span>
                                </th>

                            </tr>
                        </thead>


                        <tbody class="divide-y divide-gray-200">

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '9:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '10:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '11:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '12:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '13:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '14:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '15:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                    <a href="{{ route('timeslot.edit', [$day, '16:00']) }}" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="edit"></i></a>
                                
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="px-4 py-3 bg-white text-right sm:px-6">

                    </div>


                </div>
            </div>
            </div>
        


    </div>
</div>

@endsection