<div class="bg-neutral-200 px-40 pt-24" id="testimoni">
    <div class="container mx-auto ">
        <div class="grid-rows-4">
            <div class="grid-rows-2 content-center text-center">
                <h1 class="text-4xl font-bold mb-5 text-dark animate-bounce">
                    Testimoni
                </h1>
                <p>Find out what users are saying about us</p>
            </div>

            {{-- Card --}}
            <div class="grid-rows-1 flex justify-center h-auto relative flex-col my-auto items-center">
                @foreach ($ratings as $item)
                    {{-- start --}}
                    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                        <figure class="max-w-screen-md mx-auto">
                            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                            </svg> 
                            <blockquote>
                                <p class="text-2xl font-medium text-gray-900 dark:text-white">"{{ $item->content }} <br> Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                    <div class="pr-3 font-medium text-gray-900 dark:text-white"> {{ $item->user_id }}</div>
                                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>      
                @endforeach

                {{-- Side button --}}
                <a href="#" rel="noopener noreferrer"
                    class="absolute end-6 bottom-48 inline-flex items-center px-4 py-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 my-auto">→</a>
                <a href="#" rel="noopener noreferrer"
                    class="absolute start-6 bottom-48 inline-flex items-center px-4 py-4 bg-white-800 border  rounded-md font-semibold text-xs text-black tracking-widest hover:bg-white-700 my-auto shadow-md">←</a>
            </div>
        </div>
    </div>
</div>

<!-- ====== rating Section End -->

<style>
    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
            /* Bounce height */
        }
    }

    .animate-bounce {
        animation: bounce 1.2s ease-in-out infinite;
        /* Animation settings */
}
</style>