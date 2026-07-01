<a href="{{ Routes::find('index') }}" class="font-serif font-bold text-2xl px-4 text-charcoal hover:bg-lemon transition-colors flex items-center" aria-label="Home page">
    <img src="{{ Hyde::asset('logo.webp') }}" alt="Logo" class="h-12" />
    {{ config('hyde.name', 'HydePHP') }}
</a>