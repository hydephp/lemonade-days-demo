<ol itemscope itemtype="https://schema.org/ItemList" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($posts ?? MarkdownPost::getLatestPosts() as $post)
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <meta itemprop="position" content="{{ $loop->iteration }}">
            @include('hyde::components.article-excerpt')
        </li>
    @endforeach
</ol>