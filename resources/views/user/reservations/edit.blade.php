<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Book Land
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="{{ route('user.index') }}">
                    <img src="{{ asset('images/logo.png') }}" class="h-8 fill-current inline" alt=""
                        srcset="">
                    Book Land
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">

                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="{{ route('user.index') }}">Books</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline"
                            href="{{ route('reservations.index', ['user_id' => Auth::user()->id]) }}">
                            My Reservations
                        </a>
                    </li>

                </ul>
                <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                    @csrf
                    <button id="navAction"
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <section class="bg-white border-b py-8 mt-18">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-black text-3xl font-bold mb-10 text-center">Edit Your reservation</h1>

                    <form method="POST" action="{{ route('reservations.update', $reservation->id) }}" enctype="multipart/form-data" class="w-full max-w-xl mx-auto bg-white rounded shadow-xl relative py-4">
                        @csrf
                        @method('PUT')
                        <div class="py-2 px-4 md:px-8">
                            <div class="bg-gray-200 rounded py-2">
                                <input type="hidden" name="user_id" value="{{ $reservation->user_id }}">
                                <input type="hidden" name="book_id" value="{{ $reservation->book_id }}">
                                <div class="mb-1 p-2">
                                    <label class="text-black" for="">Reservation date:</label>
                                    <input id="reservation_date" name="reservation_date" type="date" required
                                        value="{{ $reservation->reservation_date }}"
                                        class="w-full h-10 mt-5 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                                <div class="mb-1 p-2">
                                    <label class="text-black" for="">Return date:</label>
                                    <input id="return_date" name="return_date" type="date" required
                                        value="{{ $reservation->return_date }}"
                                        class="w-full h-10 mt-5 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="w-full">
                                    <button class="h-auto lg:h-12 text-xs py-1 lg:py-2 px-2 lg-px-4 text-white font-light tracking-wider bg-gray-900 rounded-lg uppercase w-full focus:outline-none focus:shadow-outline" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>




                </div>
            </div>



        </div>
    </section>
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-black");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-black");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-black");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
