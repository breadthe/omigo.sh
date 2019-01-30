@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('hero')
    @include('_partials.hero',[
        'title' => 'About Us',
        'description' => 'We have ideas, some become software, some become dust.',
    ])
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

        <p class="mt-4 text-xl font-light">
            This website and the accompanying blog are a small subset of my code experiments and continuous learning.
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
