@extends('layouts.app')

@section('css')
    <link type="text/css" rel="stylesheet" href="/css/lightgallery.css" />

    <link type="text/css" rel="stylesheet" href="/css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="/css/lg-thumbnail.css" />

@endsection

@section('content')

    <div class="relative py-16 bg-white overflow-hidden">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <!-- <span
                      class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase"
                      >Rooms</span
                    > -->
                    <span
                        class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gf-main sm:text-4xl"
                    >Gallery</span
                    >
                </h1>
            </div>
        </div>
    </div>

    <div id="animated-thumbnails-gallery" class="container  px-4 mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 ">

        @foreach($galleryImages as $galleryImage)
            <a href="{{"/images/$galleryImage"}}" class="rounded-lg overflow-hidden cursor-pointer">
                <img src="{{"/images/$galleryImage"}}"/>
            </a>
        @endforeach
    </div>
@endsection

@section('scripts')

    <script src="/js/lightgallery.min.js"></script>

    <!-- lightgallery plugins -->
    <script src="/js/lg-thumbnail.umd.js"></script>
    <script src="/js/lg-zoom.umd.js"></script>
    <script>
        lightGallery(document.getElementById('animated-thumbnails-gallery'), {
            thumbnail: true,
            counter:false,

        });
    </script>

@endsection
