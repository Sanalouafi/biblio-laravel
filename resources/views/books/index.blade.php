<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BookLand</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../public/style.css">
</head>

<body>
    <!-- partial:index.partial.html -->

    <body class="relative bg-yellow-50 overflow-hidden max-h-screen">
        <header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center justify-between">
                </div>
            </div>
        </header>

        <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
            <div class="flex flex-col justify-between h-full">
                <div class="flex-grow">
                    <div class="px-4 py-6 text-center border-b">
                        <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Book</span>Land
                        </h1>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="{{ route('books.index') }}"
                                    class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" class="bi bi-book-open text-lg mr-4" viewBox="0 0 16 16">
                                        <path
                                            d="M14.734 0A1.996 1.996 0 0 1 16 1.265V14.74a1.996 1.996 0 0 1-1.266 1.265L8 15.767l-6.734.238a1.996 1.996 0 0 1-1.265-1.266L0 1.265A1.996 1.996 0 0 1 1.266 0H14.73zM6.13 1.04C6.544.375 7.21 0 8 0c.79 0 1.456.375 1.87 1.04a2.5 2.5 0 0 0-1.74 0zM1 2.39L8 1l7 1.39v10.22l-7-1.39-7 1.39V2.39zM8 2a2 2 0 0 0-1.74 1.04l-.426.852.286.572.426-.852A2 2 0 0 0 8 2zm-6.144 9.712l5.217-1.036 1.036 5.217-5.217 1.036-1.036-5.217zM7 12l1-.25V3L7 2l-1 .75v8.5L7 12z" />
                                    </svg>Books
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                        <path
                                            d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                                    </svg>Task list
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                        <path
                                            d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                    </svg>Projects
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                        <path
                                            d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>Tags
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-4">
                    <button type="button"
                        class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            class="" viewBox="0 0 16 16">
                            <path
                                d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </button> <span class="font-bold text-sm ml-2">Logout</span>
                </div>
            </div>
        </aside>

        <main class="ml-60 pt-16 max-h-screen overflow-auto">
            <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-3xl p-8 mb-5">
                        <h1 class="text-3xl font-bold mb-10">Messaging ID framework development for the marketing branch
                        </h1>

                        <div class="flex min-h-screen items-center justify-center bg-white">
                            <div class="p-6 overflow-scroll px-0">
                                <table class="w-full min-w-max table-auto text-left">
                                    <thead>
                                        <tr>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                    Transaction</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                    Amount</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                    Date</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                    Status</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                    Account</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                                </p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg"
                                                        alt="Spotify"
                                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                        Spotify</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    $2,500</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    Wed 3:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                                        style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png"
                                                            alt="visa"
                                                            class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                                            visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                            06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                                    type="button">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-amazon.svg"
                                                        alt="Amazon"
                                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                        Amazon</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    $5,000</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    Wed 1:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                                        style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/mastercard.png"
                                                            alt="master-card"
                                                            class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                                            master card
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                            06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                                    type="button">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-pinterest.svg"
                                                        alt="Pinterest"
                                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                        Pinterest</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    $3,400</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    Mon 7:40pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-amber-500/20 text-amber-900 py-1 px-2 text-xs rounded-md"
                                                        style="opacity: 1;">
                                                        <span class="">pending</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/mastercard.png"
                                                            alt="master-card"
                                                            class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                                            master card
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                            06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                                    type="button">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-google.svg"
                                                        alt="Google"
                                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                        Google</p>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    $1,000</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    Wed 5:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                                        style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png"
                                                            alt="visa"
                                                            class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                                            visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                            06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                                    type="button">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4">
                                                <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-netflix.svg"
                                                        alt="netflix"
                                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                        netflix</p>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    $14,000</p>
                                            </td>
                                            <td class="p-4">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    Wed 3:30am</p>
                                            </td>
                                            <td class="p-4">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md"
                                                        style="opacity: 1;">
                                                        <span class="">cancelled</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png"
                                                            alt="visa"
                                                            class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                                            visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                            06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                                    type="button">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                                    <div class="text-sm text-gray-700 py-1">
                                        Made with <a class="text-gray-700 font-semibold"
                                            href="https://www.material-tailwind.com/?ref=tailwindcomponents"
                                            target="_blank">Material Tailwind</a> by <a
                                            href="https://www.creative-tim.com?ref=tailwindcomponents"
                                            class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <!-- partial -->

</body>

</html>
