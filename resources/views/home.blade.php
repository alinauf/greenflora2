@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/splide.min.css">

@endsection

@section('content')
    <div class=" mx-auto">

        {{--        TODO: Slider--}}

        <div id="splide1" class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    @foreach($carousels as $carousel)
                        <div class="splide__slide ">

                            <div
                                class="relative px-4"
                                style="
      padding-top: 35.5rem;
      padding-bottom: 35.5rem;"
                            >
                                <div class="z-20 relative text-white container mx-auto">
                                    <h1
                                        class="text-center  text-4xl bg-green-500 bg-opacity-40 p-10 font-semibold font-poppins tracking-tight sm:text-5xl lg:text-6xl rounded-lg"

                                    >
                                        <span class="block text-white  ">Welcome to Green Flora</span>
                                        <span class="block text-green-100"
                                        >Your comfort, in Maldives.</span
                                        >
                                    </h1>
                                </div>
                                <div class="absolute inset-0 h-screen z-10">
                                    <img
                                        src="{{"/images/home-page/$carousel"}}"
                                        alt=""
                                        class="h-full w-full object-cover"
                                    />
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>


        <div class="flex flex-col justify-center items-center col-span-1">
            <div class="container mx-auto px-4">
                <div
                    class="text-4xl md:text-5xl mt-20 font-semibold text-gf-main font-poppins"
                >
                    Welcome to Green Flora
                </div>
                <div class="text-2xl font-semibold mt-4 text-gray-800 font-poppins">
                    Your comfort, in Maldives.
                </div>

                <div class="text-lg tracking-wide leading-relaxed mt-10 text-gf-grey">
                    Green Flora is a 6-story modern tourist guest house, located in the
                    heart of Villimale. By normal ferry, it is just 6 minutes away from
                    Male’, the capital city of Maldives. Villimale’ is officially a part
                    of the Capital city and designed to keep as an environmental friendly
                    atmosphere. In this small island, Motor vehicles are prohibited by
                    regulations. Therefore, there are no hustles and bustles like modern
                    cities. Government ferries are available at 24 hours and at every
                    other minute. (This beautiful small island has a long history. It is
                    the first Tourist resort in the country but now it is converted to
                    part of Male’, the Capital of Maldives)
                    <br/><br/>
                    Indeed the lovers of nature will like the peaceful and quietness of
                    the island. On top of this heavenly atmosphere, they will adore the
                    thick greenery of nature’s nest for birds.
                    <br/><br/>
                    Green Flora is in the midst of thick and widespread greenery. A
                    promised land of quietness and peace. Yet we have all the modern
                    facilities that world-class facilities provide for guests. With lift
                    services, we provide 18 air-conditioned rooms with attached bath room
                    with hot and cold water. Wi-Fi is available in the room. Linked to
                    outside-world by Telephone. Mini-bar is kept – and A mini-safe for
                    your valuables. Self-service coffee and tea available in room.
                    <br/><br/>

                    <ul class="list-disc list-outside ml-4">
                        <li>We book reservation for our guests.</li>
                        <li>We offer affordable yet very comfortable accommodations.</li>
                        <li>
                            We receive our guests at airport and arrange return journey.
                        </li>
                        <li>We arrange activities on request basis.</li>
                    </ul>
                </div>

                <div
                    class="relative  pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8"
                >
                    <div class="absolute inset-0">
                        <div class="bg-white h-1/3 sm:h-2/3"></div>
                    </div>
                    <div class="relative max-w-7xl mx-auto">
                        <div class="text-center">
                            <!-- <h2 class="text-2xl tracking-tight font-extrabold text-gf-bggr sm:text-4xl">
                            Our Rooms
                          </h2> -->
                            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-800 sm:mt-4">
                                <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed. -->
                            </p>
                        </div>
                        <div
                            class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
                        >
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img
                                        class="h-48 w-full object-cover"
                                        src="/images/rooms/room-3.jpg"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex-1 bg-gf-main hover:bg-gf-bggr hover:text-dark p-6 flex flex-col justify-between"
                                >
                                    <div class="flex-1">
                                        <a href="rooms" class="block mt-2">
                                            <p class="text-xl text-center font-semibold text-white">
                                                Rooms
                                            </p>
                                            <p class="mt-3 text-base text-gray-800">
                                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum. -->
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img
                                        class="h-48 w-full object-cover"
                                        src="/images/maldives/19.jpeg"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex-1 bg-gf-main hover:bg-gf-bggr hover:text-dark p-6 flex flex-col justify-between"
                                >
                                    <div class="flex-1">
                                        <a href="maldives" class="block mt-2">
                                            <p class="text-xl text-center font-semibold text-white">
                                                Maldives
                                            </p>
                                            <p class="mt-3 text-base text-gray-800">
                                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium. -->
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img
                                        class="h-48 w-full object-cover"
                                        src="/images/maldives/29.jpeg"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex-1 bg-gf-main hover:bg-gf-bggr hover:text-dark p-6 flex flex-col justify-between"
                                >
                                    <div class="flex-1">
                                        <a href="gallery" class="block mt-2">
                                            <p class="text-xl text-center font-semibold text-white">
                                                Gallery
                                            </p>
                                            <p class="mt-3 text-base text-gray-800">
                                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic. -->
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 rounded-xl">
                    <iframe
                        class="w-full rounded-xl"
                        height="500"
                        src="https://www.youtube.com/embed/Ru_NgFmC8MA"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>

                <div class="w-full p-10 rounded-xl">
                    <iframe
                        class="w-full rounded-xl"
                        height="500"
                        src="https://www.youtube.com/embed/QXm3hUPbSN0"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="/js/splide.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#splide1', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                pauseOnHover: false,
            }).mount();

        });

    </script>
@endsection
