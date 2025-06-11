<footer class="bg-gradient-to-b from-red-800 to-red-900 text-white py-12 mt-16 shadow-lg">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-8">
            <!-- Logo & Deskripsi -->
            <div class="text-center md:text-left max-w-md">
                <div class="flex items-center justify-center md:justify-start space-x-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-2xl font-bold">PortalMerahPutih</span>
                </div>
                <p class="text-red-100 mb-4">Menyajikan informasi terkini dengan semangat kebangsaan Indonesia.</p>
                <p class="text-sm text-red-300">&copy; <span id="currentYear"></span> PortalMerahPutih. All rights reserved.</p>
            </div>

            <!-- Kontak -->
            <div class="text-center md:text-right">
                <h3 class="text-xl font-bold mb-4 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-16 after:h-1 after:bg-white after:rounded-full">
                    Hubungi Kami
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:kontak@portalmerahputih.id" class="hover:text-red-300 transition">kontak@portalmerahputih.id</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+628123456789" class="hover:text-red-300 transition">+62 812-3456-789</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <a href="https://www.instagram.com/rassidrsdslpa05_?igsh=dWJld2pwY21ndjdv&utm_source=qr" target="_blank" class="hover:text-red-300 transition">@portalmerahputih</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Lokasi & Copyright -->
        <div class="mt-12 pt-6 border-t border-red-700 text-center">
            <div class="flex justify-center items-center space-x-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-red-200">Medan, Indonesia</span>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>