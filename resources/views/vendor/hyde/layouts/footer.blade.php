@if(config('hyde.footer') !== false)
    <footer aria-label="Page footer" class="mt-auto bg-skyblue border-t-4 border-charcoal">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ Hyde::asset('logo.webp') }}" alt="Logo" class="h-12" />
                        <h2 class="font-serif text-4xl text-charcoal tracking-tight">Lemonade Days</h2>
                    </div>
                    <p class="text-charcoal/80 font-sans max-w-sm">
                        Sun-drenched recipes and lifestyle notes straight from Los Angeles. Squeeze the day.
                    </p>
                </div>

                <div class="flex flex-col space-y-2 font-sans font-medium text-charcoal md:mx-auto">
                    <a href="/" class="hover:underline decoration-2 underline-offset-4 decoration-lemon">Home</a>
                    <a href="/about.html" class="hover:underline decoration-2 underline-offset-4 decoration-lemon">Meet Emily</a>
                    <a href="/contact.html" class="hover:underline decoration-2 underline-offset-4 decoration-lemon">Say Yellow (Contact)</a>
                </div>

                <div class="flex md:justify-end">
                    <div class="prose prose-sm bg-sand border-2 border-charcoal p-4 rounded-xl shadow-retro rotate-2 max-w-xs">
                        {!! \Hyde\Support\Includes::markdown('footer', config('hyde.footer', 'This is a [HydePHP](https://github.com/hydephp/hyde?ref=lemonade) demo website with AI generated content.')) !!}
                    </div>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-charcoal/20 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-charcoal/70 font-sans">
                    &copy; {{ date('Y') }} Lemonade Days Demo. Built with <a href="https://hydephp.com?ref=lemonade" class="underline decoration-lemon decoration-2 font-bold">HydePHP</a>.
                </p>

                <a href="#app" aria-label="Go to top of page" x-data @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})">
                    <button title="Scroll to top" class="flex items-center gap-1 bg-lemon border-2 border-charcoal text-charcoal px-4 py-2 rounded-full font-sans font-bold shadow-retro hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                        <svg width="1.25rem" height="1.25rem" role="presentation" class="fill-charcoal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                        </svg>
                        Back to top
                    </button>
                </a>
            </div>
        </div>
    </footer>
@endif