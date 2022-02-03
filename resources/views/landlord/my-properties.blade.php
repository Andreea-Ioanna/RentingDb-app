<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
        <div class="underline"></div>
        <h2>My properties</h2>
        <div class="landlord_profile_main">
            @foreach ($properties as $property)
            <div class="landlord_property_layout">
                <img class="property_image" src="/assets/img.jpg">
                <div class="property_layout_right">
                    <p class="property_id">Property id: {{ $property->id }}</p>
                    <p class="price priceLandlord">{{ $property->price }} kr.-</p>
                    <p>{{ $property->description }}</p>
                    <p>{{ $property->area }}</p>
                    <p>{{ $property->address }}</p>
                </div>
                <div class="landlord_property_buttons">
                <img class="bin" src="/assets/bin.png" alt="">
                <p><a class="property_btn" style="color:black" href="{{ route('edit-property',$property->id) }}">Edit
                            property</a>
                    </p>
                    <div class="vertical_line"></div>
                <p><a class="property_btn" style="color:black" href="{{ route('property',$property->id ) }}">View
                            property</a></p>
                            </div>
            </div>

            @endforeach
        </div>
    </div>



</x-app-layout>
