<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Gudang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body class="bg-blue-50 muli">
    <nav class="flex py-5 bg-blue-dark-20 w-100pc flex-column md-flex-row md-px-10">
        <div class="flex justify-between">
            <a href="#" class="flex items-center p-2 mr-4 no-underline">
                <div class="p-2 mx-auto max-w-7xl lg:p-2 max-h-l2">
                    <img src="{{ asset('frontend/assets/images/store.png') }}" height="60" width="60">
                </div>
                <text class="p-2 mx-auto text-xl font-bold text-white lg:p-2 max-h-l2 dark:text-white">
                    Manajemen Toko
                </text>
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center p-1 m-3 ml-auto opacity-50 md-hidden indigo-lighter hover-opacity-100 ease-300">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="flex items-center sm-w-100pc flex-column md-flex md-flex-row md-justify-end">
            <a href="#home" class="py-3 mx-3 no-underline fs-s1 indigo hover-underline">Home</a>
            <a href="#features" class="py-3 mx-3 no-underline fs-s1 indigo hover-underline">Features</a>
            <a href="{{ route('dashboard') }}" class="py-3 mx-3 no-underline fs-s1 indigo hover-underline">Dashboard</a>
            <a href="{{ url('about') }}" class="py-3 mx-3 no-underline fs-s1 indigo hover-underline">About Us</a>
            @if (Route::has('login'))
                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="mx-5 font-semibold text-gray-600 no-underline bg-white button black fw-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="mx-5 font-semibold text-gray-600 no-underline bg-white button black fw-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="mx-5 font-semibold text-gray-600 no-underline bg-white button black fw-600ml-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- hero section -->
    <section id="home" class="flex items-center justify-start min-h-100vh">
        <div class="mx-5 md-mx-l5">

            <div>
                <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900 ">Selamat Datang<br />Website Toko</h1>


            </div>
    </section>

    <!-- features -->
    <section id="features" class="p-10 md-p-l5">
        <div class="flex mx-auto flex-column md-flex-row">
            <div class="w-100pc md-w-40pc">
                <div class="p-5 m-5 card br-8 bg-gray-dark">

                    <h4 class="mb-5 white fw-600 fs-m3">Product</h4>
                    <div class="opacity-100 indigo-lightest fw-600 fs-m1 lh-3">Disini anda bisa melihat pilihan product
                        yang sudah kami sediakan
                    </div>
                    <a href="{{ route('todo.index') }}"
                        class="mt-5 no-underline button bg-indigo-lightest-10 fs-s3 white hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
                </div>
            </div>
            <div class="w-100pc md-w-40pc">
                <div class="p-5 m-5 card br-8 bg-gray-dark">
                    <h4 class="mb-5 white fw-600 fs-m3">Total</h4>
                    <div class="opacity-100 indigo-lightest fw-600 fs-m1">Anda dapat melihat total barang yang telah
                        disediakan</div>
                    <a href="{{ route('total.index') }}"
                        class="mt-5 no-underline button bg-indigo-lightest-10 fs-s3 white hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
                </div>
            </div>
            <div class="w-100pc md-w-40pc">
                <div class="p-5 m-5 card br-8 bg-gray-dark">
                    <h4 class="mb-5 white fw-600 fs-m3">Category</h4>
                    <div class="mb-5 opacity-100 indigo-lightest fw-600 fs-m1">Dapatkan kategory yang anda inginkan
                    </div>
                    <a href="{{ route('category.index') }}"
                        class="mt-6 no-underline button bg-indigo-lightest-10 fs-s3 white hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
                </div>
            </div>
        </div>
    </section>
