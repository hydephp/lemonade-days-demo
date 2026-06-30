{{-- The Markdown Page Layout --}}
@extends('hyde::layouts.app')
@section('content')

    <main id="content" class="mx-auto max-w-7xl py-16 px-8">
        <article @class(['mx-auto bg-sand border-2 border-charcoal rounded-2xl p-8 shadow-retro', config('markdown.prose_classes', 'prose')])>
            {{ $content }}
        </article>
    </main>

@endsection