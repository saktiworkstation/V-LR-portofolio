<div class="h-screen flex justify-center items-center bg-primary text-white">
    <div class="max-w-xl mx-auto w-full">

        <!-- To achieve the desired progress, you can update the 'stroke-dasharray' property. -->
        <h4 class="text-3xl md:text-5xl dark:text-black font-bold mb-6 animate-bounce">Skills</h4>

        @foreach ($skils as $item)
            <div class="mb-7">
                <div class="flex justify-between py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">{{ $item->name }}</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">
                        @if ($item->skill_level == 'Beginner')
                            25%
                        @elseif ($item->skill_level == 'Intermediate')
                            50%
                        @elseif ($item->skill_level == 'Advanced')
                            75%
                        @elseif ($item->skill_level == 'Expert')
                            100%
                        @endif
                    </span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
         L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
         L 99.5,0.5" stroke-linecap="round" stroke="#FF6464" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray:
                        @if ($item->skill_level == 'Beginner') 25px
                        @elseif ($item->skill_level == 'Intermediate')
                            50px
                        @elseif ($item->skill_level == 'Advanced')
                            75px
                        @elseif ($item->skill_level == 'Expert')
                            100px @endif
                        100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>
        @endforeach

    </div>
</div>

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