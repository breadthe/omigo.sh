<section class="w-full">
    @if($image = $page->image)
        <img src="{{ $image }}" alt="{{ $page->imageAttribution() }}" title="{{ $page->imageAttribution() }}">

        <small class="block text-center text-xs">
            Photo by <a href="{{ $page->image_author_url }}">{{ $page->image_author }}</a>
            @if($page->image_unsplash)
                on <a href="https://unsplash.com">Unsplash</a>
            @endif
        </small>
    @endif
</section>
