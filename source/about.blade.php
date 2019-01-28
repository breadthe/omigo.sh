@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('hero')
    <div class="hero h-auto py-4 sm:py-32 flex items-center">
        <div class="container w-full mx-auto">
            <div class="w-full p-2 mb-8">
                <div class="text-center mb-2">
                    <h1 class="text-3xl sm:text-5xl font-light text-white">About Us</h1>
                </div>

                <div class="text-center">
                    <h2 class="text-xl sm:text-3xl font-light text-grey-lightest text-shadow">
                        We have ideas, some become software, some become dust.
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <div class="container w-5/6 mx-auto">

        <h3 class="mt-6">Who Are We?</h3>

        <p class="mt-4 text-xl font-light">
            <strong class="font-bold">{{ $page->siteName }}</strong> was founded in 2018 as a private software development organization focused on building interesting, useful, and quirky apps.
        </p>

        <p class="mt-4 text-xl font-light">
            "We" are a single developer based in Illinois U.S.A, with over 20 years experience in the code-tinkering industry. On this website I shall simply be known as "The Dev".
        </p>

        <p class="mt-4 text-xl font-light">
            As long as I can remember, I enjoyed building things. For lack of talent in the arts, I gravitated towards one of the few mediums that allowed me to express my creativity: code.
        </p>

        {{--<h3 class="mt-6">Our Mission</h3>

        <p class="mt-4 text-xl font-light">
            My fascination for product design
        </p>

        <p class="mt-4 text-xl font-light">
            In time.
        </p>--}}
    </div>
@endsection
