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

                    <form action="{{ route('timeslot.update', $day) }}" method="POST" enctype="multipart/form-data">
                        @csrf
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

                                    <!-- <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th> -->
                                </tr>
                            </thead>

                            <!-- <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                            </td> -->

                            <tbody class="divide-y divide-gray-200">

                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="nine" name="nine" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $nine->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $nine->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="ten" name="ten" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $ten->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $ten->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="eleven" name="eleven" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $eleven->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $eleven->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="twelve" name="twelve" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $twelve->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $twelve->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="thirteen" name="thirteen" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $thirteen->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $thirteen->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="fourteen" name="fourteen" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $fourteen->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $fourteen->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="fifteen" name="fifteen" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $fifteen->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $fifteen->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <select id="sixteen" name="sixteen" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none">
                                            <option value="0" {{ $sixteen->doctor_id == '0' ? 'selected' : '' }}>None</option>

                                            @foreach($doctors as $doctor)

                                                <option value="{{ $doctor->id }}" {{ $doctor->id == $sixteen->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>

                                            @endforeach

                                        </select>
                                    
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="px-4 py-3 bg-white text-right sm:px-6">
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