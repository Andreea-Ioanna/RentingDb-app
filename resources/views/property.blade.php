<x-guest-layout>
    <div class="property_container">
        <div class="property_header">
            <img src="/assets/img1.jpg">
            <img src="/assets/img2.jpg">
            <img src="/assets/img3.jpg">
        </div>
        <div class="border_bottom"></div>
        <div class="propertyPage_main">
            <h2>{{$property->title}}</h2>
            <p>{{$property->address}}</p>
            <h3>Description</h3>
            <div class="underline"></div>
            <p>{{$property->description}}</p>
            <h3>Details about housing</h3>
            <div class="underline"></div>
             <div class="appartment_details_table">
        <div class="column1">
            <ul>
                <li>House Type</li>
                <li>Appartment</li>
            </ul>
            <ul>
                <li>Rooms</li>
                <p>{{$property->rooms}}</p>
            </ul>
            <ul>
                <li>Energy label</li>
                <li>-</li>
            </ul>
            <ul>
                <li>Shareable</li>
                <li>No</li>
            </ul>
            <ul>
                <li>Elevator</li>
                <li>Yes</li>
            </ul>
            <ul>
                <li>For students only</li>
                <li>No</li>
            </ul>
            <ul>
                <li>Parking</li>
                <li>Yes</li>
            </ul>
        </div>
        <div class="column1">
            <ul>
                <li>Size</li>
                <p>{{$property->area}} m2</p>
            </ul>
            <ul>
                <li>Floor</li>
                <li>2</li>
            </ul>
            <ul>
                <li>Furnished</li>
                <li>Yes</li>
            </ul>
            <ul>
                <li>Pets allowed</li>
                <li>Yes</li>
            </ul>
            <ul>
                <li>Elderly friendly</li>
                <li>No</li>
            </ul>
            <ul>
                <li>Balcony</li>
                <li>No</li>
            </ul>
        </div>
    </div>
    <p>Details about rental</p>
    <div class="appartment_details_table">
        <div class="column1">
            <ul>
                <li>Rental period</li>
                <li>Unlimited</li>
            </ul>
            <ul>
                <li>Monthly rent</li>
                <li>14.900, -</li>
            </ul>
            <ul>
                <li>Occupancy price</li>
                <p>{{$property->deposit}}, -</p>
            </ul>
            <ul>
                <li>Available from</li>
                <p>{{$property->available}}</p>
            </ul>
        </div>
        <div class="column1">

            <ul>
                <li>Aconto</li>
                <li>800, -</li>
            </ul>
            <ul>
                <li>Prepaid rent</li>
                <li>0, -</li>
            </ul>
            <ul>
                <li>Creation date</li>
                <li>11/15/2021</li>
            </ul>
        </div>
    </div>
    <div class="availability">
        <p class="monthly_price">Monthly price</p>
        <!-- <p class="price">6,300 kr</p> -->
        <p class="price">{{$property->price}}</p>
        <p>{{$property->available}}</p>
        <!-- <p>Available: 26/12/2021</p> -->
        <a href="{{ route('tenant',$property->id) }}" class="nav_btn2 apply_rent">Apply for rent</a>
       
    </div>
</div>
<div class="border_bottom"></div>

<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15132.762066986628!2d12.543887369704017!3d55.680319791134586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smcdonald&#39;s!5e0!3m2!1sen!2sdk!4v1639865947410!5m2!1sen!2sdk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    


    </x-guest-layout>