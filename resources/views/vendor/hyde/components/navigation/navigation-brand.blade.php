@php $large ??= false; @endphp

<a href="{{ Routes::find('index') }}" @class([
    'brand-link font-serif font-bold px-4 text-charcoal flex items-center',
    'text-4xl md:text-5xl flex-col gap-1' => $large,
    'text-2xl' => ! $large,
]) aria-label="Home page">
    <img src="{{ Hyde::asset('logo.webp') }}" alt="Logo" @class(['brand-logo', 'h-20 md:h-24' => $large, 'h-12' => ! $large]) />
    <span class="brand-text">{{ config('hyde.name', 'HydePHP') }}</span>
</a>