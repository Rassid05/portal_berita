<?php
include_once './controllers/BeritaControllers.php';

$beritaController = new BeritaControllers($connect);
// $hotNews = $beritaController->getBeritaOld();
$totalHotNews = $beritaController->countBerita(); 
$totalPages = ceil($totalHotNews / 4);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$offset = ($page - 1) * 4;
$beritaaaa = $beritaController->getBeritaOld(4, $offset);
// echo '<pre>';
// var_dump($beritaaaa);
// echo '</pre>';
// exit;

function formatTimeTag($datetime) {
            $bulanIndo = [
                1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            $timestamp = strtotime($datetime);

            $hari = date('j', $timestamp);
            $bulan = $bulanIndo[(int)date('n', $timestamp)];
            $tahun = date('Y', $timestamp);
            $jamMenit = date('H:i', $timestamp);

            $isoDatetime = date('Y-m-d\TH:i:s', $timestamp);

            $displayText = "{$hari} {$bulan} {$tahun}, {$jamMenit} WIB";

            return "<span>Dipublikasikan: <time datetime=\"{$isoDatetime}\">{$displayText}</time></span>";
        }
?>

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

            
            <main class="lg:col-span-3 bg-white p-6 rounded-lg shadow-lg animate-fadeIn space-y-8">
                <?php foreach ($beritaaaa as $item): ?>
                    <article id="main-article-container" class="border border-red-100 rounded-lg p-4 shadow hover:shadow-lg transition duration-300">
                        <h1 id="main-article-title" class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                            <?= htmlspecialchars($item['judul']) ?>
                        </h1>
                        <div id="main-article-meta" class="text-sm text-gray-600 mb-4">
                            <?= formatTimeTag($item['created_at']) ?> |
                            <span>Oleh: <?= htmlspecialchars($item['author']) ?></span>
                        </div>
                        <figure id="main-article-figure" class="mb-4">
                            <img src="./upload/<?= htmlspecialchars($item['image']) ?>" alt="Detail" class="w-full h-auto rounded-md shadow-md border-2 border-red-100 mb-3">
                            <figcaption class="text-justify text-sm md:text-base text-gray-600 leading-relaxed">
                                <?= 
                                    nl2br(htmlspecialchars(
                                        preg_replace('/\.\s+/', '.', $item['description'])
                                    )) 
                                ?>
                            </figcaption>
                        </figure>
                    </article>
                <?php endforeach; ?>
                <div class="flex justify-center mt-8 space-x-2">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="?page=<?= $i ?>" 
                        class="px-3 py-1 border <?= $i == $page ? 'bg-red-600 text-white' : 'bg-white text-red-600 border-red-600' ?> rounded hover:bg-red-700 hover:text-white transition">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                </div>
            </main>
            

                <?php include 'bagian/template/hotnews.php';?>

        </div>
    </div>

  <?php include 'bagian/template/footer.php';?>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();


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