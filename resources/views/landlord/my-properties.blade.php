<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
        <div class="underline"></div>
        <h2>My properties</h2>
    </div>
    @foreach ($properties as $property)
    
    <div>
        <p>Property id: {{ $property->id }}</p>
        <p>Property description: {{ $property->description }}</p>
        <p><a class="nav_btn1" style="color:black" href="{{ route('edit-property',$property->id) }}">Edit property</a></p>
        <p><a class="nav_btn1" style="color:black" href="{{ route('property',$property->id ) }}">View property</a></p>
    </div>
    <br>

    @endforeach


</x-app-layout>