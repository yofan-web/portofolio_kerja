<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/config/database.php';

$pdo = db();
$comments = $pdo ? $pdo->query('SELECT name, message, created_at FROM comments ORDER BY created_at DESC LIMIT 6')->fetchAll() : [];
$flash = isset($_GET['comment']) ? (string) $_GET['comment'] : '';
$emailFlash = isset($_GET['email']) ? (string) $_GET['email'] : '';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
$skillIconMap = [
    'HTML' => 'devicon-html5-plain', 'CSS' => 'devicon-css3-plain', 'JS' => 'devicon-javascript-plain',
    'PHP' => 'devicon-php-plain', 'JAVA' => 'devicon-java-plain', 'PY' => 'devicon-python-plain',
    'FLUTTER' => 'devicon-flutter-plain', 'MYSQL' => 'devicon-mysql-plain', 'SUPA' => 'devicon-supabase-plain',
    'CANVA' => 'devicon-canva-plain', 'PS' => 'devicon-photoshop-plain', 'VS' => 'devicon-vscode-plain', 'GIT' => 'devicon-git-plain',
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yofan Refki | Portfolio</title>
    <meta name="description" content="Portfolio Yofan Refki, siswa Rekayasa Perangkat Lunak dari SMKN 1 Kepanjen.">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</head>
<body id="top">
<header class="site-header">
    <a class="brand" href="index.php"><span class="brand-mark">YR</span><span>yofan<br><b>refki</b></span></a>
    <button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false"><span></span><span></span></button>
    <nav class="nav"><a href="#tentang">Tentang</a><a href="#projek">Projek</a><a href="#kontak">Kontak</a></nav>
    <a class="header-cta" href="https://wa.me/6282140870124" target="_blank" rel="noreferrer">Mari ngobrol <span>↗</span></a>
</header>
<main>
<section class="hero section-grid">
    <div class="hero-copy reveal"><p class="eyebrow">Portofolio / 2026</p><h1>Membangun ide<br><em>menjadi nyata.</em></h1><p class="hero-lede">Halo, saya Yofan. Siswa RPL yang senang mengubah masalah menjadi solusi digital yang rapi dan bermakna.</p><div class="hero-actions"><a class="button button-dark" href="#projek">Lihat projek <span>↓</span></a><a class="button button-primary contact-button" href="#kontak">Hubungi saya <span>↗</span></a></div></div>
    <div class="hero-art reveal"><div class="hero-glow hero-glow-one"></div><div class="hero-glow hero-glow-two"></div><img src="assets/rpl-student.png" alt="Ilustrasi siswa RPL, dapat diganti dengan foto Yofan" class="hero-portrait"><div class="art-label">RPL<br><span>siswa</span></div><div class="art-note">01 — ingin tahu<br>02 — disiplin<br>03 — kolaboratif</div><span class="hero-sticker">siap untuk<br>berkarya ✦</span></div>
</section>
<section class="ticker"><div>PENGEMBANGAN WEB <span>✳</span> BASIS DATA <span>✳</span> IDE KREATIF <span>✳</span> KERJA SAMA <span>✳</span> PENGEMBANGAN WEB <span>✳</span></div></section>
<section id="tentang" class="about section-grid"><div class="section-intro"><p class="eyebrow">01 / Tentang saya</p><h2>Belajar dengan<br><em>rasa ingin tahu.</em></h2></div><div class="about-body"><div class="about-profile"><p class="big-copy">Saya adalah siswa <strong>Rekayasa Perangkat Lunak</strong> dari SMKN 1 Kepanjen yang disiplin, komunikatif, dan berdedikasi tinggi.</p><p>Memiliki dasar dalam pengembangan web dan aplikasi, manajemen basis data, serta pemrosesan dokumen dan desain dasar. Di luar kelas, pengalaman sebagai Ketua Pramuka mengasah cara saya memimpin, memecahkan masalah, dan bekerja bersama tim.</p><a class="text-link" href="#kontak">Mari berkolaborasi <span>↗</span></a></div><div class="code-window" aria-label="Animasi menulis kode program"><div class="code-window-bar"><span></span><span></span><span></span><b>yofan.js</b></div><pre><code><span class="code-line"><i>const</i> <strong>idea</strong> = <em>"build"</em>;</span><span class="code-line"><i>function</i> <strong>create</strong>(idea) {</span><span class="code-line indent"><i>return</i> idea + <em>" with care"</em>;</span><span class="code-line">}</span><span class="code-line"><strong>create</strong>(idea);<span class="cursor"></span></span></code></pre></div></div></section>
<section class="skills section-grid"><div class="section-intro"><p class="eyebrow">02 / Keahlian</p><h2>Peralatan<br><em>yang saya kuasai.</em></h2></div><div class="skill-list"><?php foreach ($skills as $skill): ?><div class="skill-row"><div class="skill-logos <?php if ($skill['tone'] === 'yellow'): ?>soft-logos<?php endif; ?>"><?php foreach ($skill['logos'] as $logo): ?><span class="skill-logo <?= e($skill['tone']) ?>" title="<?= e($logo) ?>"><?php if (isset($skillIconMap[$logo])): ?><i class="<?= e($skillIconMap[$logo]) ?>"></i><?php else: ?><b><?= e($logo) ?></b><?php endif; ?></span><?php endforeach; ?></div><div><h3><?= e($skill['group']) ?></h3><p><?= e($skill['items']) ?></p></div><span class="skill-arrow">↗</span></div><?php endforeach; ?></div></section>
<section id="projek" class="projects"><div class="projects-head"><div><p class="eyebrow">03 / Projek pilihan</p><h2>Jelajahi<br><em>karya saya.</em></h2></div><p class="projects-note">Pilih kategori untuk melihat eksplorasi dan projek yang sedang saya kembangkan.</p></div><div class="category-grid"><?php foreach ($categories as $key => $category): ?><a class="category-card" href="projects.php?category=<?= e($key) ?>"><span class="category-number"><?= e($category['number']) ?></span><span class="category-icon"><?= e($category['icon']) ?></span><h3><?= e($category['label']) ?></h3><p><?= e($category['description']) ?></p><span class="category-arrow">↗</span></a><?php endforeach; ?></div></section>
<section class="education section-grid"><div class="section-intro"><p class="eyebrow">04 / Perjalanan</p><h2>Terus bertumbuh,<br><em>setiap hari.</em></h2></div><div class="timeline"><div class="timeline-item"><span>2024 — sekarang</span><h3>SMK Negeri 1 Kepanjen</h3><p>Rekayasa Perangkat Lunak · Perkiraan lulus 2027</p></div><div class="timeline-item"><span>2025 — sekarang</span><h3>Ketua Ambalan / Pradana</h3><p>Pramuka SMKN 1 Kepanjen · memimpin program kerja, rapat, dan kegiatan rutin.</p></div></div></section>
<section id="kontak" class="contact"><div class="contact-copy"><p class="eyebrow">05 / Kontak</p><h2>Punya ide?<br><em>Mari bicara.</em></h2><p>Saya terbuka untuk kesempatan magang, kolaborasi, dan obrolan seputar teknologi.</p></div><div class="contact-panel"><form class="email-form" action="api/email.php" method="post"><label for="email-name">Nama</label><input id="email-name" name="name" type="text" placeholder="Nama kamu" required maxlength="100"><label for="email-address">Email</label><input id="email-address" name="email" type="email" placeholder="nama@email.com" required maxlength="150"><label for="email-message">Pesan</label><textarea id="email-message" name="message" placeholder="Tulis pesan untuk saya..." required maxlength="2000"></textarea><button class="button button-primary" type="submit">Kirim email <span>↗</span></button></form><?php if ($emailFlash === 'success'): ?><p class="form-status success">Email berhasil dikirim. Terima kasih!</p><?php elseif ($emailFlash === 'error'): ?><p class="form-status error">Email belum terkirim. Periksa konfigurasi mail server.</p><?php endif; ?><div class="contact-links"><a href="mailto:yofanrefki@gmail.com"><span>Email</span>yofanrefki@gmail.com <b>↗</b></a><a href="https://wa.me/6282140870124" target="_blank" rel="noreferrer"><span>WhatsApp</span>0821 4087 0124 <b>↗</b></a><a href="https://www.instagram.com/y0fanriffky_?igsi=c2N5bzk1OXM5MjBq" target="_blank" rel="noreferrer"><span>Instagram</span>@y0fanriffky_ <b>↗</b></a><a href="https://tiktok.com/@yofan_refki" target="_blank" rel="noreferrer"><span>TikTok</span>@yofan_refki <b>↗</b></a></div></div></section>
<section class="guestbook section-grid"><div class="section-intro"><p class="eyebrow">06 / Buku pesan</p><h2>Tinggalkan<br><em>pesan.</em></h2><p class="muted">Komentar tersimpan langsung ke database portfolio.</p></div><div><form class="comment-form" action="api/comment.php" method="post"><input name="name" type="text" placeholder="Nama kamu" required maxlength="100"><textarea name="message" placeholder="Tulis pesan singkat..." required maxlength="1000"></textarea><button class="button button-dark" type="submit">Kirim pesan <span>↗</span></button></form><?php if ($flash === 'success'): ?><p class="form-status success">Pesan berhasil dikirim. Terima kasih!</p><?php elseif ($flash === 'error'): ?><p class="form-status error">Pesan belum tersimpan. Pastikan MySQL aktif.</p><?php endif; ?><div class="comments"><?php foreach ($comments as $comment): ?><article class="comment"><strong><?= e($comment['name']) ?></strong><time><?= e(date('d M Y', strtotime($comment['created_at']))) ?></time><p><?= e($comment['message']) ?></p></article><?php endforeach; ?><?php if (!$comments && !$flash): ?><p class="muted">Belum ada komentar. Jadilah yang pertama.</p><?php endif; ?></div></div></section>
</main>
<footer><span>© 2026 Yofan Refki</span><span>Dibuat dengan rasa ingin tahu</span><a href="#top">Kembali ke atas ↑</a></footer>
<script src="assets/script.js"></script>
</body>
</html>
