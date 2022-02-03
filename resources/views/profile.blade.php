<x-app-layout>
    <div class="landlord_profile_container">

        <div class="landlord_header">
            <div>
                <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
                <div class="underline"></div>
            </div>
            
        </div>

        <div class="lanlord_main">
            <div class="landlord_properties">
                <h3>Your properties</h3>
                <div class="subpage">
             
                </div>
            </div>
        </div>










    </div>

    

</x-app-layout>
