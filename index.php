<?php
// =========================================================================
// DATA PROFIL & KONFIGURASI (Zukhriatul Hafizha)
// =========================================================================
$profile = [
    'name'        => 'Zukhriatul Hafizha',
    'title'       => 'Student of Software Development & Game (PPLG)',
    'location'    => 'Indonesia ~ Ende, Nusa Tenggara Timur',
    'bio'         => 'saya adalah siswa Madrasah Aliyah Kejuruan Negeri Ende jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) yang memiliki minat besar dalam dunia teknologi, khususnya pemrograman, pengembangan aplikasi, dan desain digital. Saya memiliki semangat belajar yang tinggi.',
    'email'       => 'ibrohimhafizh@gmail.com',
    'status'      => 'Pelajar Aktif ~ Madrasah Aliyah Kejuruan Negeri Ende',
    'avatar_url'  => 'past foto.png', // 1. Foto profil utama di sidebar
    'loader_url'  => 'loading.png', // 2. Foto khusus untuk preloader/loading page
    'about_image' => 'port.jpeg', // 3. Foto khusus di bagian "Tentang Saya"
    'cv_url'      => 'cv icha.jpg'
];

// Link Media Sosial & WhatsApp Aktif (Akun IG: @ichabirahim_)
$social_links = [
    'whatsapp'  => 'https://wa.me/6281234567890?text=Halo%20Zukhriatul,%20saya%20tertarik%20dengan%20portofolio%20Anda.',
    'github'    => 'https://github.com/ichaibrahim',
    'linkedin'  => 'https://linkedin.com',
    'instagram' => 'https://instagram.com/ichabirahim_'
];

$stats = [
    ['number' => '3+', 'label' => 'PROJECTS'],
    ['number' => '3+', 'label' => 'CERTIFICATIONS'],
    ['number' => '2+', 'label' => 'YEARS CODING']
];

$skills = [
    [
        'name'  => 'HTML & CSS',
        'icon'  => 'fa-brands fa-html5',
        'color' => 'text-orange-500 bg-orange-500/10'
    ],
    [
        'name'  => 'JavaScript & Tailwind',
        'icon'  => 'fa-brands fa-js',
        'color' => 'text-yellow-500 bg-yellow-500/10'
    ],
    [
        'name'  => 'PHP & Backend',
        'icon'  => 'fa-brands fa-php',
        'color' => 'text-indigo-500 bg-indigo-500/10'
    ],
    [
        'name'  => 'Java Programming',
        'icon'  => 'fa-brands fa-java',
        'color' => 'text-red-500 bg-red-500/10'
    ],
    [
        'name'  => 'Database & MySQL',
        'icon'  => 'fa-solid fa-database',
        'color' => 'text-sky-500 bg-sky-500/10'
    ],
    [
        'name'  => 'UI/UX Prototyping',
        'icon'  => 'fa-solid fa-figma',
        'color' => 'text-pink-500 bg-pink-500/10'
    ]
];

$services = [
    [
        'icon'  => 'fa-code',
        'title' => 'Web Development',
        'desc'  => 'Membangun aplikasi web kustom berbasis PHP yang cepat, aman, dan responsif untuk kebutuhan bisnis atau personal.'
    ],
    [
        'icon'  => 'fa-chart-pie',
        'title' => 'Data Analysis',
        'desc'  => 'Mengolah dan menginterpretasikan data kompleks menjadi visualisasi data yang intuitif serta insights bisnis yang bernilai.'
    ],
    [
        'icon'  => 'fa-pen-ruler',
        'title' => 'UI/UX Design',
        'desc'  => 'Mendesain antarmuka pengguna yang estetik, modern, serta mengutamakan pengalaman pengguna (User Experience) yang nyaman.'
    ],
    [
        'icon'  => 'fa-network-wired',
        'title' => 'System Integration',
        'desc'  => 'Integrasi API, optimalisasi arsitektur database, dan konfigurasi sistem backend modern.'
    ]
];

$categories = ['All', 'Web Dev', 'Data Science', 'UI/UX'];

$projects = [
    [
        'title'    => 'Aplikasi Nurani - Ruang Ibadah Harian',
        'category' => 'Web Dev',
        'image'    => 'projek/nurislam.png',
        'desc'     => 'Aplikasi web Islami interaktif lengkap dengan fitur jadwal shalat, Al-Quran, kiblat, dzikir, dan pengingat waktu ibadah.',
        'link'     => 'https://ichaibrahim.infinityfreeapp.com/login.php' // Terhubung langsung ke web InfinityFree Anda[cite: 3]
    ],
    [
        'title'    => 'Sistem Kasir (Point of Sale)',
        'category' => 'Web Dev',
        'image'    => 'projek/sistem kasir.png',
        'desc'     => 'Aplikasi sistem kasir berbasis web lengkap dengan manajemen transaksi, pencatatan produk, dan rekapitulasi data penjualan.',
        'link'     => 'http://kasiricha.infinityfreeapp.com' // Tautan GitHub Sistem Kasir
    ],
    [
        'title'    => 'Dashboard Analytics Dark Theme',
        'category' => 'UI/UX',
        'image'    => 'projek/toko kue.png',
        'desc'     => 'Website e-commerce / katalog produk kue berbasis web online lengkap dengan informasi produk dan kemudahan pemesanan.',
        'link'     => 'https://github.com/ichaibrahim/toko_kue'
    ],
    [
        'title'    => 'Portofolio Interaktif PHP',
        'category' => 'Web Dev',
        'image'    => 'projek/portofolio.png',
        'desc'     => 'Website portofolio profesional dengan fitur dark mode dinamis dan arsitektur kode terstruktur.',
        'link'     => 'https://github.com/ichaibrahim/portofolioicha'
    ]
];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name']; ?> - Portfolio</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        emerald: {
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                        },
                        obsidian: {
                            800: '#111827',
                            900: '#0b0f17',
                            950: '#070a0f'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Fira Code', 'monospace']
                    }
                }
            }
        }
    </script>
    <style>
        /* KURSOR KUSTOM KECE & FUTURISTIK (Crosshair Neon Hijau) */
        body {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='6' fill='none' stroke='%2334d399' stroke-width='2'/%3E%3Cline x1='16' y1='2' x2='16' y2='10' stroke='%2334d399' stroke-width='2'/%3E%3Cline x1='16' y1='22' x2='16' y2='30' stroke='%2334d399' stroke-width='2'/%3E%3Cline x1='2' y1='16' x2='10' y2='16' stroke='%2334d399' stroke-width='2'/%3E%3Cline x1='22' y1='16' x2='30' y2='16' stroke='%2334d399' stroke-width='2'/%3E%3C/svg%3E") 16 16, auto;
        }
        
        button, a, input, textarea, .project-card, .group {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='10' fill='%2310b981' fill-opacity='0.4' stroke='%2334d399' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='3' fill='%23ffffff'/%3E%3C/svg%3E") 16 16, pointer;
        }

        /* PRELOADER STYLING */
        #preloader {
            position: fixed;
            inset: 0;
            background: #070a0f;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }
        
        .loader-container {
            position: relative;
            width: 110px;
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .loader-ring {
            position: absolute;
            inset: 0;
            border: 3px solid rgba(16, 185, 129, 0.15);
            border-top-color: #10b981;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .loader-avatar {
            width: 85px;
            height: 85px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #10b981;
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.4);
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="font-sans antialiased bg-stone-50 text-stone-900 dark:bg-obsidian-950 dark:text-stone-200 transition-colors duration-300 min-h-screen selection:bg-emerald-500 selection:text-stone-950">

    <!-- PRELOADER MENGGUNAKAN loader_url -->
    <div id="preloader">
        <div class="loader-container">
            <div class="loader-ring"></div>
            <img src="<?= $profile['loader_url']; ?>" alt="Loading Avatar" class="loader-avatar">
        </div>
        <h2 class="text-white font-bold text-sm tracking-widest mb-1"><?= $profile['name']; ?></h2>
        <p class="text-[11px] font-mono tracking-[0.2em] text-emerald-400 uppercase animate-pulse">LOADING...</p>
    </div>

    <!-- Mobile Header Bar -->
    <header class="lg:hidden fixed top-0 left-0 right-0 z-40 bg-white/90 dark:bg-obsidian-900/90 backdrop-blur-md border-b border-stone-200 dark:border-stone-800 px-4 py-3 flex items-center justify-between">
        <span class="text-sm font-bold">Portfolio<span class="text-emerald-500">.</span></span>
        <div class="flex items-center space-x-2">
            <button id="themeToggleMobile" class="p-2 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300">
                <i class="fa-solid fa-moon dark:hidden"></i>
                <i class="fa-solid fa-sun hidden dark:inline"></i>
            </button>
            <button id="menuToggle" class="p-2 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300">
                <i class="fa-solid fa-bars text-lg"></i>
            </button>
        </div>
    </header>

    <!-- Overlay Mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden transition-opacity"></div>

    <!-- MAIN CONTAINER -->
    <div class="flex min-h-screen pt-14 lg:pt-0">

        <!-- SIDEBAR UTAMA -->
        <aside id="sidebar" class="fixed top-0 bottom-0 left-0 z-50 w-72 bg-white dark:bg-obsidian-900 border-r border-stone-200 dark:border-stone-800 flex flex-col justify-between p-6 -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow-xl lg:shadow-none">
            <div>
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-stone-200 dark:border-stone-800">
                    <a href="#home" class="text-2xl font-bold tracking-tight">
                        Portfolio<span class="text-emerald-500">.</span>
                    </a>
                    <button id="themeToggleDesktop" class="hidden lg:flex p-2 rounded-xl bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-moon dark:hidden"></i>
                        <i class="fa-solid fa-sun hidden dark:inline"></i>
                    </button>
                </div>

                <!-- Profile Card Singkat (Menggunakan avatar_url) -->
                <div class="text-center mb-8">
                    <div class="relative w-24 h-24 mx-auto mb-3">
                        <img src="<?= $profile['avatar_url']; ?>" alt="<?= $profile['name']; ?>" class="w-full h-full object-cover rounded-full ring-2 ring-emerald-500/50 shadow-md">
                        <span class="absolute bottom-1 right-1 w-3.5 h-3.5 bg-emerald-500 border-2 border-white dark:border-obsidian-900 rounded-full" title="<?= $profile['status']; ?>"></span>
                    </div>
                    <h3 class="font-bold text-stone-900 dark:text-white text-base leading-snug"><?= $profile['name']; ?></h3>
                    <p class="text-xs text-emerald-600 dark:text-emerald-400 font-medium mt-1"><?= $profile['title']; ?></p>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-1">
                    <a href="#home" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-house text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Beranda</span>
                    </a>
                    <a href="#about" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-user text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Tentang Saya</span>
                    </a>
                    <a href="#skills" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-layer-group text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Keahlian</span>
                    </a>
                    <a href="#services" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-briefcase text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Layanan</span>
                    </a>
                    <a href="#projects" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-laptop-code text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Proyek</span>
                    </a>
                    <a href="#contact" class="nav-link flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-medium text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/60 hover:text-emerald-500 transition">
                        <i class="fa-solid fa-envelope text-stone-400 dark:text-stone-500 w-5"></i>
                        <span>Kontak</span>
                    </a>
                </nav>
            </div>

            <!-- Footer Sidebar -->
            <div class="pt-6 border-t border-stone-200 dark:border-stone-800 text-center">
                <div class="flex justify-center items-center space-x-3 mb-3">
                    <a href="<?= $social_links['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" title="Chat WhatsApp" class="w-9 h-9 rounded-xl bg-emerald-500/10 text-emerald-500 hover:bg-emerald-500 hover:text-white transition flex items-center justify-center">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                    <a href="<?= $social_links['github']; ?>" target="_blank" rel="noopener noreferrer" title="GitHub Profile" class="w-9 h-9 rounded-xl bg-stone-100 dark:bg-stone-800 hover:bg-stone-900 hover:text-white transition flex items-center justify-center">
                        <i class="fa-brands fa-github text-lg"></i>
                    </a>
                    <a href="<?= $social_links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn Profile" class="w-9 h-9 rounded-xl bg-stone-100 dark:bg-stone-800 hover:bg-sky-600 hover:text-white transition flex items-center justify-center">
                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="<?= $social_links['instagram']; ?>" target="_blank" rel="noopener noreferrer" title="Instagram @ichabirahim_" class="w-9 h-9 rounded-xl bg-stone-100 dark:bg-stone-800 hover:bg-pink-600 hover:text-white transition flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                </div>
                <p class="text-xs text-stone-500">&copy; <?= date('Y'); ?> <?= $profile['name']; ?></p>
            </div>
        </aside>

        <!-- AREA KONTEN UTAMA -->
        <main class="flex-1 lg:ml-72 p-6 lg:p-12 max-w-7xl mx-auto space-y-28">

            <!-- 1. HERO SECTION -->
            <section id="home" class="min-h-[85vh] flex flex-col justify-center py-12">
                <div class="grid lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-medium border border-emerald-500/20">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span><?= $profile['status']; ?></span>
                        </div>
                        
                        <h1 class="text-4xl sm:text-6xl font-bold tracking-tight leading-[1.1]">
                            Hi, I'm <br><span><?= $profile['name']; ?></span><span class="text-emerald-500 animate-pulse">|</span>
                        </h1>
                        
                        <p class="text-stone-600 dark:text-stone-400 text-base sm:text-lg font-light leading-relaxed max-w-xl">
                            <?= $profile['bio']; ?>
                        </p>
                        
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="https://canva.link/dp8y3f4r5xaymqz" download class="bg-stone-200 dark:bg-stone-800/80 hover:bg-stone-300 dark:hover:bg-stone-800 text-stone-800 dark:text-stone-200 border border-stone-300 dark:border-stone-700 font-medium px-6 py-3.5 rounded-xl transition flex items-center space-x-2 text-sm">
                                <i class="fa-solid fa-download text-xs"></i>
                                <span>View CV</span>
                            </a>
                            <a href="#projects" class="bg-emerald-500 hover:bg-emerald-600 text-stone-950 font-semibold px-6 py-3.5 rounded-xl shadow-lg shadow-emerald-500/20 transition flex items-center space-x-2 text-sm">
                                <span>View My Work</span>
                                <i class="fa-solid fa-arrow-down text-xs"></i>
                            </a>
                            <a href="#contact" class="bg-stone-200 dark:bg-stone-800/80 hover:bg-stone-300 dark:hover:bg-stone-800 text-stone-800 dark:text-stone-200 border border-stone-300 dark:border-stone-700 font-medium px-6 py-3.5 rounded-xl transition flex items-center space-x-2 text-sm">
                                <i class="fa-solid fa-envelope text-xs"></i>
                                <span>Get In Touch</span>
                            </a>
                        </div>

                        <!-- Mini Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-10 border-t border-stone-200 dark:border-stone-800 max-w-lg">
                            <?php foreach ($stats as $stat): ?>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold font-mono"><?= $stat['number']; ?></p>
                                    <p class="text-[10px] sm:text-xs font-semibold text-stone-500 uppercase tracking-wider mt-1"><?= $stat['label']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Kanan: Code Editor Box -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="w-full max-w-md bg-stone-900 text-stone-200 border border-stone-800 rounded-2xl shadow-2xl overflow-hidden font-mono text-xs">
                            <div class="bg-stone-950 px-4 py-3 border-b border-stone-800 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="w-3 h-3 rounded-full bg-rose-500 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
                                </div>
                                <span class="text-stone-400 text-[11px]">about-me.ts</span>
                                <div class="w-4"></div>
                            </div>
                            <div class="p-5 space-y-1.5 leading-relaxed overflow-x-auto">
                                <p><span class="text-purple-400">const</span> <span class="text-blue-400">developer</span> = {</p>
                                <p class="pl-4">name: <span class="text-emerald-300">"<?= $profile['name']; ?>"</span>,</p>
                                <p class="pl-4">role: <span class="text-emerald-300">"Full-Stack Developer"</span>,</p>
                                <p class="pl-4">education: <span class="text-emerald-300">"Vocational high school"</span>,</p>
                                <p class="pl-4">stack: [</p>
                                <p class="pl-8 text-emerald-300">"React", "PHP",</p>
                                <p class="pl-8 text-emerald-300">"JavaScript", "MySQL / MariaDB"</p>
                                <p class="pl-4">],</p>
                                <p class="pl-4">passion: <span class="text-emerald-300">"Building things"</span>,</p>
                                <p class="pl-4">available: <span class="text-amber-400">true</span></p>
                                <p>};</p>
                                <p class="pt-2 text-stone-500">> Ready for next adventure <span class="w-2 h-4 bg-emerald-400 inline-block animate-pulse align-middle"></span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center pt-16">
                    <a href="#about" class="text-stone-400 hover:text-emerald-500 transition inline-flex flex-col items-center space-y-2 text-xs font-mono tracking-widest uppercase">
                        <span>Scroll Down</span>
                        <i class="fa-solid fa-chevron-down animate-bounce text-emerald-500"></i>
                    </a>
                </div>
            </section>

            <!-- 2. ABOUT SECTION (MENGGUNAKAN about_image) -->
            <section id="about" class="scroll-mt-12">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-2">Tentang Saya</h2>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-12 gap-8 items-center bg-white dark:bg-obsidian-900 p-8 rounded-3xl border border-stone-200 dark:border-stone-800 shadow-sm">
                    <div class="md:col-span-5">
                        <div class="relative rounded-2xl overflow-hidden border border-stone-300 dark:border-stone-700 shadow-lg group">
                            <img src="<?= $profile['about_image']; ?>" alt="About Me" class="w-full h-80 object-cover filter blur-md group-hover:blur-none transition-all duration-500 cursor-pointer">
                        </div>
                    </div>
                    <div class="md:col-span-7 space-y-4 text-stone-600 dark:text-stone-300 leading-relaxed">
                        <p class="text-lg font-medium text-stone-900 dark:text-white">
                            Siswa kelas 12 yang berfokus merancang solusi digital modern, mulai dari struktur backend PHP hingga antarmuka pengguna interaktif.
                        </p>
                        <p class="text-sm">
                            Saya aktif mendalami teknologi web seperti PHP modern, pengelolaan database, serta pemrosesan data numerik. Selalu berantusias mengeksplorasi tantangan baru dalam arsitektur perangkat lunak maupun analitik data.
                        </p>
                        <div class="grid grid-cols-2 gap-4 pt-4 text-sm border-t border-stone-200 dark:border-stone-800">
                            <div><strong class="text-stone-900 dark:text-white">Nama:</strong> <?= $profile['name']; ?></div>
                            <div><strong class="text-stone-900 dark:text-white">Instagram:</strong> @ichabirahim_</div>
                            <div><strong class="text-stone-900 dark:text-white">Lokasi:</strong> <?= $profile['location']; ?></div>
                            <div><strong class="text-stone-900 dark:text-white">Status:</strong> <?= $profile['status']; ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. SKILLS SECTION (MINIMALIS TANPA DESKRIPSI) -->
            <section id="skills" class="scroll-mt-12">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-2">Keahlian Utama</h2>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    <?php foreach ($skills as $skill): ?>
                        <div class="p-5 rounded-2xl bg-white dark:bg-obsidian-900 border border-stone-200 dark:border-stone-800 shadow-sm hover:border-emerald-500/50 transition-all duration-300 flex flex-col items-center justify-center text-center group">
                            <div class="w-14 h-14 rounded-2xl <?= $skill['color']; ?> flex items-center justify-center text-3xl mb-3 group-hover:scale-110 transition-transform duration-300">
                                <i class="<?= $skill['icon']; ?>"></i>
                            </div>
                            <h3 class="text-sm font-bold text-stone-800 dark:text-stone-200 group-hover:text-emerald-500 transition-colors"><?= $skill['name']; ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- 4. SERVICES SECTION -->
            <section id="services" class="scroll-mt-12">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-2">Layanan yang Ditawarkan</h2>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($services as $srv): ?>
                        <div class="p-6 rounded-2xl bg-white dark:bg-obsidian-900 border border-stone-200 dark:border-stone-800 hover:border-emerald-500/50 transition duration-300 shadow-sm">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid <?= $srv['icon']; ?>"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2"><?= $srv['title']; ?></h3>
                            <p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed"><?= $srv['desc']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- 5. PROJECTS SECTION -->
            <section id="projects" class="scroll-mt-12">
                <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Proyek & Portofolio</h2>
                        <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($categories as $index => $cat): ?>
                            <button data-filter="<?= $cat; ?>" class="filter-btn px-4 py-1.5 rounded-lg text-xs font-semibold transition <?= $index === 0 ? 'bg-emerald-500 text-stone-950' : 'bg-stone-200 dark:bg-stone-800 text-stone-600 dark:text-stone-300 hover:bg-emerald-500/20'; ?>">
                                <?= $cat; ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($projects as $proj): ?>
                        <div class="project-card group rounded-2xl overflow-hidden bg-white dark:bg-obsidian-900 border border-stone-200 dark:border-stone-800 shadow-sm transition" data-category="<?= $proj['category']; ?>">
                            <div class="relative overflow-hidden h-48">
                                <img src="<?= $proj['image']; ?>" alt="<?= $proj['title']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <span class="absolute top-3 right-3 bg-stone-900/80 text-emerald-400 text-xs px-3 py-1 rounded-full backdrop-blur-md">
                                    <?= $proj['category']; ?>
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-bold mb-2 group-hover:text-emerald-500 transition"><?= $proj['title']; ?></h3>
                                <p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed mb-4"><?= $proj['desc']; ?></p>
                                <a href="<?= $proj['link']; ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-semibold text-emerald-500 dark:text-emerald-400 hover:underline">
                                    Detail Proyek <i class="fa-solid fa-arrow-up-right-from-square ml-1.5"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- 6. CONTACT SECTION -->
            <section id="contact" class="scroll-mt-12">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-2">Hubungi Saya</h2>
                    <div class="w-12 h-1 bg-emerald-500 rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-12 gap-8">
                    <div class="md:col-span-8 p-8 rounded-2xl bg-white dark:bg-obsidian-900 border border-stone-200 dark:border-stone-800 shadow-sm">
                        <form action="https://formspree.io/f/mnppoeon" method="POST" class="space-y-4">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold uppercase text-stone-500 dark:text-stone-400 mb-1">Nama Lengkap *</label>
                                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl bg-stone-50 dark:bg-obsidian-950 border border-stone-300 dark:border-stone-800 focus:outline-none focus:border-emerald-500 transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase text-stone-500 dark:text-stone-400 mb-1">Alamat Email *</label>
                                    <input type="email" name="_replyto" required class="w-full px-4 py-3 rounded-xl bg-stone-50 dark:bg-obsidian-950 border border-stone-300 dark:border-stone-800 focus:outline-none focus:border-emerald-500 transition text-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase text-stone-500 dark:text-stone-400 mb-1">Subjek</label>
                                <input type="text" name="_subject" class="w-full px-4 py-3 rounded-xl bg-stone-50 dark:bg-obsidian-950 border border-stone-300 dark:border-stone-800 focus:outline-none focus:border-emerald-500 transition text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase text-stone-500 dark:text-stone-400 mb-1">Pesan *</label>
                                <textarea name="message" rows="4" required class="w-full px-4 py-3 rounded-xl bg-stone-50 dark:bg-obsidian-950 border border-stone-300 dark:border-stone-800 focus:outline-none focus:border-emerald-500 transition text-sm"></textarea>
                            </div>
                            <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-stone-950 font-semibold px-8 py-3.5 rounded-xl shadow-md transition">
                                Kirim Pesan <i class="fa-solid fa-paper-plane ml-2 text-xs"></i>
                            </button>
                        </form>
                    </div>

                    <div class="md:col-span-4 space-y-4">
                        <a href="<?= $social_links['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" class="block p-6 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 hover:bg-emerald-500/20 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500 text-stone-950 flex items-center justify-center text-xl font-bold">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-emerald-600 dark:text-emerald-400 uppercase font-bold">WhatsApp Direct</p>
                                    <p class="text-sm font-semibold">Chat Langsung</p>
                                </div>
                            </div>
                        </a>

                        <a href="<?= $social_links['instagram']; ?>" target="_blank" rel="noopener noreferrer" class="block p-6 rounded-2xl bg-pink-500/10 border border-pink-500/20 hover:bg-pink-500/20 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-pink-600 text-white flex items-center justify-center text-xl">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-pink-600 dark:text-pink-400 uppercase font-bold">Instagram</p>
                                    <p class="text-sm font-semibold">@ichabirahim_</p>
                                </div>
                            </div>
                        </a>

                        <div class="p-6 rounded-2xl bg-white dark:bg-obsidian-900 border border-stone-200 dark:border-stone-800">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-stone-500 uppercase">Lokasi</p>
                                    <p class="text-sm font-semibold"><?= $profile['location']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 7. FOOTER UTAMA -->
            <footer class="mt-20 pt-10 pb-8 border-t border-stone-200 dark:border-stone-800 text-stone-500 dark:text-stone-400">
                <div class="grid md:grid-cols-12 gap-8 mb-8">
                    <div class="md:col-span-6 space-y-3">
                        <a href="#home" class="text-2xl font-bold text-stone-900 dark:text-white">
                            <?= $profile['name']; ?><span class="text-emerald-500">.</span>
                        </a>
                        <p class="text-xs leading-relaxed max-w-sm">
                            Web Developer & Data Science Student yang senantiasa mengembangkan solusi digital berbasis web dinamis PHP serta analisis data modern.
                        </p>
                    </div>

                    <div class="md:col-span-3 space-y-2">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-stone-900 dark:text-white">Navigasi</h4>
                        <ul class="space-y-1 text-xs">
                            <li><a href="#home" class="hover:text-emerald-500 transition">Beranda</a></li>
                            <li><a href="#about" class="hover:text-emerald-500 transition">Tentang Saya</a></li>
                            <li><a href="#skills" class="hover:text-emerald-500 transition">Keahlian</a></li>
                            <li><a href="#services" class="hover:text-emerald-500 transition">Layanan</a></li>
                            <li><a href="#projects" class="hover:text-emerald-500 transition">Proyek</a></li>
                        </ul>
                    </div>

                    <div class="md:col-span-3 space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-stone-900 dark:text-white">Sosial Media</h4>
                        <div class="flex items-center space-x-2">
                            <a href="<?= $social_links['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp" class="w-8 h-8 rounded-lg bg-stone-200 dark:bg-stone-800 text-stone-700 dark:text-stone-300 hover:bg-emerald-500 hover:text-stone-950 transition flex items-center justify-center text-sm">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="<?= $social_links['github']; ?>" target="_blank" rel="noopener noreferrer" title="GitHub" class="w-8 h-8 rounded-lg bg-stone-200 dark:bg-stone-800 text-stone-700 dark:text-stone-300 hover:bg-stone-900 hover:text-white transition flex items-center justify-center text-sm">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="<?= $social_links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn" class="w-8 h-8 rounded-lg bg-stone-200 dark:bg-stone-800 text-stone-700 dark:text-stone-300 hover:bg-sky-600 hover:text-white transition flex items-center justify-center text-sm">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="<?= $social_links['instagram']; ?>" target="_blank" rel="noopener noreferrer" title="Instagram @ichabirahim_" class="w-8 h-8 rounded-lg bg-stone-200 dark:bg-stone-800 text-stone-700 dark:text-stone-300 hover:bg-pink-600 hover:text-white transition flex items-center justify-center text-sm">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-stone-200 dark:border-stone-800/60 flex flex-col sm:flex-row justify-between items-center text-xs">
                    <p>&copy; <?= date('Y'); ?> <?= $profile['name']; ?>. All rights reserved.</p>
                    <p class="mt-2 sm:mt-0 text-[11px]">Dibuat dengan PHP & Tailwind CSS</p>
                </div>
            </footer>

        </main>
    </div>

    <!-- JAVASCRIPT UTAMA -->
    <script>
        // Preloader Animasi Loading Masuk
        window.addEventListener('load', () => {
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 800);
            }, 1200);
        });

        // Dark / Light Mode Toggle Logic
        const htmlElement = document.documentElement;
        
        function toggleTheme() {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        if (localStorage.getItem('theme') === 'light') {
            htmlElement.classList.remove('dark');
        } else {
            htmlElement.classList.add('dark');
        }

        document.getElementById('themeToggleDesktop')?.addEventListener('click', toggleTheme);
        document.getElementById('themeToggleMobile')?.addEventListener('click', toggleTheme);

        // Toggle Sidebar Mobile
        const sidebar = document.getElementById('sidebar');
        const menuToggle = document.getElementById('menuToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        menuToggle?.addEventListener('click', toggleSidebar);
        sidebarOverlay?.addEventListener('click', toggleSidebar);

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    toggleSidebar();
                }
            });
        });

        // Filter Proyek
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.getAttribute('data-filter');

                filterBtns.forEach(b => {
                    b.classList.remove('bg-emerald-500', 'text-stone-950');
                    b.classList.add('bg-stone-200', 'dark:bg-stone-800', 'text-stone-600', 'dark:text-stone-300');
                });
                btn.classList.remove('bg-stone-200', 'dark:bg-stone-800', 'text-stone-600', 'dark:text-stone-300');
                btn.classList.add('bg-emerald-500', 'text-stone-950');

                projectCards.forEach(card => {
                    if (category === 'All' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>