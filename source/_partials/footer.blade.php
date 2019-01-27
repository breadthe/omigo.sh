<footer class="w-full mt-6 text-grey-light text-lg">

    <div class="container flex flex-wrap justify-between sm:justify-start p-4 sm:p-8">

        <div class="mt-6 w-1/2 sm:w-1/4">
            <ul class="p-0 text-center sm:text-left">
                <li><h6 class="mb-2 font-bold text-lg">Company</h6></li>
                <li><a href="/about" class="text-grey-light hover:text-white hover:no-underline">About</a></li>
                {{--<li><a href="/privacy">Privacy Policy</a></li>--}}
                {{--<li><a href="/terms">Terms & Conditions</a></li>--}}
            </ul>
        </div>

        <div class="mt-6 w-1/2 sm:w-1/4">
            <ul class="p-0 text-center sm:text-left">
                <li><h6 class="mb-2 font-bold text-lg">Support</h6></li>
                {{--<li><a href="/contact">Contact</a></li>--}}
            </ul>
        </div>

    </div>

    <div class="container px-4 sm:px-8 py-4 pb-8 text-center sm:text-left">
        <img src="/assets/images/omigosh-logo.png" width="25" height="25"> &copy; <span class="text-xl">{{ $page->siteName }}</span> {{ date('Y') }}
    </div>

</footer>
