@props(['active' => false, 'optionalclass' => '', 'featherpos'])

<li class="navbar__item {{ $optionalclass }}">
    <a {{ $attributes }} class="{{ $active ? 'navbar__link__active' : '' }} navbar__link">
        <i data-feather="{{ $featherpos }}"></i>
        {{ $slot }}
    </a>
</li>