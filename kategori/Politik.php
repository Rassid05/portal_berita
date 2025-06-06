<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori: Politik - PortalMerahPutih</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi halus untuk card dan elemen lain */
        @keyframes fadeInSmooth {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInSmooth {
            animation: fadeInSmooth 0.6s ease-out forwards;
        }
        .news-card:hover .news-card-image {
            transform: scale(1.05);
        }
        .news-card-image {
            transition: transform 0.3s ease-in-out;
        }
        /* Menyembunyikan item yang tidak di halaman saat ini */
        .paginated-item {
            display: none; /* Defaultnya disembunyikan, JS akan menampilkan yang sesuai */
        }
        /* Styling untuk tombol paginasi yang dinonaktifkan */
        .pagination-disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none; /* Mencegah klik */
        }
        .pagination-disabled:hover {
            background-color: white !important; /* Mencegah perubahan hover */
            color: #6b7280 !important; /* Tailwind gray-500 */
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">



    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
             
                    <h1 class="text-4xl font-bold text-red-700">Politik</h1>
                    <p class="text-gray-600 mt-1">Berita dan analisis terkini seputar dinamika politik nasional dan internasional.</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <select class="border border-gray-300 rounded-md p-2 focus:ring-red-500 focus:border-red-500">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>Minggu Ini</option>
                    </select>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 sm:px-6 py-10">
        <section class="mb-12 animate-fadeInSmooth" style="animation-delay: 0.1s;">
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden md:flex news-card">
                <div class="md:w-1/2 xl:w-3/5">
                     <div class="overflow-hidden h-full">
                        <img src="./img/jokowi-tempuh-jalur-hukum-terkait-isu-ijazah-palsu-1745999037229_169.jpeg" alt="Debat Calon Presiden 2029" class="w-full h-full object-cover news-card-image">
                    </div>
                </div>
                <div class="p-6 md:p-8 md:w-1/2 xl:w-2/5 flex flex-col justify-center">
                    <span class="text-xs font-semibold text-red-600 uppercase">PEMILU 2029</span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mt-2 mb-3 leading-tight hover:text-red-700 transition duration-150">
                        <a href="#">Analisis Mendalam Visi Misi Bakal Calon Presiden untuk Pemilu 2029</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Para pengamat politik mulai membedah platform yang ditawarkan oleh figur-figur potensial menjelang kontestasi politik mendatang...
                    </p>
                    <div class="text-xs text-gray-500">
                        <span>Tim Analis Politik</span> - <time datetime="2025-05-29">29 Mei 2025</time> - <span>🕒 8 mnt baca</span>
                    </div>
                    <a href="#" class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-red-700 transition duration-150">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div id="news-grid-paginated" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 0.3s;">
                    <div class="overflow-hidden h-48">
                        <img src="./img/512px-DPR-MPR_building_complex.webp" alt="RUU Baru DPR" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">LEGISLASI</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 leading-tight hover:text-red-700 transition duration-150">
                            <a href="#">DPR Sahkan RUU Kontroversial, Apa Dampaknya Bagi Publik?</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                            Pengesahan rancangan undang-undang baru ini menuai pro dan kontra di kalangan masyarakat luas.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto">
                            <span>Warta Parlemen</span> - <time datetime="2025-05-28">28 Mei 2025</time> - <span>🕒 5 mnt baca</span>
                        </div>
                    </div>
                </article>

                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 0.5s;">
                     <div class="overflow-hidden h-48">
                        <img src="./img/ekonomi1.png" alt="Diplomasi Indonesia" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">HUBUNGAN INTERNASIONAL</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 leading-tight hover:text-red-700 transition duration-150">
                            <a href="#">Peran Diplomasi Indonesia di Kancah Global Makin Strategis</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                            Indonesia terus aktif dalam berbagai forum internasional untuk menyuarakan kepentingan nasional dan perdamaian dunia.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto">
                            <span>Kabar Internasional</span> - <time datetime="2025-05-27">27 Mei 2025</time> - <span>🕒 4 mnt baca</span>
                        </div>
                    </div>
                </article>

                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 0.7s;">
                     <div class="overflow-hidden h-48">
                        <img src="./img/umkm.png" alt="Survei Elektabilitas Partai Politik" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">SURVEI POLITIK</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 leading-tight hover:text-red-700 transition duration-150">
                            <a href="#">Hasil Survei Terbaru: Elektabilitas Partai Politik Jelang Pemilu</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                            Beberapa partai menunjukkan tren kenaikan, sementara yang lain mengalami penurunan dukungan publik.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto">
                            <span>Lembaga Survei Nasional</span> - <time datetime="2025-05-26">26 Mei 2025</time> - <span>🕒 6 mnt baca</span>
                        </div>
                    </div>
                </article>

                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 0.9s;">
                     <div class="overflow-hidden h-48">
                        <img src="./img/us.png" alt="Kebijakan Publik Baru" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">KEBIJAKAN PUBLIK</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 hover:text-red-700"><a href="#">Evaluasi Kebijakan Publik: Antara Harapan dan Realita di Lapangan</a></h3>
                         <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                            Pemerintah didorong untuk lebih transparan dalam setiap perumusan kebijakan yang berdampak luas.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto"><time datetime="2025-05-25">25 Mei 2025</time> - <span>🕒 5 mnt baca</span></div>
                    </div>
                </article>

                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 1.1s;">
                     <div class="overflow-hidden h-48">
                        <img src="./img/startup.png" alt="Partisipasi Pemilih Muda" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">DEMOKRASI</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 hover:text-red-700"><a href="#">Mendorong Partisipasi Pemilih Muda dalam Pesta Demokrasi</a></h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                           Suara generasi muda menjadi kunci penting dalam menentukan arah bangsa ke depan.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto"><time datetime="2025-05-24">24 Mei 2025</time> - <span>🕒 4 mnt baca</span></div>
                    </div>
                </article>

                <article class="paginated-item bg-white rounded-xl shadow-lg overflow-hidden flex flex-col news-card animate-fadeInSmooth" style="animation-delay: 1.3s;">
                     <div class="overflow-hidden h-48">
                        <img src="https://via.placeholder.com/400x250.png?text=Konflik+Regional+Asia" alt="Konflik Regional Asia" class="w-full h-full object-cover news-card-image">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-red-600 uppercase">GEOPOLITIK</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1 mb-2 hover:text-red-700"><a href="#">Peta Konflik Regional Asia dan Implikasinya bagi Indonesia</a></h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed flex-grow">
                            Stabilitas kawasan menjadi perhatian utama di tengah meningkatnya tensi geopolitik global.
                        </p>
                        <div class="text-xs text-gray-500 mt-auto"><time datetime="2025-05-23">23 Mei 2025</time> - <span>🕒 6 mnt baca</span></div>
                    </div>
                </article>

            </div>
        </section>

        <nav id="pagination-container" class="mt-12 flex justify-center animate-fadeInSmooth" style="animation-delay: 1.5s;">
            <ul class="flex items-center -space-x-px h-10 text-base">
                <li>
                    <a href="#" id="pagination-prev" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                    </a>
                </li>
                <div id="pagination-numbers" class="flex items-center -space-x-px"></div>
                <li>
                    <a href="#" id="pagination-next" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Next</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

    </main>

  <?php include 'bagian/template/footer.php';?>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // --- PAGINATION SCRIPT START ---
        document.addEventListener('DOMContentLoaded', () => {
            const itemsPerPage = 3; // Atur berapa berita per halaman
            let currentPage = 1;

            const newsItems = Array.from(document.querySelectorAll('#news-grid-paginated .paginated-item'));
            const paginationNumbersContainer = document.getElementById('pagination-numbers');
            const prevButton = document.getElementById('pagination-prev');
            const nextButton = document.getElementById('pagination-next');
            const paginationNavContainer = document.getElementById('pagination-container'); // Untuk menyembunyikan jika tidak ada item

            const totalItems = newsItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            function displayPage(page) {
                currentPage = page;

                newsItems.forEach(item => {
                    item.style.display = 'none';
                    item.classList.remove('animate-fadeInSmooth'); 
                });

                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                const itemsToShow = newsItems.slice(startIndex, endIndex);

                itemsToShow.forEach(item => {
                    item.style.display = 'flex'; // Sesuaikan dengan display asli card Anda
                    void item.offsetWidth; // Trigger reflow
                    item.classList.add('animate-fadeInSmooth');
                });

                updatePaginationControls();
                
                // Scroll ke atas agar pengguna melihat item baru (opsional)
                const categoryHeader = document.querySelector('header.bg-white'); // Target scroll ke header kategori
                 // Hanya scroll jika bukan page load awal (page 1) dan ada item yang ditampilkan
                if (categoryHeader && page !== 1 && itemsToShow.length > 0 && !document.hidden) { 
                    setTimeout(() => { // Beri sedikit jeda agar item sempat dirender sebelum scroll
                        categoryHeader.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100); // Jeda 100ms
                }
            }

            function updatePaginationControls() {
                paginationNumbersContainer.innerHTML = ''; 

                for (let i = 1; i <= totalPages; i++) {
                    const pageLinkLi = document.createElement('li');
                    const pageLinkA = document.createElement('a');
                    pageLinkA.href = '#';
                    pageLinkA.innerText = i;
                    pageLinkA.classList.add('flex', 'items-center', 'justify-center', 'px-4', 'h-10', 'leading-tight', 'border', 'border-gray-300');

                    if (i === currentPage) {
                        pageLinkA.classList.add('z-10', 'text-red-600', 'bg-red-50', 'border-red-300');
                        pageLinkA.setAttribute('aria-current', 'page');
                        pageLinkA.classList.remove('text-gray-500', 'bg-white', 'hover:bg-gray-100', 'hover:text-gray-700');
                    } else {
                        pageLinkA.classList.add('text-gray-500', 'bg-white', 'hover:bg-gray-100', 'hover:text-gray-700');
                        pageLinkA.classList.remove('z-10', 'text-red-600', 'bg-red-50', 'border-red-300');
                    }

                    pageLinkA.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (currentPage !== i) {
                           displayPage(i);
                        }
                    });
                    pageLinkLi.appendChild(pageLinkA);
                    paginationNumbersContainer.appendChild(pageLinkLi);
                }

                prevButton.classList.toggle('pagination-disabled', currentPage === 1);
                nextButton.classList.toggle('pagination-disabled', currentPage === totalPages || totalPages === 0);
            }
            
            if (prevButton && nextButton) { // Pastikan tombol ada sebelum menambah event listener
                prevButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (currentPage > 1) {
                        displayPage(currentPage - 1);
                    }
                });

                nextButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        displayPage(currentPage + 1);
                    }
                });
            }


            if (totalItems > 0) {
                displayPage(1);
                if (paginationNavContainer) paginationNavContainer.style.display = 'flex';
            } else {
                if (paginationNavContainer) paginationNavContainer.style.display = 'none';
            }
        });
        // --- PAGINATION SCRIPT END ---
    </script>

</body>
</html>