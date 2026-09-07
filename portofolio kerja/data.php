<?php
$categories = [
    'desktop' => ['label' => 'Aplikasi Desktop', 'number' => '01', 'icon' => '▦', 'description' => 'Aplikasi produktivitas dan sistem administrasi yang berjalan stabil di komputer.'],
    'mobile' => ['label' => 'Aplikasi HP', 'number' => '02', 'icon' => '⌁', 'description' => 'Pengalaman mobile yang ringkas, responsif, dan membantu aktivitas sehari-hari.'],
    'website' => ['label' => 'Website', 'number' => '03', 'icon' => '◉', 'description' => 'Website informatif dan interaktif dengan fokus pada struktur, performa, dan pengalaman pengguna.'],
    'database' => ['label' => 'Database', 'number' => '04', 'icon' => '◇', 'description' => 'Perancangan data yang rapi untuk mendukung aplikasi yang mudah dirawat dan dikembangkan.'],
    'other' => ['label' => 'Eksperimen Lain', 'number' => '05', 'icon' => '✳', 'description' => 'Eksplorasi teknologi, desain antarmuka, dan ide-ide digital di luar proyek utama.'],
];

$projects = [
    'desktop' => [
        ['title' => 'Sistem Administrasi Sekolah', 'tag' => 'Java · MySQL', 'text' => 'Konsep aplikasi desktop untuk mengelola data siswa, agenda, dan laporan secara terstruktur.', 'accent' => 'lime', 'image' => '', 'url' => ''],
        ['title' => 'Kasir Mini', 'tag' => 'Java · OOP', 'text' => 'Aplikasi kasir sederhana dengan alur transaksi yang jelas dan mudah dipahami.', 'accent' => 'coral', 'image' => '', 'url' => ''],
    ],
    'mobile' => [
        ['title' => 'Catatan Harian', 'tag' => 'Flutter', 'text' => 'Eksplorasi aplikasi mobile untuk menyimpan catatan pribadi dengan tampilan ringan.', 'accent' => 'blue'],
        ['title' => 'Agenda Kegiatan', 'tag' => 'Flutter · UI', 'text' => 'Rancangan agenda yang membantu pengguna melihat jadwal kegiatan dalam sekali lihat.', 'accent' => 'lime'],
    ],
    'website' => [
        ['title' => 'Portfolio Personal', 'tag' => 'PHP · CSS', 'text' => 'Website portfolio ini: ruang untuk memperkenalkan proses belajar, karya, dan cara berkolaborasi.', 'accent' => 'coral', 'image' => '', 'url' => 'http://localhost:8000/index.php'],
        ['title' => 'Landing Page Organisasi', 'tag' => 'HTML · JavaScript', 'text' => 'Halaman informatif dengan fokus pada hierarki informasi dan interaksi yang sederhana.', 'accent' => 'blue', 'image' => '', 'url' => ''],
    ],
    'database' => [
        ['title' => 'Database Perpustakaan', 'tag' => 'MySQL', 'text' => 'Perancangan tabel dan relasi untuk data buku, anggota, dan riwayat peminjaman.', 'accent' => 'lime', 'image' => '', 'url' => ''],
        ['title' => 'Data Kegiatan Pramuka', 'tag' => 'MySQL · ERD', 'text' => 'Struktur data untuk membantu administrasi kegiatan dan pencatatan anggota.', 'accent' => 'coral', 'image' => '', 'url' => ''],
    ],
    'other' => [
        ['title' => 'Eksplorasi UI', 'tag' => 'Figma · Canva', 'text' => 'Latihan membangun komposisi visual yang komunikatif, berani, dan tetap mudah digunakan.', 'accent' => 'blue', 'image' => '', 'url' => ''],
        ['title' => 'Otomasi Dokumen', 'tag' => 'Python', 'text' => 'Eksperimen kecil untuk merapikan pekerjaan berulang dan pengolahan dokumen.', 'accent' => 'lime', 'image' => '', 'url' => ''],
    ],
];

$skills = [
    ['group' => 'Hard Skill · Pemrograman & Web', 'items' => 'HTML5, CSS3 (Dasar), JavaScript (Dasar), PHP (Dasar), Java (Dasar), Python (Dasar)', 'logo' => '</>', 'logos' => ['HTML', 'CSS', 'JS', 'PHP', 'JAVA', 'PY'], 'tone' => 'lime'],
    ['group' => 'Hard Skill · Mobile Development', 'items' => 'Flutter (Dasar)', 'logo' => 'F', 'logos' => ['FLUTTER'], 'tone' => 'blue'],
    ['group' => 'Hard Skill · Database Management', 'items' => 'MySQL, Supabase', 'logo' => 'DB', 'logos' => ['MYSQL', 'SUPA'], 'tone' => 'coral'],
    ['group' => 'Hard Skill · Software & Tools', 'items' => 'Microsoft Office (Word, Excel, PowerPoint), Aplikasi Desain Dasar (Canva/Photoshop), VS Code, Git/GitHub', 'logo' => '✦', 'logos' => ['WORD', 'EXCEL', 'PPT', 'CANVA', 'PS', 'VS', 'GIT'], 'tone' => 'pink'],
    ['group' => 'Soft Skill', 'items' => 'Kepemimpinan (Leadership), Public Speaking, Komunikasi, Problem Solving, Kerja Sama Tim (Teamwork)', 'logo' => '↗', 'logos' => ['LEAD', 'SPEAK', 'TEAM'], 'tone' => 'yellow'],
];
