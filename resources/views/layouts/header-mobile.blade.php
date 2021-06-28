<!--
            Mobile menu, show/hide based on mobile menu state.

            Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->

<div id="navMobile" class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-20">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50 md:hidden">
        <div class="pt-5 pb-6 px-5">

            <div class="flex items-center justify-between">
                <div>
                    <a class="text-blue-500 font-bold" href="#">
                    <span class="sr-only">Workflow</span>
                        Siberklinik Admin
                    </a>
                </div>
                <div class="-mr-2">
                    <button id="navMobileClose" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>

            </div>

            <div class="mt-8">
                <nav class="grid gap-y-8">

                    <a class="nav-side-btn flex items-center text-gray-500 hover:text-gray-900 py-2 cursor-pointer pl-2 pr-6 -m-3 p-3 rounded-md hover:bg-gray-50">
                        <span class="w-8 h-8 p-1 mr-4">
                            <i data-feather="calendar"></i>
                        </span> 
                        
                        <span class="w-full font-medium text-gray-900 select-none">
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
                        <a href="{{ route('appointment.history') }}" class="flex items-center textbase font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.history') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                            <span class="font-medium select-none">
                                History
                            </span>
                        </a>
                    
                    </div>

                    <a class="nav-side-btn flex items-center text-gray-500 hover:text-gray-900 py-2 cursor-pointer pl-2 pr-6 -m-3 p-3 rounded-md hover:bg-gray-50">
                        <span class="w-8 h-8 p-1 mr-4">
                            <i data-feather="shield"></i>
                        </span> 
                        
                        <span class="w-full font-medium text-gray-900 select-none">
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
                        <a href="{{ route('timeslot') }}" class="flex items-center textbase font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('timeslot') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                            <span class="font-medium select-none">
                                Time Slot
                            </span>
                        </a>
                    
                    </div>

                    <a class="nav-side-btn flex items-center text-gray-500 hover:text-gray-900 py-2 cursor-pointer pl-2 pr-6 -m-3 p-3 rounded-md hover:bg-gray-50">
                        <span class="w-8 h-8 p-1 mr-4">
                            <i data-feather="user"></i>
                        </span> 
                        
                        <span class="w-full font-medium text-gray-900 select-none">
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

                        <a href="{{ route('user.register') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('doctor.register') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
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

                </nav>
            </div>
        </div>

        <div class="py-6 px-5 space-y-6">
        

            <div class="flex items-center w-full bg-gray-100 p-4 rounded-lg">
                <div>
                    <h3 class="text-gray-900 font-semibold">{{ Auth::user()->name }}</h3>
                    <h4 class="text-sm text-gray-700 mt-1">{{ Auth::user()->email }}</h4>
                    
                </div>
            </div>

            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center text-gray-600 py-2 cursor-pointer hover:bg-gray-100 text-gray-500 hover:text-gray-900 pl-2 pr-6 rounded-lg" role="menuitem">
                
                        <span class="w-8 h-8 p-1 mr-4">
                            <i data-feather="power"></i>
                        </span> 
                    
                    <span>{{ __('Logout') }}</span> </a>

                </form>
            </div>
        </div>
    </div>
</div>