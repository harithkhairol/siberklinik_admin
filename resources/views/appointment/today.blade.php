@extends('layouts.app')
@section('title', "Today" )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Today</li>
        </ol>
    </nav>

    <div class="w-full flex-wrap md:flex-none flex bg-gray-50 space-y-2 lg:space-y-0 lg:space-x-2">

        <div class="w-full lg:w-auto shadow flex-initial rounded-md py-5 bg-white space-y-3 p-3 md:p-6 max-h-28 text-gray-900">
            <h1 class="font-semibold text-xl">Now</h1>

            <div class="flex space-x-6">

                <div class="flex-initial">
                    <h2>Data Breach</h2>
                </div>

                <div class="flex-initial">
                    <h2>9:00</h2>
                </div>
                
            </div>

        </div>

        <div class="w-full lg:w-auto shadow flex-initial rounded-md py-5 bg-white space-y-3 p-3 md:p-6 max-h-28 text-gray-900">
            <h1 class="font-semibold text-xl">Next</h1>

            <div class="flex space-x-6">

                <div class="flex-initial">
                    <h2>Virus Data Lost</h2>
                </div>

                <div class="flex-initial">
                    <h2>10:00</h2>
                </div>
                
            </div>
            
        </div>

    </div>

    <div class="flex flex-col mb-1">
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">Schedule - 1 February 2021</h1>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                
                <table class="min-w-full divide-y divide-gray-200">
                <thead >
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Time
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Siberdoctor
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">

                        <tr class="bg-blue-100 text-blue-500">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                9:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                10:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                11:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                12:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                13:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                14:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                15:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                16:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">                                    
                                    <div>
                                        <div class="text-sm text-gray-900">
                                            John Doe
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            01X-XXXXXXX
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Cyber Practice
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                <div class="text-sm text-gray-900">Virus Data Lost</div>
                                <div class="text-sm text-gray-500">Consultation</div>
                            </td>

                            <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                
                            </td>
                        
                        </tr>

                    <!-- More items... -->
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>


    
</div>

@endsection