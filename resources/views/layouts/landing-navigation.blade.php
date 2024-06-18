<header>
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
    
</header>