<x-guest-layout>

<form class="add_property_form" method="POST" action="{{ route('tenant-application',['propertyId' => $propertyId]) }}">
        @csrf

        <!-- Description -->
        <div>
            <x-label for="firstName" :value="__('firstName')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="firstName" class="block mt-1 w-full" type="text" name="firstName"
                :value="old('firstName')" required autofocus></textarea>
        </div>
       
    


        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-4">
                {{ __('Apply') }}
            </x-button>
        </div>

    </form>


</x-guest-layout>