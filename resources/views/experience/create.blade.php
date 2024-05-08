<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Create Experience') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Create experience') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes experience here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/experience/store" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="company" :value="__('Company')" />
                                <x-text-input id="company" name="company" type="text" class="mt-1 block w-full"
                                    :value="old('company')" required autofocus autocomplete="company" />
                                <x-input-error class="mt-2" :messages="$errors->get('company')" />
                            </div>
                            <div>
                                <x-input-label for="order" :value="__('Order')" />
                                <x-text-input id="order" name="order" type="number" class="mt-1 block w-full"
                                    :value="old('order')" required autofocus autocomplete="order" />
                                <x-input-error class="mt-2" :messages="$errors->get('order')" />
                            </div>
                            <div>
                                <x-input-label for="field" :value="__('Field')" />
                                <x-text-input id="field" name="field" type="text" class="mt-1 block w-full"
                                    :value="old('field')" required autofocus autocomplete="field" />
                                <x-input-error class="mt-2" :messages="$errors->get('field')" />
                            </div>
                            <div>
                                <x-input-label for="duration" :value="__('Year Duration')" />
                                <x-text-input id="duration" name="duration" type="text" class="mt-1 block w-full"
                                    :value="old('duration')" required autofocus autocomplete="duration" />
                                <x-input-error class="mt-2" :messages="$errors->get('duration')" />
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
