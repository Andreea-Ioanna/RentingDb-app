<x-app-layout>


    <div id="dashboard">
        <form class="search_dashboard" type="get" action="{{ url('/search') }}">
            <input class="search_input" name="search_query" placeholder="Search">
            <button class="search_btn" type="submit">Search</button>
        </form>
        <div class="dashboard_containers">
            <div class="filter">
                <h6>Housing Type</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Single rooms
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Appartments
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Houses
                    </label>
                </div>
                <h6>Location</h6>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Copenhagen</option>
                    <option value="1">Aarhus</option>
                    <option value="2">Horsens</option>
                    <option value="3">Odense</option>
                </select>
                <h6>Rent</h6>
                <input type="text" placeholder="Enter price (kr)">
                <h6>Size</h6>
                <input type="text" placeholder="Enter size (m2)">
                <h6>Others</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Blacony
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Pets allowed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Elevator
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        For students
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Furnished
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Parking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Shareable
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Senior friendly
                    </label>
                </div>
            </div>
            <div class="housing_list">
                <div id="sponsored">

                    @foreach ($properties as $property)

                    <div class="property_template">
                        <img class="property_image" src="/assets/img.jpg">
                        <p>{{ $property->title }}</p>
                        <p class="property_id">Property id: {{ $property->id }}</p>
                        <p class="property_id">Property id: {{ $property->id }}</p>
                    <p><b>{{ $property->title }}</b></p>
                    <p>{{ $property->address }}</p>
                    <p class="price">{{ $property->price }} kr.-</p>
                        <p><a class="nav_btn1" style="color:black" href="{{ route('property',$property->id ) }}">View
                                property</a></p>
                    </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
