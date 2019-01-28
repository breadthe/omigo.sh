@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="tw-container tw-w-5/6 tw-mt-6 tw-mx-auto">
        <h3 class="tw-mt-6">Who Are We?</h3>

        <p class="tw-mt-4 tw-text-xl tw-font-light">
            <strong class="tw-font-bold">{{ $page->siteName }}</strong> was founded in 2018 as a private software development organization focused on building interesting, useful, and quirky apps.
        </p>

        <p class="tw-mt-4 tw-text-xl tw-font-light">
            "We" are a single developer based in Illinois U.S.A, with over 20 years experience in the code-tinkering industry. On this website I shall simply be known as "The Dev".
        </p>

        <p class="tw-mt-4 tw-text-xl tw-font-light">
            As long as I can remember, I enjoyed building things. For lack of talent in the arts, I gravitated towards one of the few mediums that allowed me to express my creativity: code.
        </p>

        {{--<h3 class="tw-mt-6">Our Mission</h3>

        <p class="tw-mt-4 tw-text-xl tw-font-light">
            My fascination for product design
        </p>

        <p class="tw-mt-4 tw-text-xl tw-font-light">
            In time.
        </p>--}}
    </div>
@endsection
