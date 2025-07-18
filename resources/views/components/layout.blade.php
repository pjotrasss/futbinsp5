<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        @vite(['resources/js/app.js'])
        <link rel="shortcut-icon" href="">
        <title>Futbinsp5</title>
    </head>
    <body>
        <header>  
            <nav class="navbar">
                <ul class="navbar__menu">
                    <x-navlink href='/' featherpos='home' optionalclass="navbar__item__w__border__r" :active="request()->is('/')">
                        <span>Strona główna</span>
                    </x-navlink>
                    <x-navlink href='/finder' featherpos='finder' optionalclass="navbar__item__w__border__r" :active="request()->is('finder')">
                        <span>Wyszukiwarka zawodników</span>    
                    </x-navlink>
                    <x-navlink href='/clubs' featherpos='clubs' optionalclass='' :active="request()->is('clubs')">
                        <span>Kluby</span>
                    </x-navlink>
                </ul>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>