<!DOCTYPE html><html class="light" lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>STMKG 2024 - Portal Pencarian Taruna</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#191c1e",
                    "primary-container": "#0a3d62",
                    "surface-container": "#e7eeff",
                    "on-surface": "#111c2d",
                    "background": "#f9f9ff",
                    "on-error-container": "#93000a",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed": "#d3e4fe",
                    "surface-container-highest": "#d8e3fb",
                    "on-primary-container": "#80a8d3",
                    "on-secondary-container": "#626567",
                    "on-secondary-fixed-variant": "#444749",
                    "primary-fixed-dim": "#a2caf7",
                    "tertiary": "#152539",
                    "on-surface-variant": "#42474e",
                    "on-background": "#111c2d",
                    "tertiary-container": "#2b3b50",
                    "surface-container-lowest": "#ffffff",
                    "on-error": "#ffffff",
                    "primary": "#002743",
                    "surface-container-low": "#f0f3ff",
                    "error": "#ba1a1a",
                    "outline": "#72777f",
                    "secondary": "#5c5f61",
                    "on-tertiary-fixed-variant": "#38485d",
                    "on-tertiary-fixed": "#0b1c30",
                    "secondary-container": "#e0e3e5",
                    "surface-variant": "#d8e3fb",
                    "secondary-fixed": "#e0e3e5",
                    "outline-variant": "#c2c7cf",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#a2caf7",
                    "surface-bright": "#f9f9ff",
                    "on-primary-fixed": "#001d34",
                    "on-primary-fixed-variant": "#1d496f",
                    "surface": "#f9f9ff",
                    "on-tertiary-container": "#95a5be",
                    "on-tertiary": "#ffffff",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "surface-tint": "#386188",
                    "inverse-on-surface": "#ecf1ff",
                    "secondary-fixed-dim": "#c4c7c9",
                    "primary-fixed": "#cfe5ff",
                    "surface-dim": "#cfdaf2",
                    "inverse-surface": "#263143",
                    "surface-container-high": "#dee8ff",
                    "error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "section-gap": "2rem",
                    "margin-mobile": "1rem",
                    "component-padding": "1rem",
                    "container-max": "1280px",
                    "gutter": "1.5rem",
                    "sidebar-width": "280px"
            },
            "fontFamily": {
                    "body-md": ["Inter"],
                    "label-md": ["Inter"],
                    "code": ["JetBrains Mono"],
                    "headline-md": ["Inter"],
                    "display": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "title-lg": ["Inter"]
            },
            "fontSize": {
                    "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "code": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "display": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
            /* Efek bayangan (watermark) samar agar gambar gedung tidak terlalu cerah */
            background-image: linear-gradient(rgba(249, 249, 255, 0.85), rgba(249, 249, 255, 0.85)), url('{{ asset("images/gedung-stmkg.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .hero-gradient {
            background: linear-gradient(180deg, rgba(0, 39, 67, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<nav class="bg-primary dark:bg-primary text-on-primary dark:text-on-primary font-title-lg text-title-lg docked full-width top-0 sticky z-50 border-b border-outline-variant shadow-sm flex justify-between items-center px-gutter h-16 w-full">
<div class="flex items-center gap-4">

<a href="{{ route('home') }}" class="flex items-center gap-3">
    <img src="{{ asset('images/logo-stmkg.jpg') }}" alt="Logo STMKG" class="h-12 w-12 object-contain bg-white p-0.5 rounded-lg">
    <span class="text-2xl font-bold text-on-primary">STMKG ANGKATAN 2024</span>
</a>
</div>
<div class="hidden md:flex gap-8 items-center h-full">




</div>
<div class="flex items-center gap-4">
<a href="{{ route('login') }}" class="flex items-center gap-1.5 px-4 py-2 bg-white/10 text-on-primary border border-white/20 rounded-lg text-sm font-semibold hover:bg-white/20 transition-all">
    <span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
    Login sebagai Admin
</a>
</div>
</nav>
<!-- Main Content -->
<main class="flex-grow flex flex-col items-center justify-center px-gutter hero-gradient w-full">
<div class="max-w-4xl w-full text-center space-y-12 py-20 animate-fade-in" style="opacity: 1; transform: translateY(0px); transition: 0.8s cubic-bezier(0.16, 1, 0.3, 1);">
<!-- Hero Header -->
<div class="space-y-4">

<h1 class="font-display text-display text-primary leading-tight">
                    SISTEM INFORMASI DATA TARUNA STMKG ANGKATAN 2024
                </h1>
<p class="font-body-lg text-body-lg text-secondary max-w-2xl mx-auto">
                    Portal penelusuran data taruna STMKG yang menghadirkan akses informasi secara praktis, terpusat, dan mudah dijangkau untuk mendukung kebutuhan pencarian data antar sesama taruna
                </p>
</div>
<!-- Search Section -->
<div class="space-y-6">
<form class="w-full relative group" action="{{ route('search') }}" method="GET">
<div class="flex items-center bg-white border border-outline-variant shadow-sm rounded-xl overflow-hidden focus-within:ring-2 focus-within:ring-primary focus-within:border-primary transition-all">
<div class="pl-6 text-outline">
<span class="material-symbols-outlined text-[28px]">search</span>
</div>
<input name="q" class="w-full py-6 px-4 bg-transparent border-none focus:ring-0 font-body-lg text-body-lg text-on-surface placeholder:text-outline/60" placeholder="Masukkan Nama Lengkap atau NPT Taruna..." type="text">
<div class="pr-3">
<button class="bg-primary text-on-primary px-8 py-3.5 rounded-lg font-title-lg text-title-lg hover:opacity-90 active:scale-95 transition-all" type="submit">
                                Cari
                            </button>
</div>
</div>
<!-- Filters -->
<div class="flex flex-col md:flex-row gap-4 justify-center mt-6">
<div class="relative min-w-[280px]">
<select name="prodi" onchange="this.form.submit()" class="w-full h-[48px] bg-white border border-outline-variant rounded-lg px-4 pr-10 appearance-none font-body-md text-body-md text-on-surface focus:ring-primary focus:border-primary">
<option value="">Semua Program Studi</option>
@foreach($programStudiList as $prodi)
<option value="{{ $prodi->id_prodi }}">{{ $prodi->nama_prodi }}</option>
@endforeach
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-outline">expand_more</span>
</div>
</div>
</form>
</div>
<!-- Quick Links / Stats -->
<div class="flex flex-col sm:flex-row justify-center items-center gap-12 sm:gap-20 pt-12 border-t border-outline-variant/30">
<div class="flex flex-col items-center">
<span class="font-headline-lg text-headline-lg text-primary">{{ number_format($totalTaruna) }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-widest">Taruna Aktif</span>
</div>
<div class="flex flex-col items-center">
<span class="font-headline-lg text-headline-lg text-primary">{{ $totalProdi }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-widest">Program Studi</span>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest text-on-surface-variant dark:text-on-surface-variant font-body-md text-body-md full-width bottom border-t border-outline-variant flex flex-col md:flex-row justify-between items-center px-gutter py-8 mt-section-gap">
<div class="flex flex-col md:items-start items-center gap-2 mb-6 md:mb-0">
<span class="font-title-lg text-title-lg text-primary">STMKG 2024</span>
<p class="max-w-md text-center md:text-left opacity-80">© 2024 Sekolah Tinggi Meteorologi Klimatologi dan Geofisika (STMKG). All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-x-8 gap-y-4">




</div>
</footer>
<script>
        // Micro-interaction for search focus
        const searchInput = document.querySelector('input[type="text"]');
        const searchWrapper = searchInput?.closest('form');

        searchInput?.addEventListener('focus', () => {
            searchWrapper.classList.add('scale-[1.01]');
        });

        searchInput?.addEventListener('blur', () => {
            searchWrapper.classList.remove('scale-[1.01]');
        });

        // Simple entrance animation
        document.addEventListener('DOMContentLoaded', () => {
            const mainContent = document.querySelector('main > div');
            mainContent.style.opacity = '0';
            mainContent.style.transform = 'translateY(20px)';
            mainContent.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
            
            setTimeout(() => {
                mainContent.style.opacity = '1';
                mainContent.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>




</body></html>
