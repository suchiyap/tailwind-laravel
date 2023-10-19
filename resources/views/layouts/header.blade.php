<header class="{{ !str_contains($_SERVER['REQUEST_URI'], '/signup') && !str_contains($_SERVER['REQUEST_URI'], '/signin') ? 'bg-black' : '' }} fixed top-0 z-10 w-full">
    <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap py-4 px-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="/"><img src="/assets/images/logo.png" alt="Logo" class="w-40"></a>
            </div>
            <div class="block lg:hidden">
                <button class="nav-menu flex items-center px-3 py-2 border rounded text-white hover:border-white" data-nav-target=".nav-target">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full justify-center lg:flex lg:items-center lg:w-auto font-medium lg:font-bold nav-target hidden">
                <div class="text-sm lg:flex-grow">
                    <div class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4 relative">
                        <button type="button" class="menu w-full flex p-auto text-white rounded-md items-center" id="menu-button" aria-expanded="true" aria-haspopup="true" data-menu-target="#event-menu">
                        Events
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="event-menu" class="relative lg:absolute right-0 z-10 min-w-full shadow-md origin-top-right rounded-md bg-black text-white ring-1 ring-black ring-opacity-5 focus:outline-none font-medium lg:font-bold hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                            <a href="#" class="block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Upcoming Events</a>
                            <a href="#" class="block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Past Events</a>
                            </div>
                        </div>
                    </div>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
                        Services
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
                        About Us
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="hidden justify-end lg:flex lg:items-center lg:w-auto font-medium lg:font-bold">
                @if(!str_contains($_SERVER['REQUEST_URI'], '/signin'))
                    <a href="/signin" class="flex items-center py-2 px-5 me-0 {{ str_contains($_SERVER['REQUEST_URI'], '/signup') ? '' : 'lg:me-3'}} mt-4 lg:mt-0 text-green-100 border-green-100 bg-black border rounded-full font-medium lg:font-bold ">    
                        <span class="me-2">Login</span>
                        <img src="/assets/icons/user-icon.png" alt="User Icon">
                    </a>
                @endif
                @if(!str_contains($_SERVER['REQUEST_URI'], '/signup'))
                    <a href="/signup" class="flex justify-center items-center py-2 px-5 mt-4 lg:mt-0 bg-green-100 border-green-100 text-black border rounded-full font-medium lg:font-bold" style="width: 107px">    
                        <span>Signup</span>
                    </a>
                @endif
            </div>
            <div class="lg:hidden border-y border-solid border-gray-700 w-full my-4 text-white font-medium lg:font-bold capitalize nav-target hidden">
                <p class="my-3">member</p>
                @if(!str_contains($_SERVER['REQUEST_URI'], '/signin'))
                    <a href="/signin" class="flex items-center mt-5 mb-3">
                        <div class="bg-gray-400 w-2 h-2 rounded-full mx-3"></div>
                        <p>Login</p>
                    </a>
                @endif
                @if(!str_contains($_SERVER['REQUEST_URI'], '/signup'))
                    <a href="/signup" class="flex items-center my-3">
                        <div class="bg-gray-400 w-2 h-2 rounded-full mx-3"></div>
                        <p>sign up</p>
                    </a>
                @endif
            </div>
        </nav>
        @if(!str_contains($_SERVER['REQUEST_URI'], '/signup') && !str_contains($_SERVER['REQUEST_URI'], '/signin'))
            <div class="flex flex-wrap justify-left lg:justify-center pb-4 px-6 items-center">
                <label class="relative block pe-3 w-8/12 lg:w-auto">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <img src="/assets/icons/search-icon.png" alt="Search Icon">
                    </span>
                    <a href="/search">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-10 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search" type="text" name="search"/></a>
                </label>
                <button class="hidden lg:block badge border border-green-100 text-white rounded-md me-3">Concert</button>
                <button class="hidden lg:block badge border border-green-100 text-white rounded-md">Comedy</button>
                <div class="w-4/12 inline-flex lg:hidden relative">
                    <button type="button" class="menu w-full flex justify-center p-auto badge border border-green-100 text-white rounded-md items-center" id="menu-button" aria-expanded="true" aria-haspopup="true" data-menu-target="#type-menu">
                    Concert
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="type-menu" class="absolute right-0 z-10 mt-11 min-w-full shadow-md origin-top-right rounded-md bg-black text-white ring-1 ring-black ring-opacity-5 focus:outline-none font-bold hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                        <a href="#" class="block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Concert</a>
                        <a href="#" class="block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Comedy</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</header>