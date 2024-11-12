<!-- navbar.blade.php -->
<nav class="flex items-center justify-between px-6 py-3 bg-[#26D0DC] shadow-md">
    <!-- Logo Perusahaan -->
    <div class="text-xs font-normal text-white md:text-lg">
        Jl. WKWKWKWK Land
    </div>

    <!-- Informasi Kontak untuk Desktop -->
    <div class="items-center hidden space-x-6 text-sm font-normal text-white md:flex">
        <div class="flex items-center space-x-2">
            <!-- Ikon Email -->
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M20 4H4C2.9 4 2 4.9 2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 6h16l-8 5L4 6zm0 12V9l8 5 8-5v9H4z"></path>
            </svg>
            <div href="mailto:email@perusahaan.com" class="duration-300 hover:text-gray-300">email@perusahaan.com</div>
        </div>
        <span>|</span>
        <div class="flex items-center space-x-2">
            <!-- Ikon Telepon -->
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M6.62 10.79a15.916 15.916 0 006.59 6.59l2.2-2.2a1 1 0 011.09-.27c1.2.48 2.5.73 3.84.73a1 1 0 011 1v3.25a1 1 0 01-1 1c-9.39 0-17-7.61-17-17a1 1 0 011-1H5a1 1 0 011 1c0 1.34.25 2.64.73 3.84a1 1 0 01-.27 1.09l-2.2 2.2z"></path>
            </svg>
            <div href="tel:+621234567890" class="duration-300 hover:text-gray-300">+62 111-2222-3333</div>
        </div>
    </div>

    <!-- Menu untuk Mobile -->
    <div class="md:hidden">
        <button id="menu-toggle" class="focus:outline-none">
            <!-- Icon burger -->
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Dropdown menu untuk mobile (disembunyikan secara default) -->
<div id="mobile-menu" class="hidden px-6 py-4 space-y-4 font-normal text-gray-800 bg-white shadow-md md:hidden">
    <div class="flex items-center space-x-2">
        <!-- Ikon Email untuk Mobile -->
        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M20 4H4C2.9 4 2 4.9 2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 6h16l-8 5L4 6zm0 12V9l8 5 8-5v9H4z"></path>
        </svg>
        <div href="mailto:email@perusahaan.com" class="duration-300 hover:text-gray-300">email@perusahaan.com</div>
    </div>
    <div class="flex items-center space-x-2">
        <!-- Ikon Telepon untuk Mobile -->
        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M6.62 10.79a15.916 15.916 0 006.59 6.59l2.2-2.2a1 1 0 011.09-.27c1.2.48 2.5.73 3.84.73a1 1 0 011 1v3.25a1 1 0 01-1 1c-9.39 0-17-7.61-17-17a1 1 0 011-1H5a1 1 0 011 1c0 1.34.25 2.64.73 3.84a1 1 0 01-.27 1.09l-2.2 2.2z"></path>
        </svg>
        <div href="tel:+621234567890" class="duration-300 hover:text-gray-300">+62 123-456-7890</div>
    </div>
</div>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').onclick = function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    };
</script>
