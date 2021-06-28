<div class="hidden md:block md:flex-none min-h-full">
    <aside class="relative h-full inline-flex flex-col justify-between items-center bg-white shadow p-6">
        <nav class=" inline-flex flex-col space-y-2">
            <a class="nav-side-btn flex items-center text-base font-medium text-gray-500 hover:text-gray-900 py-2 cursor-pointer hover:bg-gray-100 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="calendar"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Appointment
                </span>

                <span class="chevron-down w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-down"></i>
                </span>

                <span class="chevron-up hidden w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-up"></i>
                </span>

            </a>

            <div class="nav-children hidden space-y-2">

                <a href="{{ route('appointment.today') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.today') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Today
                    </span>
                </a>
                
                <a href="{{ route('appointment.upcoming') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.upcoming') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Upcoming
                    </span>
                </a>

                <a href="{{ route('appointment.history') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.history') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        History
                    </span>
                </a>
            
            </div>

            <!--  -->

            <a class="nav-side-btn flex items-center text-base font-medium text-gray-500 hover:text-gray-900 py-2 cursor-pointer hover:bg-gray-100 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="user"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Customer
                </span>

                <span class="chevron-down w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-down"></i>
                </span>

                <span class="chevron-up hidden w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-up"></i>
                </span>
            </a>

            <div class="nav-children hidden space-y-2">
                
                <a href="{{ route('customer') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('customer') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Customers
                    </span>
                </a>
            
            </div>

            <!--  -->

            <a class="nav-side-btn flex items-center text-base font-medium text-gray-500 hover:text-gray-900 py-2 cursor-pointer hover:bg-gray-100 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="shield"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Siberdoctor
                </span>

                <span class="chevron-down w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-down"></i>
                </span>

                <span class="chevron-up hidden w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-up"></i>
                </span>

            </a>

            <div class="nav-children hidden space-y-2">

                <a href="{{ route('doctor.register') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('doctor.register') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Register
                    </span>
                </a>
                
                <a href="{{ route('doctor') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('doctor') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Siberdoctors
                    </span>
                </a>

                <a href="{{ route('timeslot') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('timeslot') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Time Slot
                    </span>
                </a>
            
            </div>

        
            <a class="nav-side-btn flex items-center text-base font-medium text-gray-500 hover:text-gray-900 py-2 cursor-pointer hover:bg-gray-100 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="life-buoy"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    User
                </span>

                <span class="chevron-down w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-down"></i>
                </span>

                <span class="chevron-up hidden w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-up"></i>
                </span>
            </a>

            <div class="nav-children hidden space-y-2">

                <a href="{{ route('user.register') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('user.register') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Register
                    </span>
                </a>
                
                <a href="{{ route('user') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('user') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Users
                    </span>
                </a>
            
            </div>

            <hr class="flex w-full items-center text-gray-500 pl-2 pr-6">

            <div class="space-y-2 space-x-2 w-40">

                <!-- first link must have pl-2 -->
                <!-- <a href="#" class="pl-2 text-xs font-medium text-gray-500 hover:text-gray-900">
                    How It Works
                </a>

                <a href="#" class="text-xs font-medium text-gray-500 hover:text-gray-900">
                    About Us
                </a>

                <br> -->

                <span class="text-xs font-medium text-gray-500">
                    &#169; 2021 Siberklinik
                </span>

            </div>

        </nav> 

    </aside>

</div>