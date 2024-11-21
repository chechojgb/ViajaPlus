<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('providers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('providers.partials.providers_form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('All providers') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("See all the suppliers that are in the company") }}
                    </p>

                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-4">
                            <a href="{{route('providers.index')}}"><x-primary-button>{{ __('Review Table') }}</x-primary-button></a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>  --}}
        </div>
    </div>
</x-app-layout>
