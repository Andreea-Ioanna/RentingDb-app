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
                @if($applications->isEmpty())
                <div class="appointments_container">
                    <img src="/assets/calendar.png">
                    <h3>No appointments yet</h3>
                </div>
                @else
                @foreach ($applications as $application)
                <div class="landlord_property_layout">
                    <img class="property_image" src="/assets/img.jpg">
                    <div class="property_layout_right">
                        <div>
                            <b>Tenant first name:</b> {{ $application->firstName }}
                        </div>
                        <div>
                        <b>Tenant last name:</b> {{ $application->lastName }}
                        </div>
                        <div>
                        <b>Tenant email:</b> {{ $application->email }}
                        </div>
                        <div>
                        <b>Tenant job:</b> {{ $application->job }}
                        </div>
                        <div>
                        <b>Tenant description:</b> {{ $application->description }}
                        </div>

                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div>
</x-app-layout>