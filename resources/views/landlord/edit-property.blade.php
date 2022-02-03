<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
        <div class="underline"></div>
        <h2>Edit property {{$property->id}}</h2>
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

            <!-- Description -->
            <div>
                <x-label for="description" :value="__('description')" />

                <textarea id="description" class="block mt-1 w-full" type="text" name="description" required autofocus />{{ $property->description }}</textarea>
            </div>
        <br>
             <!-- Price -->
             <div>
                <x-label for="price" :value="__('price')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ $property->price }}" required />
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
