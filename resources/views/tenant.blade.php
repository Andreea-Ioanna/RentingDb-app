<x-guest-layout>
<div class="form_header">
<h1 class="curios">Curios to see the place?</h1>
<h3 class="pleasefill">Please fill in the form below!</h3>
</div>
<form class="add_property_form" method="POST" action="{{ route('tenant-application',['propertyId' => $propertyId]) }}">
        @csrf

        <!-- first name -->
        <div>
            <x-label for="firstName" :value="__('First Name')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="firstName" class="block mt-1 w-full" type="text" name="firstName"
                :value="old('firstName')" required autofocus></textarea>
        </div>

        <!-- last name -->
        <div>
            <x-label for="lastName" :value="__('Last Name')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="lastName" class="block mt-1 w-full" type="text" name="lastName"
                :value="old('lastName')" required autofocus></textarea>
        </div>

        <!-- email-->
        <div>
            <x-label for="email" :value="__('Email')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="email" class="block mt-1 w-full" type="text" name="email"
                :value="old('email')" required autofocus></textarea>
        </div>

        <!-- job-->
        <div>
            <x-label for="job" :value="__('Job')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="job" class="block mt-1 w-full" type="text" name="job"
                :value="old('job')" required autofocus></textarea>
        </div>

        <!-- description-->
        <div>
            <x-label for="description" :value="__('Description')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="description" class="block mt-1 w-full" type="text" name="description"
                :value="old('description')" required autofocus></textarea>
        </div>
        <!-- photo-->
        <div>
            <x-label for="photo" :value="__('Upload image')" class="form_titles" />
            <div class="underline"></div>

            <textarea id="photo" class="block mt-1 w-full" type="text" name="photo"
                :value="old('photo')" required autofocus></textarea>
        </div>
       
    


        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-4">
                {{ __('Apply') }}
            </x-button>
        </div>

    </form>


</x-guest-layout>