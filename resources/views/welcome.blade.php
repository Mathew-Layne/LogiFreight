<x-header>

    <div class='h-full'>
        <nav
            class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-gray-800">
            <div class="container px-4 mx-auto flex flex-wrap items-center ">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"> <a
                        class="text-sm font-bold leading-relaxed inline-block mr-4 py-1 whitespace-nowrap uppercase text-white"
                        href="/"><img class=' w-5/12' src="img/logo.png" alt=""> </a><button
                        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                        type="button" onclick="toggleNavbar('example-collapse-navbar')"> <i
                            class="text-white fas fa-bars"></i> </button> </div>
                <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                    id="example-collapse-navbar">
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
    
                        <li class="flex items-center"> <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="{{ url('donor/register') }}">
                                Home</a> </li>
                        <li class="flex items-center"> <a
                                class=" lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="{{ url('register/recipient') }}"><span class="inline-block ml-2">Rates</span></a> </li>
                        <li class="flex items-center"> <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="https://twitter.com/abhinav"><span class="inline-block ml-2">About</span></a> </li>
                        <li class="flex items-center"> <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="https://github.com/abhinavs/cookie"><span class="inline-block ml-2">Contact
                                    Us</span></a> </li>
                        @if(Auth::check())
    
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li class="flex items-center"><button
                                    class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                    type="submit" style="transition: all 0.15s ease 0s;"> <i
                                        class="fas fa-arrow-alt-circle-right"></i> Logout </button> </li>
                        </form>
                        @else
                        <li class="flex items-center"> <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="{{ route('register') }}"><span class="inline-block ml-2">Register</span></a> </li>
    
                        <li class="flex items-center"><a href="{{ route('login') }}"> <button
                                    class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                    type="button" style="transition: all 0.15s ease 0s;"> <i
                                        class="fas fa-arrow-alt-circle-right"></i>Login
                                </button></a> </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    
    
        <div class="text-gray-800 antialiased">
            <main>
                <div class="relative pt-16 pb-32 flex content-center items-center justify-center h-screen">
                    <div class="absolute top-0 w-full h-full bg-center bg-cover"
                        style='background-image: url("https://source.unsplash.com/1600x900/?online shopping");'>
                        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                    </div>
                    <div class="container relative mx-auto">
                        <div class="items-center flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                                <div class="pr-12">
                                    <h1 class="text-white font-semibold text-5xl">Online Shopping Made Easy</h1>
                                    <p class="mt-4 text-lg text-gray-300">There's nothing better than online shopping in your PJ's with a glass of wine with the kids asleep!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                        style="height: 70px; transform: translateZ(0px);"> <svg class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1"
                            viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg> 
                    </div>
                </div>
               
                <section class="relative py-20">
                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px; transform: translateZ(0px);"> <svg class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1"
                            viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg> </div>
                    <div class="container mx-auto px-4">
                        <div class="items-center flex flex-wrap">
                            <div class="lg:w-3/12 md:w-5/12 ml-auto mb-8 mr-auto px-4"> <img alt="..."
                                    class="max-w-full rounded-lg shadow-lg"
                                    src="https://source.unsplash.com/900x1400/?online shopping" />
                            </div>
                            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                                <div class="md:pr-12">
                                    <div
                                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                        <i class="fas fa-rocket text-xl"></i>
                                    </div>
                                    <h3 class="text-3xl font-semibold">About Us</h3>
                                    <p class="mt-4 text-lg leading-relaxed text-gray-600"> With more than 18,000 members
                                        from nearly 100 countries, the Amber Donors is the world's largest professional
                                        society serving
                                        both clinicians and scientists around the world who are working to conquer blood
                                        diseases and savinvg lives.</p>
                                    <ul class="list-none mt-6">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div> <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="fas fa-fingerprint"></i></span> </div>
                                                <div>
                                                    <h4 class="text-gray-600"> Safe and secure environment </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div> <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                                        <i class="fas fa-award"></i></span> </div>
                                                <div>
                                                    <h4 class="text-gray-600">Blood bank awards</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div> <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="far fa-paper-plane"></i></span> </div>
                                                <div>
                                                    <h4 class="text-gray-600">World class Customer service</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-20 pb-48">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap justify-center text-center">
                            <div class="w-full lg:w-6/12 px-4">
                                <h2 class="text-4xl font-semibold">Testimonial</h2>
                                <section class="text-gray-600 body-font pt-16">
                                    <div class="container mx-auto">
                                        <div class="xl:w-11/12 lg:w-3/4 w-full mx-auto text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="inline-block w-8 h-8 text-red-600 mb-8"
                                                viewBox="0 0 975.036 975.036">
                                                <path
                                                    d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                            <p class="leading-relaxed text-lg">As a parent of a child who used blood
                                                products to survive, it has been an honor for me to be employed at Amber
                                                Donors.
                                                I started this journey in 2000 as a recruitment volunteer sharing my
                                                daughter’s story throughout the
                                                community and surrounding collection areas to help increase minority blood
                                                donations and sickle cell awareness. My
                                                daughter, Precious Gamble, received monthly blood transfusions in order to
                                                keep her hemoglobin as close to twelve as
                                                possible to prevent her from having additional strokes due to sickle cell
                                                disease.</p>
                                            <span class="inline-block h-1 w-10 rounded bg-red-600 mt-8 mb-6"></span>
                                            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Caroline
                                                Williams</h2>
                                            <p class="text-gray-500">Senior Nurse</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-20 relative block bg-gray-900">
                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px; transform: translateZ(0px);"> <svg class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1"
                            viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg> </div>
                    <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                        <div class="flex flex-wrap text-center justify-center">
                            <div class="w-full lg:w-8/12 px-4">
                                <h2 class="text-4xl font-semibold text-white">Contact Us</h2>
                                <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500"> To give real service you must
                                    add something
                                    which cannot be bought or measured with money, and that is sincerity and integrity. </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative block py-24 lg:pt-0 bg-gray-900">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                            <div class="w-full lg:w-6/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                                    <div class="flex-auto p-5 lg:p-10">
                                        <h4 class="text-2xl font-semibold">Have Questions</h4>
                                        <p class="leading-relaxed mt-1 mb-4 text-gray-600"> Complete this form and we will
                                            get back to you in 24 hours. </p>
                                        <div class="relative w-full mb-3 mt-8"> <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="full-name">Full Name</label><input type="text"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Full Name" style="transition: all 0.15s ease 0s;" /> </div>
                                        <div class="relative w-full mb-3"> <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="email">Email</label><input type="email"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Email" style="transition: all 0.15s ease 0s;" /> </div>
                                        <div class="relative w-full mb-3"> <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="message">Message</label><textarea rows="4" cols="80"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Type a message..."></textarea> </div>
                                        <div class="text-center mt-6"> <button
                                                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                type="button" style="transition: all 0.15s ease 0s;"> Send Message </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <script>
            function toggleNavbar(e){document.getElementById(e).classList.toggle("hidden"),document.getElementById(e).classList.toggle("block")}
        </script>
        <footer class="relative bg-gray-300 pt-8 pb-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 px-4">
                        <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-gray-700"> Find us on any of these platforms, we respond 1-2
                            business days. </h5>
                        <div class="mt-6"> <button
                                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"> <i class="flex fab fa-twitter"></i></button><button
                                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"> <i class="flex fab fa-facebook-square"></i></button><button
                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"> <i class="flex fab fa-dribbble"></i></button><button
                                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"> <i class="flex fab fa-github"></i> </button> </div>
                        <div class="text-gray-600 text-sm py-1 mt-4"> Copyright © 2021 <a href="/"
                                class="text-gray-600 hover:text-gray-900">Company-XXX</a> &nbsp; • &nbsp; <a
                                href="https://icons8.com/icon/97693/cookie" target="_blank" rel="noreferrer">Cookie icon by
                                Icons8</a> </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6 mt-4">
                            <div class="w-full lg:w-4/12 md:w-6/12 px-0 ml-auto"> <span
                                    class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                                <ul class="list-unstyled">
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="/about">About Us</a> </li>
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="/blog">Blog</a> </li>
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://www.github.com/abhinavs">Github</a> </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 md:w-6/12 mt-4 sm:mt-0 md:px-4"> <span
                                    class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other Resources</span>
                                <ul class="list-unstyled">
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://github.com/abhinavs/cookie/blob/master/LICENSE.md">MIT License</a>
                                    </li>
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="/terms">Terms &amp; Conditions</a> </li>
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="/privacy-policy">Privacy Policy</a> </li>
                                    <li> <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="/contact-us">Contact Us</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-400" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full px-4 mx-auto text-center">
                        <div class="text-sm text-gray-600"> Powered by <a class="hover:text-indigo-600 font-semibold"
                                href="https://www.soopr.co" target="_blank" rel="noreferrer">Soopr</a> &nbsp; • &nbsp;
                            Theme&nbsp;<a class="hover:text-indigo-600 font-semibold"
                                href="https://github.com/abhinavs/cookie" target="_blank" rel="noreferrer">Cookie</a> </div>
                    </div>
                </div>
            </div>
        </footer>
        <script async='' data-soopr-token="" defer='defer' src="https://sdk.soopr.co/soopr.js"></script>
    </div>


</x-header>