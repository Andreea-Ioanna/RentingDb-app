<x-app-layout>
    <div class="landlord_profile_container">
        <div class="landlord_header">
            <div>
                <div class="user_header">
                <img src="/assets/user.png">
                <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>

        <div class="lanlord_main">
            <div class="landlord_properties">
                <h3>Here you can see your appointments</h3>
                <div class="underline"></div>
               <div class="appointments_container">
                   <img src="/assets/calendar.png">
                   <h3>No appointments yet</h3>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
