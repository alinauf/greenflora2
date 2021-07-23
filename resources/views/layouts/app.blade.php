<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Green Flora</title>
</head>
<body>

<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->

                    <button
                        type="button"
                        @click="toggleButton()"
                        class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <!--
                        Icon when menu is closed.

                        Heroicon name: outline/menu

                        Menu open: "hidden", Menu closed: "block"
                      -->
                        <svg
                            class="block h-6 w-6 closed-button"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <!--
                        Icon when menu is open.

                        Heroicon name: outline/x

                        Menu open: "block", Menu closed: "hidden"
                      -->
                        <svg
                            class="hidden h-6 w-6 opened-button"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center">
                    <NuxtLink to="/">
                        <img
                            src="@/assets/images/green-flora-landscape.jpeg"
                            class="p-4 p-sm-0 w-64"
                            alt="Green Flora Logo"
                        />
                    </NuxtLink>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <NuxtLink
                        to="/"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Home
                    </NuxtLink>

                    <NuxtLink
                        to="our-services"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Our Services
                    </NuxtLink>

                    <NuxtLink
                        to="/rooms"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Rooms
                    </NuxtLink>

                    <NuxtLink
                        to="diving"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Diving
                    </NuxtLink>

                    <NuxtLink
                        to="/maldives"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Maldives
                    </NuxtLink>

                    <NuxtLink
                        to="/about-us"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        About Us
                    </NuxtLink>

                    <NuxtLink
                        to="/contact-us"
                        class="border-transparent text-gray-900 hover:border-gray-300 hover:text-gf-main inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                    >
                        Contact Us
                    </NuxtLink>
                </div>
            </div>
            <div class="hidden  md:flex items-center">
                <!-- <div class="flex-shrink-0"> -->
                <!-- <a
                    href="mailto:greenflora2021@gmail.com"
                    class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:text-white bg-gf-main  shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                  > -->
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
                <!-- <span>Inquire Now</span> -->
                <!-- </a> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <NuxtLink
                to="/"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Home
            </NuxtLink>

            <NuxtLink
                to="our-services"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Our Services
            </NuxtLink>

            <NuxtLink
                to="rooms"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Rooms
            </NuxtLink>

            <NuxtLink
                to="diving"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Diving
            </NuxtLink>

            <NuxtLink
                to="maldives"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Maldives
            </NuxtLink>

            <NuxtLink
                to="about-us"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                About Us
            </NuxtLink>

            <NuxtLink
                to="contact-us"
                class="border-transparent text-gray-800 hover:bg-gray-50 hover:border-gray-300 hover:text-green-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6"
            >
                Contact Us
            </NuxtLink>
        </div>
    </div>
</nav>

@yield('content')


<footer class="bg-gf-main mt-20 max-w flex text-black mx-auto">
    <div class="container mx-auto px-4 py-12">
        <div class="mb-10">
            <p class="text text-hairline text-lg font-semibold py-8 text-italic">
                Spend your vacation here at Green Flora Hotel. Elegant rooms at an
                affordable price.
            </p>
            <div>
                <a
                    class="text inline-block"
                    href="https://www.google.com/maps/place/Green+Flora/@4.1740887,73.4853653,19z/data=!4m11!1m2!3m1!2sGreen+Flora!3m7!1s0x3b3f7e345089221d:0xaae0af6a94e044d4!5m2!4m1!1i2!8m2!3d4.1745269!4d73.485106"
                >
                    <span class="pl-5"></span>📍 Green Flora,<br />
                    <span class="pl-6"></span> Sheikh Abdhu'rahmaan Magu,<br />
                    <span class="pl-6"></span> Villimale’, Malé </a
                ><br /><br />
                <a
                    href="tel:+9603399737"
                    class="text text-dark hover:text-black text-left inline-block mt-2"
                >Landline: (960)3399737</a
                >
                <br />
                <a
                    href="tel:+9607777655"
                    class="text text-dark hover:text-black text-left inline-block mt-2"
                >Hotline: (960)7655107</a
                >
                <br />

                <a
                    href="tel:+9607777655"
                    class="text text-dark hover:text-black text-left inline-block mt-2"
                >Viber: (960)7655107</a
                >
                <br />
                <a
                    href="tel:+9607777655"
                    class="text text-dark hover:text-black text-left inline-block mt-2"
                >WhatsApp: (960)7655107</a
                >
                <br />

                <a
                    class="text text-dark hover:text-black inline-block mt-2 "
                    href="mailto:greenflora2021@gmail.com"
                >
                    Email: greenflora2021@gmail.com</a
                >
                <br />

                <a
                    href=""
                    class="text text-dark hover:text-black text-left inline-block mt-2"
                >Facebook ID: greenflora2021</a
                >
                <br />
            </div>
        </div>
        <div class="flex justify-start items-start">
            <ul class="list-reset flex">
                <li class="mr-8">
                    <a href="/" class="no-underline hover:underline text-white">
                        <h2 class="text-2xl text-white text-bold">Green Flora</h2>
                    </a>
                </li>
            </ul>

            <ul class="list-reset self-center flex ml-auto">
                <li class="mr-8">
                    <a
                        class="text-white text-bold no-underline hover:text-black"
                        href="https://www.instagram.com/greenfloramaldives/"
                    >Instagram</a
                    >
                </li>
                <li class="mr-8">
                    <a
                        class="text-white text-bold no-underline hover:text-black"
                        href="https://www.facebook.com/greenflora2021"
                    >Facebook</a
                    >
                </li>
            </ul>
        </div>
    </div>
</footer>


<script>

    function toggleButton() {
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector("#mobile-menu");

        const closed_menu = document.querySelector(".closed-button");
        const opened_menu = document.querySelector(".opened-button");

        menu.classList.toggle("hidden");
        closed_menu.classList.toggle("hidden");
        opened_menu.classList.toggle("hidden");
    }

</script>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
