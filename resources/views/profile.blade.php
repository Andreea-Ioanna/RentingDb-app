<x-app-layout>
    <div class="landlord_profile_container">
        <h1 class="welcome">Welcome {{ Auth::user()->name }}</h1>
        <div class="underline"></div>
        <div class="profile_main">
            <div class="side_menu">
            <a href="/your_properties" onclick="showPage('your_properties'); return false;">Your properties</a>
            <a href="/appointments" onclick="showPage('appointments'); return false;">Appointments</a>
            </div>
            <div class="profile_content">
                <div id="your_properties" class="subpage"> eetc </div>
                <div id="appointments" class="subpage">asd</div>
            </div>

        </div>
    </div>

    

</x-app-layout>
