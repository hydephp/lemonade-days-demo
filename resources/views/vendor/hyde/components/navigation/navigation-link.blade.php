<a href="{{ $item }}" {{ $attributes->except('item')->class([
    'navigation-link block my-2 md:my-0 md:inline-block px-3 py-1 rounded-lg font-medium text-charcoal',
    'navigation-link-active bg-lemon' => $item->isActive()
])->merge($item->getExtraAttributes())->merge([
    'aria-current' => $item->isActive() ? 'page' : false,
]) }}><span class="navigation-link-text">{{ $item->getLabel() }}</span></a>