<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Create Rating') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Aplications Rating') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Make Your Rating here.') }}
                            </p>
                        </header>

                        <form method="POST" action="{{ route('rating.store') }}" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="content" :value="__('content')" />
                                <x-text-input id="content" name="content" type="text" class="mt-1 block w-full"
                                    :value="old('content')" required autofocus autocomplete="content" />
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>
                            <div>
                                <x-input-label for="star" :value="__('star')" />
                                <x-text-input id="star" name="star" type="text" class="mt-1 block w-full"
                                    :value="old('star')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('star')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
