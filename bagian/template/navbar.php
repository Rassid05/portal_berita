<?php
include_once './controllers/AuthController.php';

$auth = new AuthController($connect);

?>


<nav class="bg-red-600 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="/portal-polmed/index.php?page=home" class="text-2xl font-bold text-white hover:text-red-200">PortalMerahPutih</a>
            
            <div class="flex items-center">
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/portal-polmed/index.php?page=home" class="nav-link px-3 py-2 rounded-md">Home</a>
                    <!-- <a href="?page=nasional" class="nav-link px-3 py-2 rounded-md">Nasional</a>
                    <a href="?page=internasional" class="nav-link px-3 py-2 rounded-md">Internasional</a> -->
                    <form id="search-form" class="flex items-center ml-2"> 
                        <label for="search-navbar-input" class="sr-only">Cari</label>
                        <input type="search" id="search-navbar-input" name="query" placeholder="Cari berita..."
                               class="px-3 py-1.5 text-sm bg-red-50 text-gray-900 placeholder-gray-500 rounded-l-md border-transparent 
                                      focus:ring-1 focus:ring-red-200 focus:border-transparent focus:outline-none transition duration-150 ease-in-out" 
                               style="min-width: 180px;">
                        <button type="submit" 
                                class="bg-red-700 text-white px-3 py-1.5 rounded-r-md hover:bg-red-800 
                                       focus:outline-none focus:ring-1 focus:ring-red-200 focus:ring-offset-1 focus:ring-offset-red-600 
                                       transition duration-150 ease-in-out">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                    <button id="reset-search-button" class="hidden ml-2 px-3 py-1.5 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Reset</button>
                </div>

                <div class="md:hidden ml-3">
                    <button class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script>
    // Ambil parameter "page" dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const currentPage = urlParams.get('page') || 'home';

    // Ambil semua link dengan class 'nav-link'
    const links = document.querySelectorAll('.nav-link');

    links.forEach(link => {
        const linkPage = new URL(link.href).searchParams.get('page');

        if (linkPage === currentPage) {
        link.classList.add('bg-red-700', 'text-red-200', 'font-semibold');
        } else {
        link.classList.add('text-white', 'hover:bg-red-700');
        }
    });
</script>