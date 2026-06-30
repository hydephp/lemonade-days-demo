@php($title = 'Home')
@extends('hyde::layouts.app')
@section('content')

    <main id="content" class="mx-auto max-w-7xl py-12 px-8">
        <section class="relative mb-16 lg:mb-24">
            <img src="{{ Hyde::asset('hero-home.jpg') }}" alt="A sunny picnic on the beach with a pitcher of lemonade"
                 class="w-full h-[26rem] md:h-[32rem] object-cover rounded-2xl border-2 border-charcoal shadow-retro">

            <div class="relative md:absolute md:inset-0 flex flex-col items-center justify-center text-center px-8 py-10 md:py-0 md:bg-charcoal/20 md:rounded-2xl">
                <span class="inline-block bg-skyblue/50 border-2 border-charcoal rounded-full px-4 py-1 mb-4 font-medium text-sm">
                    Fresh squeezed from LA &middot; est. {{ now()->year }}
                </span>
                <h1 class="text-4xl leading-tight tracking-tight font-serif font-bold mb-4 md:text-5xl lg:text-6xl text-charcoal md:text-sand">
                    Squeeze the Day: A Taste of LA Summer
                </h1>
                <p class="text-lg text-charcoal/70 md:text-sand/90 max-w-xl mx-auto mb-8">
                    Laid-back, sun-drenched recipes for a never-ending summer.
                </p>
                <a href="#post-feed"
                   class="inline-block bg-lemon border-2 border-charcoal rounded-full px-6 py-2 font-medium shadow-retro hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[8px_8px_0px_0px_rgba(39,39,42,1)] transition-transform text-charcoal">
                    Grab a Glass
                </a>
            </div>
        </section>

        <section id="post-feed" class="mb-16 lg:mb-24">
            <h2 class="text-3xl font-serif font-bold text-charcoal text-center mb-10">
                Latest Posts
            </h2>
            <div class="max-w-6xl mx-auto">
                @include('hyde::components.blog-post-feed')
            </div>
        </section>

        <section class="max-w-4xl mx-auto bg-sand border-2 border-charcoal rounded-2xl p-8 shadow-retro flex flex-col sm:flex-row items-center gap-6">
            <img src="{{ Hyde::asset('about-portrait.jpg') }}" alt="Emily enjoying a sunny day"
                 class="w-28 h-28 rounded-full object-cover border-2 border-charcoal shrink-0">
            <div class="text-center sm:text-left">
                <p class="text-charcoal/90 leading-relaxed mb-3">
                    Hi, I&rsquo;m Emily. I moved to LA and fell head over heels for the food scene&mdash;especially the
                    weekend farmers' markets. Lemonade Days is my love letter to that fresh, sun-drenched lifestyle.
                </p>
                <a href="{{ Hyde::route('about')?->getLink() }}"
                   class="inline-block text-charcoal decoration-lemon decoration-4 underline underline-offset-2 hover:bg-lemon transition-colors font-medium">
                    Meet Emily
                </a>
            </div>
        </section>
    </main>

@endsection
