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

<body class="relative bg-yellow-50 overflow-hidden max-h-screen">

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
                            <a href="{{route('users.index')}}"
                                class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                                </svg>User
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
                    <h1 class="text-3xl font-bold mb-10 text-center">Add new book</h1>

                    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" class="w-full max-w-xl mx-auto bg-white rounded shadow-xl relative py-4">                        @csrf
                        <div
                            class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                            <label for="image-input" class="cursor-pointer">
                                <img id="preview-image"
                                    class="h-40 w-40 rounded-full shadow-xl border-2 border-gray-400"
                                    src="https://images.unsplash.com/photo-1523199455310-87b16c0eed11?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                                    alt="logo">
                            </label>
                            <input type="file" id="image-input" name="image" class="hidden"
                                onchange="previewImage(event)">
                        </div>
                        <div class="py-2 px-4 md:px-8">

                            <div class="bg-gray-200 rounded py-2">

                                <div class="mb-1 p-2">
                                    <input id="title" name="title" type="text" placeholder="Book title"
                                        required
                                        class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                                <div class="mb-1 p-2">
                                    <input id="description" name="description" type="text"
                                        placeholder="Book description" required
                                        class="w-full h-20 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                                <div class="mb-1 p-2">
                                    <input id="author" name="author" type="text" placeholder="Book author"
                                        required
                                        class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                                <div class="mb-1 p-2">
                                    <input id="genre" name="genre" type="text" placeholder="genre" required
                                        class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>
                                <div class="mx-auto flex justify-center space-x-20">
                                    <div>
                                        <input id="total_copies" name="total_copies" type="number"
                                            placeholder="total Copies" required
                                            class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                    </div>
                                    <div>
                                        <input id="available_copies" name="available_copies" type="number"
                                            placeholder="available Copies" required
                                            class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                    </div>
                                </div>
                                <div class="mb-1 p-2">
                                    <input id="publication_year" name="publication_year" type="date"
                                        placeholder="publication Year" required
                                        class="w-full h-10 px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                                </div>


                            </div>
                            <div class="mt-4">
                                <div class="w-full">
                                    <button
                                        class="h-auto lg:h-12 text-xs py-1 lg:py-2 px-2 lg-px-4 text-white font-light tracking-wider bg-gray-900 rounded-lg uppercase w-full focus:outline-none focus:shadow-outline"
                                        type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </main>
</body>
<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview-image');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</html>
