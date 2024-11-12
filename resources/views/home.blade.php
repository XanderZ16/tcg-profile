@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.navbar2')
    @include('partials.navbar')

    <!-- Header Section dengan Background -->
    <header class="relative bg-center bg-cover h-96" style="background-image: url('/public/avengers-endgame.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
            <div>
                <h1 class="mb-4 text-4xl font-bold">PT. Trio Ciptra Gemilang</h1>
                <p class="text-lg">Lorem Ipsumm dolooorrrr sit ameeeettttt.</p>
            </div>
        </div>
    </header>

    <!-- Section Deskripsi Perusahaan -->
    <section class="py-16 bg-white">
        <div class="container px-4 mx-auto text-center">
            <h2 class="mb-8 text-3xl font-semibold text-gray-800">About Us</h2>
            <p class="mb-8 text-gray-600">wbdjbquwcuqbeubbwhebhbwhecbhwvebhevhvhebvhqbehbchbckjbckbbwbckjbqhbhbwdbqcbkqbqbbqhbhbwchjb</p>
        </div>
    </section>

    <!-- Section Layanan -->
    <section class="py-16 bg-gray-100">
        <div class="container px-4 mx-auto text-center">
            <h2 class="mb-8 text-3xl font-semibold text-gray-800">Layanan Kami</h2>
            <div class="flex flex-wrap -mx-4">
                <!-- Card Layanan -->
                <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h3 class="mb-2 text-xl font-semibold">Layanan 1</h3>
                        <p class="text-gray-600">Deskripsi singkat mengenai layanan 1 yang disediakan oleh perusahaan.</p>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h3 class="mb-2 text-xl font-semibold">Layanan 2</h3>
                        <p class="text-gray-600">Deskripsi singkat mengenai layanan 2 yang disediakan oleh perusahaan.</p>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h3 class="mb-2 text-xl font-semibold">Layanan 3</h3>
                        <p class="text-gray-600">Deskripsi singkat mengenai layanan 3 yang disediakan oleh perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
