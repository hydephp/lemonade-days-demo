<a href="{{ $item }}" {{ $attributes->except('item')->class([
    'navigation-link block my-2 md:my-0 md:inline-block px-3 py-1 rounded-lg font-medium text-charcoal hover:bg-lemon transition-colors',
    'navigation-link-active bg-lemon' => $item->isActive()
])->merge($item->getExtraAttributes())->merge([
    'aria-current' => $item->isActive() ? 'page' : false,
]) }}>{{ $item->getLabel() }}</a>