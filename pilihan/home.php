<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Merah Putih</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out forwards;
        }
        .article-part-pagination-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        .hidden-by-search {
            display: none !important;
        }
        .search-highlight-article { 
        }
         .search-highlight-hotnews { 
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    

    <div class="container mx-auto px-4 sm:px-6 py-8">
        <div id="search-message" class="mb-4 text-center text-gray-700 font-semibold"></div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">


            <?php include 'bagian/template/kategori.php';?>

            <main class="lg:col-span-3 bg-white p-6 rounded-lg shadow-lg animate-fadeIn">
                <article id="main-article-container">
                    <h1 id="main-article-title" class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                        Kenaikan Tarif Impor AS: Analisis Dampak dan Respon Pasar Global
                    </h1>
                    <div class="text-sm text-gray-600 mb-4">
                        <span>Dipublikasikan: <time datetime="2025-05-29">29 Mei 2025, 13:15 WIB</time></span> |
                        <span>Oleh: Analis MerahPutih</span>
                    </div>
                    <figure class="mb-6">
                        <img src="./img/us.png" alt="Ilustrasi Kenaikan Tarif AS" class="w-full h-auto rounded-md shadow-md border-4 border-red-100">
                        <figcaption class="text-center text-xs text-gray-500 mt-2">Gambar ilustrasi mengenai dampak kebijakan tarif impor AS.</figcaption>
                    </figure>
                    <div id="article-body-content" class="prose prose-lg max-w-none text-gray-700 space-y-4">
                    </div>
                    <div id="article-pagination-controls" class="mt-6 pt-4 border-t border-gray-200 flex justify-between items-center">
                        <button id="prev-article-part" class="article-part-pagination-button bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 disabled:opacity-50">Sebelumnya</button>
                        <span id="article-page-info" class="text-sm text-gray-600"></span>
                        <button id="next-article-part" class="article-part-pagination-button bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 disabled:opacity-50">Berikutnya</button>
                    </div>
                </article>
            </main>

    <?php include 'bagian/template/hotnews.php';?>

        </div>
    </div>

  <?php include 'bagian/template/footer.php';?>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        const articleContentParts = [

            `
            <p>Pemerintah Amerika Serikat telah mengonfirmasi rencana untuk memberlakukan <strong class="text-red-700">kenaikan tarif impor</strong> terhadap sejumlah kategori barang dari beberapa negara. Langkah ini diambil dengan alasan untuk melindungi produsen domestik dan menyeimbangkan neraca perdagangan. Namun, keputusan ini menuai berbagai reaksi dan kekhawatiran akan dampaknya terhadap stabilitas ekonomi global.</p>
            <p>Para ekonom menyoroti potensi disrupsi pada rantai pasok global yang sudah rapuh pasca-pandemi. Kenaikan biaya impor diperkirakan akan <strong class="text-red-700">membebani konsumen</strong> melalui harga barang yang lebih tinggi dan dapat memicu inflasi di berbagai negara, termasuk di AS sendiri.</p>
            `,
    
            `
            <blockquote class="border-l-4 border-red-500 pl-4 italic text-gray-800">
                "Ini adalah langkah yang berisiko tinggi. Meskipun ada argumen proteksionis, sejarah menunjukkan bahwa perang dagang jarang menguntungkan siapa pun dalam jangka panjang," ungkap seorang pengamat ekonomi.
            </blockquote>
            <p>Beberapa negara yang menjadi target utama kebijakan tarif ini telah menyatakan akan mempertimbangkan langkah balasan. Hal ini meningkatkan risiko eskalasi konflik dagang yang dapat <strong class="text-red-700">memperlambat laju pemulihan ekonomi</strong> dunia.</p>
            `,
       
            `
            <p>Di sisi lain, pendukung kebijakan ini berargumen bahwa tarif baru akan mendorong investasi di dalam negeri AS dan menciptakan lapangan kerja. Mereka juga menekankan pentingnya <strong class="text-red-700">kedaulatan ekonomi</strong> dan pengurangan ketergantungan pada pasokan dari luar negeri untuk barang-barang strategis.</p>
            <p>Diskusi lebih lanjut dan negosiasi antar negara diharapkan dapat menemukan solusi yang tidak merugikan semua pihak dalam jangka panjang.</p>
            `
        ];

        let currentArticlePart = 1;
        const articleBodyContentDiv = document.getElementById('article-body-content');
        const prevArticlePartButton = document.getElementById('prev-article-part');
        const nextArticlePartButton = document.getElementById('next-article-part');
        const articlePageInfoSpan = document.getElementById('article-page-info');

        function displayArticlePart(pageNumber) {
            if (!articleBodyContentDiv || pageNumber < 1 || pageNumber > articleContentParts.length) {
                return;
            }
            currentArticlePart = pageNumber;
            articleBodyContentDiv.innerHTML = articleContentParts[pageNumber - 1];
            
            articleBodyContentDiv.classList.remove('animate-fadeIn');
            void articleBodyContentDiv.offsetWidth;
            articleBodyContentDiv.classList.add('animate-fadeIn');

            if (articlePageInfoSpan) {
                 articlePageInfoSpan.textContent = `Bagian ${currentArticlePart} dari ${articleContentParts.length}`;
            }
            if (prevArticlePartButton) {
                prevArticlePartButton.disabled = currentArticlePart === 1;
            }
            if (nextArticlePartButton) {
                nextArticlePartButton.disabled = currentArticlePart === articleContentParts.length;
            }
        }
        
        if (prevArticlePartButton && nextArticlePartButton) {
            prevArticlePartButton.addEventListener('click', () => {
                if (currentArticlePart > 1) {
                    displayArticlePart(currentArticlePart - 1);
                }
            });

            nextArticlePartButton.addEventListener('click', () => {
                if (currentArticlePart < articleContentParts.length) {
                    displayArticlePart(currentArticlePart + 1);
                }
            });
        }
        if (articleContentParts.length > 0) {
            displayArticlePart(1);
        } else {
            const paginationControls = document.getElementById('article-pagination-controls');
            if (paginationControls) paginationControls.style.display = 'none';
        }


        const searchForm = document.getElementById('search-form');
        const searchInput = document.getElementById('search-navbar-input');
        const searchMessage = document.getElementById('search-message');
        const hotNewsListContainer = document.getElementById('hot-news-list');
        const allHotNewsItems = Array.from(hotNewsListContainer.querySelectorAll('.hot-news-item'));
        const resetSearchButton = document.getElementById('reset-search-button');
        const mainArticleContainer = document.getElementById('main-article-container');

        if (searchForm) {
            searchForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const query = searchInput.value.toLowerCase().trim();
                searchMessage.textContent = '';
                resetSearchButton.classList.remove('hidden');
                let mainArticleFound = false;
                let hotNewsFoundCount = 0;
                mainArticleContainer.classList.remove('search-highlight-article');
                allHotNewsItems.forEach(item => {
                    item.classList.remove('hidden-by-search', 'search-highlight-hotnews');
                });


                if (query === "") {
                    searchMessage.textContent = "Silakan masukkan kata kunci pencarian.";
                    return;
                }

                const mainArticleTitleEl = document.getElementById('main-article-title');
                if (mainArticleTitleEl && mainArticleTitleEl.textContent.toLowerCase().includes(query)) {
                    mainArticleContainer.classList.add('search-highlight-article');
                    mainArticleFound = true;
                }

                const fullArticleTextForSearch = articleContentParts.join(" ").toLowerCase();
                if (fullArticleTextForSearch.includes(query)) {
                    mainArticleContainer.classList.add('search-highlight-article');
                    mainArticleFound = true; 
                }
                
                allHotNewsItems.forEach(item => {
                    const titleElement = item.querySelector('.hot-news-title');
                    if (titleElement) {
                        const title = titleElement.textContent.toLowerCase();
                        if (title.includes(query)) {
                            item.classList.remove('hidden-by-search');
                            item.classList.add('search-highlight-hotnews');
                            hotNewsFoundCount++;
                        } else {
                            item.classList.add('hidden-by-search');
                        }
                    }
                });

                if (!mainArticleFound && hotNewsFoundCount === 0) {
                    searchMessage.textContent = `Tidak ada hasil ditemukan untuk "${searchInput.value}".`;
                } else {
                    let foundLocations = [];
                    if (mainArticleFound) foundLocations.push("artikel utama");
                    if (hotNewsFoundCount > 0) foundLocations.push("Hot News");
                    searchMessage.textContent = `Hasil untuk "${searchInput.value}" ditemukan di: ${foundLocations.join(' dan ')}.`;
                }
            });
        }

        if (resetSearchButton) {
            resetSearchButton.addEventListener('click', function() {
                searchInput.value = '';
                searchMessage.textContent = '';
                allHotNewsItems.forEach(item => {
                    item.classList.remove('hidden-by-search', 'search-highlight-hotnews');
                });
                mainArticleContainer.classList.remove('search-highlight-article');
                resetSearchButton.classList.add('hidden');
               
            });
        }

    </script>

</body>
</html>