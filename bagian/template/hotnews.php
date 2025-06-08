<?php
include_once './controllers/BeritaControllers.php';

$beritaController = new BeritaControllers($connect);

$perPage = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);

$hotNews = $beritaController->getBerita();
$totalHotNews = count($hotNews);
$totalPages = ceil($totalHotNews / $perPage);

$offset = ($page - 1) * $perPage;
$hotNews = array_slice($hotNews, $offset, $perPage);

function truncateText($text, $maxLength) {
    if (strlen($text) <= $maxLength) {
        return $text;
    }
    return substr($text, 0, $maxLength) . '...';
}
?>

<aside class="lg:col-span-1 animate-fadeIn" style="animation-delay: 0.4s;">
    <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-red-700 mb-4 border-b-2 border-red-200 pb-2">Hot News 🔥</h2>
        <div id="hot-news-list" class="space-y-4">
            <?php foreach ($hotNews as $item): ?>
                <div class="hot-news-item flex items-start space-x-3 group">
                    <img src="./upload/<?= htmlspecialchars($item['image']) ?>" alt="Thumbnail" class="w-20 h-20 object-cover rounded-md border border-red-100 group-hover:opacity-80">
                    <div>
                        <a href="slug=<?= urlencode($item['slug']) ?>" class="hot-news-title text-sm font-semibold text-gray-800 hover:text-red-600 leading-tight block">
                            <?= htmlspecialchars(truncateText($item['judul'], 50)) ?>
                        </a>
                        <p class="text-xs text-gray-500 mt-1">
                            <?= htmlspecialchars(truncateText($item['description'], 20)) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Controls -->
        <div class="flex justify-center mt-4 space-x-2">
            <?php 
            $currentSlug = isset($_GET['slug']) ? $_GET['slug'] : '';
            for ($i = 1; $i <= $totalPages; $i++): 
            ?>
                <a href="?slug=<?= urlencode($currentSlug) ?>&page=<?= $i ?>" 
                class="px-3 py-1 border <?= $i == $page ? 'bg-red-600 text-white' : 'bg-white text-red-600 border-red-600' ?> rounded hover:bg-red-700 hover:text-white transition">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>
    </div>
</aside>
