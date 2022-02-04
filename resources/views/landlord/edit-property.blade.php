<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
        <div class="underline"></div>
        <h2>Edit property - {{$property->title}}</h2>
    </div>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('update-property',['property' => $property]) }}">
            @csrf
            @method('PUT')

       
            <!-- Title -->
            <div>
                <x-label for="title" :value="__('title')" />

                <x-input id="title" class="block mt-1 w-full" value="{{ $property->title }}" type="text" name="title" required autofocus />
            </div>
        <br>
         <!-- Rooms -->
         <div>
                <x-label for="rooms" :value="__('rooms')" />

                <x-input id="rooms" class="block mt-1 w-full" value="{{ $property->rooms }}" type="text" name="rooms" required autofocus />
            </div>
        <br>
            <!-- Description -->
            <div>
                <x-label for="description" :value="__('description')" />

                <textarea id="description" class="block mt-1 w-full" type="text" name="description" required autofocus />{{ $property->description }}</textarea>
            </div>
        <br>
             <!-- Title -->
             <div>
                <x-label for="title" :value="__('title')" />

                <x-input id="title" class="block mt-1 w-full" value="{{ $property->title }}" type="text" name="title" required autofocus />
            </div>
        <br>
         <!-- Deposit -->
         <div>
                <x-label for="deposit" :value="__('deposit')" />

                <x-input id="deposit" class="block mt-1 w-full" value="{{ $property->deposit }}" type="text" name="deposit" required autofocus />
            </div>
        <br>
             <!-- Address -->
             <div>
                <x-label for="address" :value="__('address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $property->address }}" required />
            </div>

          

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Edit property') }}
                </x-button>
            </div>
            
        </form>
    

</x-app-layout>
