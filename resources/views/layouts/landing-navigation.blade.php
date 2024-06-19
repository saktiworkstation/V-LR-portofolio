<!-- <header>
<nav x-data="{ open: false }" class="w-9/12 h-[80px] rounded-xl mt-6 mx-auto bg-neutral-50 border-b border-gray-100 flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <img class="h-auto w-16" src="/img/logo.png" alt="V-LR Portfolio logo">
        </a>
        <span class="my-auto text-xl font-semibold">V-LR.</span>
        </div>
        <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
        <a href="#hero" class="text-lg font-medium leading-6 text-gray-900 hover:text-blue-800">Home</a>
        <a href="#feature" class="text-lg font-medium leading-6 text-gray-900 hover:text-blue-800">Features</a>
        <a href="#testimoni" class="text-lg font-medium leading-6 text-gray-900 hover:text-blue-800">Review</a>
        <a href="#contact" class="text-lg font-medium leading-6 text-gray-900 hover:text-blue-800">Contact</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-3">
                @if (Route::has('login'))
                    @auth
                        <x-link-primary-button :url="route('dashboard')">{{ __('Dashboard') }}</x-link-primary-button>
                    @else
                        <x-link-primary-button :url="route('login')">{{ __('Login') }}</x-link-primary-button>
                        @if (Route::has('register'))
                            <x-link-primary-button :url="route('register')">{{ __('Register') }}</x-link-primary-button>
                        @endif
                    @endauth
                @endif
        </div>
</nav>
</header> -->

<header>
    <nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 fixed w-full h-[80px] z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="lg:w-[70%] sm:w-full flex flex-wrap text-lg items-center justify-between mx-auto p-2">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="h-auto w-16" src="/img/logo.png" alt="V-LR Portfolio logo">
            <span class="my-auto text-xl font-semibold">V-LR.</span>
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <div class="hidden md:flex lg:flex-1 lg:justify-end lg:gap-x-3">
                @if (Route::has('login'))
                    @auth
                        <x-link-primary-button :url="route('dashboard')">{{ __('Dashboard') }}</x-link-primary-button>
                    @else
                        <x-link-primary-button :url="route('login')">{{ __('Login') }}</x-link-primary-button>
                        @if (Route::has('register'))
                            <x-link-primary-button :url="route('register')">{{ __('Register') }}</x-link-primary-button>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="#home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#feature" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
                <a href="#testimoni" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Review</a>
            </li>
            <li>
                <a href="#contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
            </ul>
        </div>

        
    </div>
    </nav>
</header>

