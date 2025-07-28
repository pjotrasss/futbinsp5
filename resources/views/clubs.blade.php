<x-layout :additional_vite_resources="['resources/js/clubs.js']">
    <h1>Drużyny biorące udział w rozgrywkach</h1>

    <div class="clubs_list">
        @foreach($clubs as $club)
            <a href="" class="club_container">
                <div class="club_logo">
                    <img src="{{ asset('images/'.$club->LOGO_URL) }}" alt="{{ $club->CLUB }}">
                </div>
                <div class='club_info'>
                    <h3>{{ $club->CLUB }}</h3>
                    <div class="club_info_subcontainer">
                        <p class="club_info_subcontainer_left">
                            Właściciel:<br>
                            {{ $club->owner->USERNAME }}
                        </p>
                        <p class="club_info_subcontainer_right">{{ $club->currentLeague->first()?->LEAGUE }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>