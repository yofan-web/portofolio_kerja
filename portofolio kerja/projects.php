<?php
require_once __DIR__ . '/data.php';

$key = $_GET['category'] ?? 'website';
if (!isset($categories[$key])) {
    $key = 'website';
}
$category = $categories[$key];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($category['label']) ?> | Yofan Refki</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="category-page">
<header class="site-header">
    <a class="brand" href="index.php"><span class="brand-mark">YR</span><span>yofan<br><b>refki</b></span></a>
    <button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false"><span></span><span></span></button>
    <nav class="nav"><a href="index.php#tentang">Tentang</a><a href="index.php#projek">Semua projek</a><a href="index.php#kontak">Kontak</a></nav>
    <a class="header-cta" href="https://wa.me/6282140870124" target="_blank" rel="noreferrer">Mari ngobrol <span>↗</span></a>
</header>
<main>
<section class="category-hero">
    <a class="back-link" href="index.php#projek">← Kembali ke projek pilihan</a>
    <p class="eyebrow">Kategori projek / <?= e($category['number']) ?></p>
    <h1><?= e($category['label']) ?><br><em>pilihan saya.</em></h1>
    <p><?= e($category['description']) ?></p>
</section>
<section class="project-list">
    <?php foreach ($projects[$key] as $index => $project): ?>
    <article class="project-card <?= e($project['accent']) ?>">
        <div class="project-index">0<?= $index + 1 ?></div>
        <div class="project-media">
            <?php if (!empty($project['image'])): ?>
                <img src="<?= e($project['image']) ?>" alt="Gambaran <?= e($project['title']) ?>">
            <?php else: ?>
                <span>Gambaran<br>project</span>
            <?php endif; ?>
        </div>
        <div class="project-content">
            <p class="eyebrow"><?= e($project['tag']) ?></p>
            <h2><?= e($project['title']) ?></h2>
            <p><?= e($project['text']) ?></p>
            <?php if (!empty($project['url'])): ?>
                <a class="project-pill" href="<?= e($project['url']) ?>" target="_blank" rel="noreferrer">Buka project <i>↗</i></a>
            <?php else: ?>
                <span class="project-pill">Segera hadir <i>↗</i></span>
            <?php endif; ?>
        </div>
        <div class="project-shape"></div>
    </article>
    <?php endforeach; ?>
</section>
<section class="category-next">
    <p class="eyebrow">Jelajahi kategori lain</p>
    <div class="next-links">
        <?php foreach ($categories as $otherKey => $other): if ($otherKey !== $key): ?>
            <a href="projects.php?category=<?= e($otherKey) ?>"><?= e($other['label']) ?> <span>↗</span></a>
        <?php endif; endforeach; ?>
    </div>
</section>
</main>
<footer><span>© 2026 Yofan Refki</span><a href="index.php#kontak">Mari berkolaborasi ↗</a></footer>
<script src="assets/script.js"></script>
</body>
</html>
