@extends('layouts.app')
@section('title', "Users" )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">User</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Users</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <div class="w-full px-0 mb-2">
            <div class="w-full lg:w-1/3">
                <div class="mt-1 relative rounded-md shadow-sm">
                <form class="form-header" action="{{ route('user') }}" method="GET">
                    <input type="text" name="search" id="search" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" placeholder="Search..">
                    <button type="submit" class="bg-blue-500 text-white absolute inset-y-0 right-0 flex items-center z-10 rounded-r-md p-3">
                        <label for="search" class="sr-only">Search</label>
                        <i data-feather="search"></i>
                    </button>
                </form>
                </div>
            </div>
        </div>
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">List Of User</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                    
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead >
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Level
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            @foreach ($users as $user)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $loop->iteration + (($users->currentPage()-1) * $users->perPage()) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->user_level->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">                                    
                                                <div>
                                                    <div class="text-sm text-gray-900">
                                                        {{ $user->name }}
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    
                                    
                                    

                                    <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                        <a href="{{ route('user.show', $user->email) }}" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                            
                                            <a class="delete-modal text-blue-500 hover:text-blue-900" data-email="{{ $user->email }}">
                                                <i data-feather="x-circle"></i>
                                            </a>
                        
                                    </td>

                                    
                                </tr>

                            @endforeach

                          

                        <!-- More items... -->
                    </tbody>
                    </table>
                    <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>

<script>

// $(".open").on("click", function() {
//   $(".popup-overlay, .popup-content").addClass("active");
// });

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".delete-modal").on("click", function() {

    let email = $(this).data('email');
    
    $("#modal").removeClass("hidden");
    $("#modal-headline").text("Delete "+email+"?");
    $("#modal-content").text("Are you sure you want to delete "+email+"?");
    $('#modal-button').val(email);

});

$("#modal-button").on("click", function() {

    let email = $('#modal-button').val();

    $('#modal-action').attr("action", '/user/'+email+'/delete');
    
});


$(".close-modal").on("click", function() {
  $("#modal").addClass("hidden");
});

</script>
@endsection