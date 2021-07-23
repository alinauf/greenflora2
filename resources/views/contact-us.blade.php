@extends('layouts.app')

@section('title', 'Apply To Become A Vendor')

@section('content')
    <!-- Side-by-side grid -->
    <div class="bg-white">
        <div
            class="max-w-md mx-auto py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="divide-y divide-warm-gray-200">
                <section
                    class="lg:grid lg:grid-cols-3 lg:gap-8"
                    aria-labelledby="contact-heading"
                >
                    <h2
                        id="contact-heading"
                        class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl"
                    >
                        Get in touch
                    </h2>
                    <div
                        class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2"
                    >
                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                Landline
                            </h3>
                            <dl class="mt-2 text-base text-warm-gray-500">
                                <div>
                                    <dt class="sr-only">
                                        Landline
                                    </dt>
                                    <dd></dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">
                                        Phone number
                                    </dt>
                                    <dd>
                                        (960) 339 9737
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                Email
                            </h3>
                            <dl class="mt-2 text-base text-warm-gray-500">
                                <div>
                                    <dt class="sr-only">
                                        Email
                                    </dt>
                                    <dd></dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">
                                        Email
                                    </dt>
                                    <dd>
                                        greenflora2021@gmail.com
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                Hotline, Viber, WhatsApp
                            </h3>
                            <dl class="mt-2 text-base text-warm-gray-500">
                                <div>
                                    <dt class="sr-only">
                                        Phone number
                                    </dt>
                                    <dd></dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">
                                        Phone number
                                    </dt>
                                    <dd>
                                        (960) 765 5107
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                Facebook ID
                            </h3>
                            <dl class="mt-2 text-base text-warm-gray-500">
                                <div>
                                    <dt class="sr-only"></dt>
                                    <dd></dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">
                                        Facebook
                                    </dt>
                                    <dd>
                                        greenflora2021
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                <!-- Reservation -->
                            </h3>
                            <dl class="mt-2 text-base text-warm-gray-500">
                                <a
                                    href="mailto:greenflora2021@gmail.com"
                                    class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:text-white bg-gf-main  shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    <!-- Heroicon name: solid/plus -->
                                    <!-- <svg
                                      class="-ml-1 mr-2 h-5 w-5"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                      />
                                    </svg> -->
                                    <span>Book Now</span>
                                </a>
                            </dl>
                        </div>
                    </div>
                </section>
                <section
                    class="mt-16 pt-16 lg:grid lg:grid-cols-3 lg:gap-8"
                    aria-labelledby="location-heading"
                >
                    <h2
                        id="location-heading"
                        class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl"
                    >
                        Location
                    </h2>
                    <div
                        class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-1 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2"
                    >
                        <div>
                            <a
                                href="https://www.google.com/maps/place/Green+Flora/@4.1740887,73.4853653,19z/data=!4m11!1m2!3m1!2sGreen+Flora!3m7!1s0x3b3f7e345089221d:0xaae0af6a94e044d4!5m2!4m1!1i2!8m2!3d4.1745269!4d73.485106"
                            >
                                <img :src="`GreenFlora Location.png`" alt="" />
                            </a>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-warm-gray-900">
                                <a
                                    class="text inline-block"
                                    href="https://www.google.com/maps/place/Green+Flora/@4.1740887,73.4853653,19z/data=!4m11!1m2!3m1!2sGreen+Flora!3m7!1s0x3b3f7e345089221d:0xaae0af6a94e044d4!5m2!4m1!1i2!8m2!3d4.1745269!4d73.485106"
                                >
                                    <span class=""></span>📍 Green Flora,<br />
                                    <span class=""></span> Sheikh Abdhu'rahmaan Magu,<br />
                                    <span class=""></span> Villimale’, Malé
                                </a>
                            </h3>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
