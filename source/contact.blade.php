@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('hero')
    <div class="hero h-auto py-4 sm:py-32 flex items-center">
        <div class="container w-full mx-auto">
            <div class="w-full">
                <div class="text-center mb-2">
                    <h1 class="text-3xl sm:text-5xl font-light text-white">Contact</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body')
<h3>Get In Touch</h3>

<p class="mb-8">
    Contact info coming soon.
</p>

@stop
