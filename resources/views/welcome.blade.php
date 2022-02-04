<x-guest-layout>

    <div id="landing_page" class="subpage">
        <div class="border_bottom"></div>
        <div id="header">
            <div id="nav">
            </div>
            <div id="search">
                <h1>Welcome to ...</h1>
                <h3>Find the best appratments</h3>
                <form class="search">
                    <input name="search" type="text" placeholder="Where would you like to move?">
                    <button class="search_btn">Search</button>
                </form>
            </div>
        </div>
        <div class="border_bottom"></div>

        <div id="main">
            <div class="categories">
                <h2>Categories</h2>
                <div class="underline"></div>
            </div>
            <div class="categories_options">
                <div class="options">
                    <img src="/assets/single-bed.png" alt="single room">
                    <p>Single rooms</p>
                </div>
                <div class="options">
                    <img src="/assets/buildings.png" alt="appartments">
                    <p>Appartments</p>
                </div>
                <div class="options">
                    <img src="/assets/buildings.png" alt="appartments">
                    <p>Houses</p>
                </div>
                <div class="options">
                    <img src="/assets/buildings.png" alt="appartments">
                    <p>Others</p>
                </div>
                <div>

                </div>
            </div>
            <div class="mostPopular">
                <h2>New properties</h2>
                <div class="underline"></div>
                <div class="properties_container">
                @foreach ($properties as $property)

                <div class="property_template">
                    <img class="property_image" src="/assets/img.jpg">
                    <p class="property_id">Property id: {{ $property->id }}</p>
                    <p><b>{{ $property->title }}</b></p>
                    <p>{{ $property->address }}</p>
                    <p class="price">{{ $property->price }} kr.-</p>
                    <!-- <p>{{ $property->description }}</p>
                    <p>{{ $property->area }}</p> -->
                   
                    <p><a class="nav_btn1" style="color:black" href="{{ route('property',$property->id ) }}">View property</a></p>
                </div>
               

                @endforeach
                </div>
            </div>

        </div>
    </div>

    <div id="details" class="subpage">
        <div id="nav">
        </div>
    </div>

    <div id="add_appartment" class="subpage">
        <div id="nav">

        </div>

    </div>



</x-guest-layout>