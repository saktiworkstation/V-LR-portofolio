<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Interest') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Interest') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes interest here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/interest/{{ $data->id }}/update" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')
                            <div>
                                <x-input-label for="interest" :value="__('interest')" />
                                <x-text-input id="interest" name="interest" type="text" class="mt-1 block w-full"
                                    :value="old('interest', $data->interest)" required autofocus autocomplete="interest" />
                                <x-input-error class="mt-2" :messages="$errors->get('interest')" />
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
