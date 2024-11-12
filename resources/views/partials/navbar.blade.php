<!-- navbar.blade.php -->
<nav class="flex items-center justify-between px-6 text-lg font-bold text-black bg-white py-7">
    <!-- Logo Perusahaan -->
    <div class="text-2xl font-bold">
        <a href="{{ url('/') }}">PT Banyak Duit</a>
    </div>

    <!-- Menu Navbar untuk Desktop -->
    <div class="hidden space-x-8 md:flex">
        <a href="{{ url('/about') }}" class="hover:text-[#26D0DC] duration-100">About Us</a>
        <a href="{{ url('/services') }}" class="hover:text-[#26D0DC] duration-100">Product</a>
        <a href="{{ url('/contact') }}" class="hover:text-[#26D0DC] duration-100">Contact</a>
    </div>

    <!-- Menu untuk Mobile -->
    <div class="md:hidden">
        <button id="menu-toggle" class="focus:outline-none">
            <!-- Icon burger -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Dropdown menu untuk mobile (disembunyikan secara default) -->
<div id="mobile-menu" class="hidden px-6 py-4 space-y-4 text-white bg-gray-800 md:hidden">
    <a href="{{ url('/') }}" class="block hover:text-gray-300">Home</a>
    <a href="{{ url('/about') }}" class="block hover:text-gray-300">About Us</a>
    <a href="{{ url('/services') }}" class="block hover:text-gray-300">Services</a>
    <a href="{{ url('/contact') }}" class="block hover:text-gray-300">Contact</a>
</div>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').onclick = function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    };
</script>
