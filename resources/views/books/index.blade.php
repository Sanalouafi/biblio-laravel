<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BookLand</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
</head>

<body>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>

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

                    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                        @csrf

                        <button type="button" onclick="document.getElementById('logoutForm').submit()"
                            class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                class="" viewBox="0 0 16 16">
                                <path
                                    d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                        </button> <span class="font-bold text-sm ml-2">Logout</span>

                    </form>

                </div>
            </div>
        </aside>

        <main class="ml-60 pt-16 max-h-screen overflow-auto">
            <div class="px-6 py-8">
                <div class="max-w-100 ">
                    <div class="bg-white rounded-3xl p-8 mb-5">
                        <h1 class="text-3xl font-bold mb-10 text-center">Book Section</h1>


                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <a href="{{ route('books.create') }}">Add new book</a>
                        </button>
                        <div class="col-span-12">
                            <div class="overflow-auto lg:overflow-visible">
                                <table class="table w-full text-gray-400 border-separate space-y-6 text-sm">
                                    <thead class="bg-light-800 text-gray-500">
                                        <tr>
                                            <th class="p-3">Book Title</th>
                                            <th class="p-3 text-left">Description</th>
                                            <th class="p-3 text-left">Genre</th>
                                            <th class="p-3 text-left">Publication Year</th>
                                            <th class="p-3 text-left">Total Copies</th>
                                            <th class="p-3 text-left">Available Copies</th>
                                            <th class="p-3 text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr class="bg-light-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <img class="rounded-full h-12 w-12 object-cover"
                                                            src="{{ Storage::url($book->image) }}"
                                                            alt="unsplash image">
                                                        <div class="ml-3">
                                                            <div class="">{{ $book->author }}</div>
                                                            <div class="text-gray-500">{{ $book->title }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">{{ $book->description }}</td>
                                                <td class="p-3">{{ $book->genre }}</td>
                                                <td class="p-3">{{ $book->publication_year }}</td>
                                                <td class="p-3">{{ $book->total_copies }}</td>
                                                <td class="p-3">{{ $book->available_copies }}</td>
                                                <td class="p-3">
                                                    <a href="{{ route('books.show', $book->id) }}"
                                                        class="text-gray-400 hover:text-gray-100 mr-2">
                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                    </a>
                                                    <a href="{{ route('books.edit', $book->id) }}"
                                                        class="text-gray-400 hover:text-gray-100 mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <form action="{{ route('books.destroy', $book->id) }}"
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
    </body>
    <!-- partial -->

</body>

</html>
