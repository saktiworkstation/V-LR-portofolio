<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('report Data') }}
                    </h4>
                    @if (session()->has('success'))
                        <x-success-alert>
                            {{ session('success') }}
                        </x-success-alert>
                    @endif
                    {{-- content --}}

                    <div class="max-w-5xl w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                        <div class="flex justify-between mb-3">
                            <div class="flex items-center">
                                <div class="flex justify-center items-center">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">
                                        The amount of each data
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
                            <div class="grid grid-cols-5 gap-4 mb-2">
                                <dl class="bg-lime-100 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt
                                        class="w-8 h-8 rounded-full bg-lime-200 text-lime-600 text-sm font-medium flex items-center justify-center mb-1">
                                        {{ $skills->count() }}
                                    </dt>
                                    <dd class="text-lime-600 text-sm font-medium">Skill</dd>
                                </dl>
                                <dl class="bg-teal-50 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt
                                        class="w-8 h-8 rounded-full bg-teal-100 dark:bg-gray-500 text-teal-600 dark:text-teal-300 text-sm font-medium flex items-center justify-center mb-1">
                                        {{ $projects->count() }}
                                    </dt>
                                    <dd class="text-teal-600 dark:text-teal-300 text-sm font-medium">Project</dd>
                                </dl>
                                <dl class="bg-blue-50 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt
                                        class="w-8 h-8 rounded-full bg-blue-100 dark:bg-gray-500 text-blue-600 dark:text-blue-300 text-sm font-medium flex items-center justify-center mb-1">
                                        {{ $educations->count() }}
                                    </dt>
                                    <dd class="text-blue-600 dark:text-blue-300 text-sm font-medium">Education</dd>
                                </dl>
                                <dl class="bg-blue-50 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt
                                        class="w-8 h-8 rounded-full bg-blue-100 dark:bg-gray-500 text-blue-600 dark:text-blue-300 text-sm font-medium flex items-center justify-center mb-1">
                                        {{ $intereses->count() }}
                                    </dt>
                                    <dd class="text-blue-600 dark:text-blue-300 text-sm font-medium">Interest</dd>
                                </dl>
                                <dl
                                    class="bg-blue-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt
                                        class="w-8 h-8 rounded-full bg-blue-100 dark:bg-gray-500 text-blue-600 dark:text-blue-300 text-sm font-medium flex items-center justify-center mb-1">
                                        {{ $experiences->count() }}
                                    </dt>
                                    <dd class="text-blue-600 dark:text-blue-300 text-sm font-medium">Experience</dd>
                                </dl>
                            </div>
                        </div>

                        <!-- Radial Chart -->
                        <div class="py-6" id="radial-chart"></div>

                        <div
                            class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                            <div class="flex justify-between items-center pt-5">
                                <!-- Button -->
                                <x-link-primary-button :url="route('report')">
                                    {{ __('Skill Report') }}
                                </x-link-primary-button>
                                <x-link-primary-button :url="route('report')">
                                    {{ __('Project Report') }}
                                </x-link-primary-button>
                                <x-link-primary-button :url="route('report')">
                                    {{ __('Education Report') }}
                                </x-link-primary-button>
                                <x-link-primary-button :url="route('report')">
                                    {{ __('Interest Report') }}
                                </x-link-primary-button>
                                <x-link-primary-button :url="route('report')">
                                    {{ __('Experience Report') }}
                                </x-link-primary-button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
