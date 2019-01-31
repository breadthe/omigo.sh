<section class="hero h-auto flex items-center flex-col {{ $page->belongsTo('/blog') ? 'pt-8 sm:pt-16' : 'hero-red py-8 sm:py-16' }}">
        <div class="text-center mb-2">
            <h1 class="text-3xl sm:text-5xl font-light uppercase {{ $page->belongsTo('/blog') ? 'text-grey-darkest' : 'text-white' }}">
                {{ $title }}
            </h1>
        </div>

        <div class="text-center px-6 sm:px-0 max-w-md">
            <h2 class="text-xl sm:text-3xl font-light text-shadow {{ $page->belongsTo('/blog') ? 'text-grey-dark' : 'text-grey-lightest' }}">
                {{ $description }}
            </h2>
        </div>
</section>
