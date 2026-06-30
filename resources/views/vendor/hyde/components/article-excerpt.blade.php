@php /** @var \Hyde\Pages\MarkdownPost $post */ @endphp
<article itemprop="item" itemscope itemtype="https://schema.org/BlogPosting"
    class="group bg-sand border-2 border-charcoal rounded-2xl p-6 shadow-retro">
    <meta itemprop="identifier" content="{{ $post->identifier }}">
    @if($post->getCanonicalUrl())
        <meta itemprop="url" content="{{ $post->getCanonicalUrl()  }}">
    @endif

    @isset($post->image)
         <meta itemprop="image" content="{{ $post->image }}">
    @endif

    @isset($post->image)
        <a href="{{ $post->getRoute() }}" class="block -mt-6 -mx-6 mb-4 overflow-hidden rounded-t-2xl">
            <img src="{{ $post->image->getSource() }}" alt="{{ $post->image->getAltText() ?? $post->title }}"
                 class="w-full h-48 object-cover border-b-2 border-charcoal transition-transform duration-300 ease-out group-hover:scale-110">
        </a>
    @endisset

    <header>
        <a href="{{ $post->getRoute() }}" class="group block w-fit">
            <h2 itemprop="headline"
                class="inline text-2xl font-serif font-bold text-charcoal bg-gradient-to-r from-lemon to-lemon bg-no-repeat bg-left bg-[length:0%_100%] [transition:background-size_300ms_ease-out,transform_300ms_ease-out] group-hover:bg-[length:100%_100%] group-hover:-translate-y-0.5 group-hover:-rotate-1">
                {{ $post->data('title') ?? $post->title }}
            </h2>
        </a>
    </header>

    <footer class="text-sm text-charcoal/70 mt-1">
        @isset($post->date)
            <span class="opacity-75">
                <time itemprop="dateCreated datePublished" datetime="{{ $post->date->datetime }}">{{ $post->date->short }}</time>{{ isset($post->author) ? ',' : '' }}
            </span>
        @endisset
        @isset($post->author)
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
            <span class="opacity-75">by</span>
            <span itemprop="name">
                {{ $post->author->name ?? $post->author->username }}
            </span>
        </span>
        @endisset
    </footer>

    @if($post->data('description') !== null)
        <section role="doc-abstract" aria-label="Excerpt">
            <p itemprop="description" class="leading-relaxed my-2 text-charcoal/90">
                {{ $post->data('description') }}
            </p>
        </section>
    @endisset

    <footer class="mt-4">
        <a href="{{ $post->getRoute() }}"
           class="inline-block bg-lemon border-2 border-charcoal rounded-full px-4 py-1.5 text-sm font-medium text-charcoal shadow-retro hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[8px_8px_0px_0px_rgba(39,39,42,1)] transition-transform">
            Read post
        </a>
    </footer>
</article>