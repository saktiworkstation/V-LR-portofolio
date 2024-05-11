<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Education') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Education') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes Education here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/education/{{ $data->id }}/update" class="mt-6 space-y-6">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="degree" :value="__('degree')" />
                                <x-text-input id="degree" name="degree" type="text" class="mt-1 block w-full"
                                    :value="old('degree', $data->degree)" required autofocus autocomplete="degree" />
                                <x-input-error class="mt-2" :messages="$errors->get('degree')" />
                            </div>
                            <div>
                                <x-input-label for="field_of_study" :value="__('field_of_study')" />
                                <x-text-input id="field_of_study" name="field_of_study" type="text"
                                    class="mt-1 block w-full" :value="old('field_of_study', $data->field_of_study)" required autofocus
                                    autocomplete="field_of_study" />
                                <x-input-error class="mt-2" :messages="$errors->get('field_of_study')" />
                            </div>
                            <div>
                                <x-input-label for="education_name" :value="__('education_name')" />
                                <x-text-input id="education_name" name="education_name" type="text"
                                    class="mt-1 block w-full" :value="old('education_name', $data->education_name)" required autofocus
                                    autocomplete="education_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('education_name')" />
                            </div>
                            <div>
                                <x-input-label for="graduation_year" :value="__('Year graduation_year')" />
                                <x-text-input id="graduation_year" name="graduation_year" type="text"
                                    class="mt-1 block w-full" :value="old('graduation_year', $data->graduation_year)" required autofocus
                                    autocomplete="graduation_year" />
                                <x-input-error class="mt-2" :messages="$errors->get('graduation_year')" />
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
