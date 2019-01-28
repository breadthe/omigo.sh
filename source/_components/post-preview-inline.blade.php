<div class="flex flex-col mb-4">
    <p class="text-sm text-grey-dark my-2">
        {{ $post->getDate()->format('F j, Y') }}

        @if ($post->categories)
            &nbsp;|&nbsp;
            @foreach ($post->categories as $i => $category)
                <a
                        href="{{ '/blog/categories/' . $category }}"
                        title="View posts in {{ $category }}"
                        class="bg-grey hover:bg-pink-lighter text-white hover:text-white text-xs capitalize rounded px-1"
                >{{ $category }}</a>
            @endforeach
        @endif
    </p>

    <h2 class="text-3xl font-serif mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-pink-dark hover:text-pink-darker font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase text-sm tracking-wide mb-2 hover:no-underline text-pink-dark hover:text-pink-darker text-right"
    >Read Full Post</a>
</div>
