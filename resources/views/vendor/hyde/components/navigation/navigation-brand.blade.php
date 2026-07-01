<a href="{{ Routes::find('index') }}" class="brand-link font-serif font-bold text-2xl px-4 text-charcoal flex items-center" aria-label="Home page">
    <img src="{{ Hyde::asset('logo.webp') }}" alt="Logo" class="brand-logo h-12" />
    <span class="brand-text">{{ config('hyde.name', 'HydePHP') }}</span>
</a>