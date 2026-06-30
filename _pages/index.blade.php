@php($title = 'Latest Posts')
@extends('hyde::layouts.app')
@section('content')

    <main id="content" class="mx-auto max-w-7xl py-12 px-8">
        <header class="lg:mb-12 xl:mb-16 text-center">
            <span class="inline-block bg-skyblue/50 border-2 border-charcoal rounded-full px-4 py-1 mb-4 font-medium text-sm">
                Fresh squeezed from LA &middot; est. {{ now()->year }}
            </span>
            <h1 class="text-4xl leading-tight tracking-tight font-serif font-bold mb-4 md:text-5xl lg:text-6xl text-charcoal">
                Latest Posts
            </h1>
            <p class="text-lg text-charcoal/70 max-w-xl mx-auto">
                Laid-back, sun-drenched recipes for a never-ending summer.
            </p>
        </header>

        <div id="post-feed" class="max-w-3xl mx-auto">
            @include('hyde::components.blog-post-feed')
        </div>
    </main>

@endsection
