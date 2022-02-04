<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
    </div>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form class="add_property_form" method="POST" action="{{ route('post-property') }}">
        @csrf
  <!-- Price -->
  <div>
            <x-label for="title" :value="__('Title of the proeprty')" class="form_titles"/>
            <div class="underline"></div>
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
        </div>
        <br>
        <!-- Description -->
        <div>
            <x-label for="description" :value="__('Description')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="description" class="block mt-1 w-full" type="text" name="description"
                :value="old('description')" required autofocus></textarea>
        </div>
        <br>
        <!-- Price -->
        <div>
            <x-label for="price" :value="__('Price')" class="form_titles"/>
            <div class="underline"></div>
            <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
        </div>
        <br>
      
        <!-- Address -->
        <div>
            <x-label for="address" :value="__('Address')" class="form_titles" />
            <div class="underline"></div>
            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required />
        </div>

        <!-- Area -->
        <div>
            <x-label for="area" :value="__('Area')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="area" class="block mt-1 w-full" type="text" name="area" :value="old('area')"
                required />
        </div>
          <!-- Latitude -->
          <div>
            <x-label for="latitude" :value="__('Latitude')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="latitude" class="block mt-1 w-full" type="number" name="latitude" :value="old('latitude')" 
                required />
        </div>

         <!-- longitude -->
         <div>
            <x-label for="longitude" :value="__('Longitude')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="longitude" class="block mt-1 w-full" type="number" name="longitude" :value="old('longitude')" 
                required />
        </div>

        <!-- Rooms -->
        <div>
            <x-label for="rooms" :value="__('Rooms')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="rooms" class="block mt-1 w-full" type="number" name="area" :value="old('rooms')"
                required />
        </div>
        <!-- Deposit -->
        <div>
            <x-label for="deposit" :value="__('Deposit')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="deposit" class="block mt-1 w-full" type="number" name="deposit" :value="old('rooms')" placeholder="kr"
                required />
        </div>
        <!-- Utilities -->
        <div>
            <x-label for="utilities" :value="__('Utilities')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="utilities" class="block mt-1 w-full" type="number" name="utilities" :value="old('utilities')" 
                required />
        </div>
      
        <!-- type -->
        <div>
            <x-label for="type" :value="__('Type')"  class="form_titles"/>
            <div class="underline"></div>
            <x-input id="type" class="block mt-1 w-full" type="number" name="type" :value="old('type')" 
                required />
        </div>
      
      
       



        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-4">
                {{ __('Add property') }}
            </x-button>
        </div>

    </form>


</x-app-layout>
