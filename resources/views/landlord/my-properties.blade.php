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
                    <p><b>{{ $property->title }}</b></p>
                    <p>{{ $property->address }}</p>

                </div>
                <div class="landlord_property_buttons">
                    <a href={{"delete/".$property['id']}}><img class="bin" src="/assets/bin.png" alt=""></a>
                    <p><a class="property_btn" style="color:black;margin-right:20px;" href="{{ route('edit-property',$property->id) }}">Edit
                            property</a>
                    </p>
                    <div class="vertical_line"></div>
                    <p><a class="property_btn" style="color:black;margin-right:20px;" href="{{ route('property',$property->id ) }}">View
                            property</a></p>
                    <div class="vertical_line"></div>
                    <p><a class="property_btn" style="color:black;" href="{{ route('application',$property->id ) }}">View
                            applicants</a></p>
                </div>

            </div>
            @endforeach
        </div>

    </div>
    </div>



</x-app-layout>