<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('success'))
      <section class="container px-4 mx-auto mt-4 mb-2"><x-alert-success>{{ session('success') }}</x-alert-success></section>
    @endif
    <!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

   
      <!-- Card -->
      <div class="bg-white rounded-xl shadow dark:bg-neutral-900">
        <div class="relative h-40 rounded-t-xl bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-cover bg-center">
          <div class="absolute top-0 end-0 p-4">
            
          </div>
        </div>
  
        <div class="pt-0 p-4 sm:pt-0 sm:p-7">
          <!-- Grid -->
          <div class="space-y-4 sm:space-y-6">
            <form action="{{ route('providers.update', ['provider' => $provider->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

            
              <div>
                <label class="sr-only">
                  Product photo
                </label>
    
                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-x-5">
                  <img class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white dark:ring-neutral-900" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
    
                  <div class="mt-4 sm:mt-auto sm:mb-1.5 flex justify-center sm:justify-start gap-2">
                      <label for="af-submit-app-upload-images" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 cursor-pointer">
                          <input id="af-submit-app-upload-images" name="af-submit-app-upload-images" type="file" class="sr-only">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                          Upload logo
                      </label>
  
  
                    
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                      Delete
                    </button>
  
  
                    
                  </div>
                </div>
              </div>
    
              <div class="space-y-2">
                <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  {{__('Provider')}} {{__('Name')}}
                </label>
    
                <input id="name_provider" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="{{$provider->name}}" value="{{ old('name', $provider->name) }}" name="name">
              </div>
    
              <div class="space-y-2">
                  <label for="af-submit-app-category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                      {{__('Provider Type')}}
                  </label>
                    @if (isset($provider->provider_type))
                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            <h2 class="text-sm font-normal text-emerald-500">{{ $provider->provider_type }}</h2>
                        </div>
                    @endif
      
                    <select id="provider_type" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="provider_type">
                      <option value="" disabled selected>Select a category</option>
                      <option value="local_guide" {{ $provider->provider_type == 'local_guide' ? 'selected' : '' }}>Local guide</option>
                      <option value="travel_agency" {{ $provider->provider_type == 'travel_agency' ? 'selected' : '' }}>Travel agency</option>
                  </select>
              </div>
  
              <div class="space-y-2">
                  <label for="af-submit-project-url" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    {{__('Contact Number')}}
                  </label>
      
                  <input id="contact_provider" type="number" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="{{$provider->contact}}" value="{{ old('name', $provider->contact) }}" name="contact">
              </div>
  
              <div class="space-y-2">
                  <label for="af-submit-project-url" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    {{__('Address')}}
                  </label>
      
                  <input id="provider_address" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="{{$provider->address}}" value="{{ old('name', $provider->address) }}" name="address">
              </div>
  
              <div class="space-y-2">
                <label for="provider_email" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Email {{__('Provider')}}
                </label>
    
                <input id="provider_email" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="{{$provider->email}}" value="{{ old('name', $provider->email) }}" name="email">
              </div>
  
              {{-- <div class="space-y-2">
                <label for="af-submit-app-description" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Description
                </label>
    
                <textarea id="af-submit-app-description" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="A detailed summary will better explain your products to the audiences. Our users will see this in your dedicated product page."></textarea>
              </div> --}}
              <div class="mt-5 flex justify-center gap-x-2">
                <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  {{__('Update')}}
                </button>
              </div>
            </form>
            
          </div>
          <!-- End Grid -->
  
        </div>
      </div>
      <!-- End Card -->
    
  </div>
  <!-- End Card Section -->
</x-app-layout>
