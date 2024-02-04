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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
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
    <main class="m-auto pt-16 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-100 ">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <div class="col-span-12">
                        <div class="overflow-auto lg:overflow-visible">
                            <table class="table w-full text-gray-400 border-separate space-y-6 text-sm">
                                <thead class="bg-light-800 text-gray-500">
                                    <tr>
                                        <th class="p-3">Book Title</th>
                                        <th class="p-3 text-left">Description</th>
                                        <th class="p-3 text-left">Reservation date</th>
                                        <th class="p-3 text-left">return date</th>
                                        <th class="p-3 text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr class="bg-light-800">
                                            <td class="p-3">
                                                <div class="flex align-items-center">
                                                    <img class="rounded-full h-12 w-12 object-cover"
                                                        src="{{ Storage::url($reservation->book->image) }}"
                                                        alt="unsplash image">
                                                    <div class="ml-3">
                                                        <div class="">{{ $reservation->book->author }}</div>
                                                        <div class="text-gray-500">{{ $reservation->book->title }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3">{{ $reservation->description }}</td>
                                            <td class="p-3">{{ $reservation->reservation_date }}</td>
                                            <td class="p-3">{{ $reservation->return_date }}</td>
                                            <td class="p-3">
                                                <a href="{{ route('reservations.edit', $reservation->id) }}"
                                                    class="text-gray-400 hover:text-gray-100 mx-2">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                <form action="{{ route('reservations.destroy', $reservation->id) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-gray-400 hover:text-gray-100 ml-2">
                                                        <i
                                                            class="material-icons-round text-base">delete_outline</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
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
