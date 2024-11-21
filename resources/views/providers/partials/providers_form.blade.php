<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Insert providers') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('providers.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <!-- Mostrar mensaje de éxito si existe -->
        @if (session('success'))
            <x-alert-success>{{ session('success') }}</x-alert-success>

        @endif


        <div>
            <x-input-label for="store_name" :value="__('Name')" />
            <x-text-input id="store_name" name="name" type="text" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="contact_provider" :value="__('Contact')" />
            <x-text-input id="contact_provider" name="contact" type="number" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="provider_type" :value="__('Select the type of provider')" />
            <x-flow-select id="provider_type" name="provider_type" selectedValue="travel_agency" select="{{ __('Select the type of provider') }}" 
            :options="['travel_agency' =>  __('Travel Agency'),'local_guide' => __('Local Guide')]"/> 
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>

    </form>
</section>



