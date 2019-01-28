<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-grey-darker hover:text-pink-dark {{ $page->isActive('/blog') ? 'active text-pink-dark' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-grey-darker hover:text-pink-dark {{ $page->isActive('/about') ? 'active text-pink-dark' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-grey-darker hover:text-pink-dark {{ $page->isActive('/contact') ? 'active text-pink-dark' : '' }}">
        Contact
    </a>
</nav>
