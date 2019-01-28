@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('hero')
    @include('_partials.hero',[
        'title' => 'Contact Us',
        'description' => '',
    ])
@endsection

@section('body')
<h3>Get In Touch</h3>

<p class="mb-8">
    Contact info coming soon.
</p>

@stop
