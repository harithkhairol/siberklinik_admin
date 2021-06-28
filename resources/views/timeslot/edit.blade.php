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
            <li><a href="#" class="text-blue font-bold">{{ $day }}</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>{{ $time }}</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">{{ $day }}</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full lg:w-1/6 sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                    <form action="{{ route('timeslot.update', [$day, $time]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="w-full divide-y divide-gray-200">
                            <thead >
                                <tr>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                    
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider items-center">
                                        <span class="align-middle">{{ $time }}</span>
                                    </th>
                                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><span class="sr-only">Delete</span></th>
                                    
                                </tr>
                            </thead>


                            <tbody class="divide-y divide-gray-200">

                                @forelse($timeslots as $timeslot)

                                    <tr>

                                        <td class="px-3 py-4 whitespace-nowrap text-sm bg-gray-100">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                                                    
                                            <div>

                                                <span class="align-middle text-sm">{{ $timeslot->doctor->name }}</span>

                                                
                                            
                                            </div>



                                        </td>

                                        <td scope="col" class="px-3 py-3 text-gray-500 bg-gray-100">

                                            <a href="#delete" class="delete-modal text-red-500 hover:text-red-900" data-doctor="{{ $timeslot->doctor->name }}" data-email="{{ $timeslot->doctor->email }}">
                                                <i class="inline" data-feather="trash"></i>
                                            </a>
                                            
                                        </td>


                                    </tr>

                                @empty

                                    <tr>

                                        <td class="px-3 py-4 whitespace-nowrap text-sm">
                                    
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                    
                                            <div>

                                                <span class="align-middle text-sm">No Siberdoctor</span>

                                            </div>

                                        </td>

                                    </tr>

                            

                                @endforelse

                            </table>

                            <table class="w-full divide-y divide-gray-200 bg-gray-100">

                                <div id="doctor_field" class="bg-gray-100">

                                </div>

                                <tr>


                                    <td class="px-3 py-4 whitespace-nowrap text-sm bg-gray-100">
                                
                                    </td>



                                    <td class="px-6 py-4 whitespace-nowrap bg-gray-100">

                                        <div class="mt-2">
                                        
                                            <a href="#add" id="nine_add" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="plus"></i></a>
                                            <a href="#minus" id="nine_minus" class="text-blue-500 hover:text-blue-900"><i class="inline" data-feather="minus"></i></a>

                                        </div>
                                    
                                    </td>

                                  
                                </tr>

                            </tbody>
                        </table>

                        <div class="px-4 py-3 bg-white sm:px-6">
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

<script nonce="HiKXla3KMpqbUaEPadLeV5607Yl/7/uTaSOa">

        var url = "{{ config('app.url') }}";

        $(document).ready(function () {

            var i = 0;
            var timeslots_count = {{ $timeslots_count }};

            $('#nine_add').click(function () {

                i++;
                timeslots_count++;

                var form = '<tr class="bg-gray-100 nine_doctor">'+
                                '<td class="px-3 py-4 whitespace-nowrap text-sm">'+
                                    timeslots_count +
                                '</td>'+
                                '<td class="px-6 whitespace-nowrap">'+
                                    '<select name="nine[]" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none my-2">'+
                            
                                        @foreach($doctors as $doctor)

                                            '<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>'+

                                        @endforeach

                                    '</select>'+
                                '</td>'
                            +'</tr>';

                
                
   
                $('#doctor_field').append(form);

            });

            $('#nine_minus').click(function () {

                if(i>0){

                    $('.nine_doctor').last().remove();
                    i--;
                    timeslots_count--;

                }
                
            });

            $(".delete-modal").on("click", function() {

                let doctor = $(this).data('doctor');

                let email = $(this).data('email');

                
                $("#modal").removeClass("hidden");
                $("#modal-headline").text("Delete "+doctor+" from the timeslot?");
                $("#modal-content").text("Are you sure you want to delete "+doctor+" from the timeslot?");
                $('#modal-button').val(email);

            });

            $("#modal-button").on("click", function() {

                let email = $('#modal-button').val();

                $('#modal-action').attr("action", url+'timeslot/{{ $day }}/{{ date('G.i', strtotime($time)) }}/'+email+'/delete');

            });

            $(".close-modal").on("click", function() {
                $("#modal").addClass("hidden");
            });

        });

</script>

@endsection