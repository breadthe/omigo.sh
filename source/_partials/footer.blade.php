<footer class="mt-6 text-grey-light">

    <section class="container max-w-xl mx-auto flex flex-wrap justify-between sm:justify-start p-2 sm:p-4">

        <div class="mt-6 w-1/2 sm:w-1/4">
            <ul class="p-0 text-center sm:text-left">
                <li><h6 class="mb-2 font-bold text-md">Company</h6></li>
                <li><a href="/about" class="text-grey-light hover:text-white hover:no-underline">About</a></li>
                <li>
                    <a href="/blog/feed.atom" class="text-grey-light hover:text-white hover:no-underline">
                        <img src="/assets/images/feed-icon-14x14.png" width="14" height="14" alt="Subscribe to Atom Feed" title="Subscribe to Atom Feed">
                        Subscribe to Blog
                    </a>
                </li>
                {{--<li><a href="/privacy">Privacy Policy</a></li>--}}
                {{--<li><a href="/terms">Terms & Conditions</a></li>--}}
            </ul>
        </div>

        <div class="mt-6 w-1/2 sm:w-1/4">
            <ul class="p-0 text-center sm:text-left">
                <li><h6 class="mb-2 font-bold text-md">Support</h6></li>
                <li><a href="/contact" class="text-grey-light hover:text-white hover:no-underline">Contact</a></li>
            </ul>
        </div>

    </section>

    <section class="container max-w-xl mx-auto">
        <div class="flex items-center justify-center sm:justify-start p-2 sm:p-4 text-sm text-center sm:text-left">
            <img src="/assets/images/omigosh-logo.png" width="20" height="20">
            &nbsp;&copy;&nbsp;<span>{{ $page->siteName }}</span>
            &nbsp;{{ date('Y') }}
        </div>
    </section>

</footer>
