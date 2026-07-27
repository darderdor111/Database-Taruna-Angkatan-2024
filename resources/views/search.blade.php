<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Admin Portal - Search Results</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "secondary-fixed": "#e0e3e5",
                      "secondary-fixed-dim": "#c4c7c9",
                      "surface-bright": "#f9f9ff",
                      "on-secondary": "#ffffff",
                      "secondary": "#5c5f61",
                      "outline": "#72777f",
                      "on-secondary-fixed": "#191c1e",
                      "on-tertiary-fixed-variant": "#38485d",
                      "on-error-container": "#93000a",
                      "inverse-surface": "#263143",
                      "surface-dim": "#cfdaf2",
                      "on-surface": "#111c2d",
                      "surface": "#f9f9ff",
                      "on-tertiary-container": "#95a5be",
                      "tertiary-fixed": "#d3e4fe",
                      "primary-container": "#0a3d62",
                      "surface-tint": "#386188",
                      "tertiary-fixed-dim": "#b7c8e1",
                      "on-primary-container": "#80a8d3",
                      "surface-container-lowest": "#ffffff",
                      "on-secondary-container": "#626567",
                      "outline-variant": "#c2c7cf",
                      "secondary-container": "#e0e3e5",
                      "surface-variant": "#d8e3fb",
                      "on-primary": "#ffffff",
                      "primary": "#002743",
                      "tertiary": "#152539",
                      "on-background": "#111c2d",
                      "surface-container-low": "#f0f3ff",
                      "on-secondary-fixed-variant": "#444749",
                      "on-surface-variant": "#42474e",
                      "surface-container": "#e7eeff",
                      "error-container": "#ffdad6",
                      "on-error": "#ffffff",
                      "surface-container-highest": "#d8e3fb",
                      "background": "#f9f9ff",
                      "surface-container-high": "#dee8ff",
                      "on-primary-fixed-variant": "#1d496f",
                      "on-primary-fixed": "#001d34",
                      "primary-fixed": "#cfe5ff",
                      "tertiary-container": "#2b3b50",
                      "inverse-on-surface": "#ecf1ff",
                      "inverse-primary": "#a2caf7",
                      "on-tertiary": "#ffffff",
                      "primary-fixed-dim": "#a2caf7",
                      "on-tertiary-fixed": "#0b1c30",
                      "error": "#ba1a1a"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "gutter": "1.5rem",
                      "section-gap": "2rem",
                      "sidebar-width": "280px",
                      "container-max": "1280px",
                      "component-padding": "1rem",
                      "margin-mobile": "1rem"
              },
              "fontFamily": {
                      "headline-lg": ["Inter"],
                      "display": ["Inter"],
                      "title-lg": ["Inter"],
                      "body-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "headline-md": ["Inter"],
                      "label-md": ["Inter"],
                      "code": ["JetBrains Mono"],
                      "headline-lg-mobile": ["Inter"]
              }
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
            color: #111c2d;
            width: 100%;
            margin: 0;
            overflow-x: hidden;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- Shared TopAppBar -->
<nav class="bg-primary dark:bg-primary text-on-primary font-title-lg text-title-lg docked full-width top-0 sticky z-50 border-b border-outline-variant shadow-sm flex justify-between items-center px-gutter h-16 w-full">
<div class="flex items-center gap-6">
<a href="{{ route('home') }}" class="flex items-center gap-3">
    <img src="{{ asset('images/logo-stmkg.jpg') }}" alt="Logo STMKG" class="h-12 w-12 object-contain bg-white p-0.5 rounded-lg">
    <span class="text-2xl font-bold text-on-primary">STMKG ANGKATAN 2024</span>
</a>
</div>
</nav>
<div class="flex min-h-screen">
<!-- Sidebar - Filters -->
<aside class="hidden md:flex flex-col w-sidebar-width bg-primary fixed top-16 h-[calc(100vh-64px)] z-40 py-6 px-4 overflow-y-auto custom-scrollbar border-r border-outline-variant/20 shadow-lg" style="left: 0;">
<div class="mb-4 px-2">
    <a href="{{ route('home') }}" class="flex items-center justify-center gap-2 w-full py-2.5 bg-white/10 hover:bg-white/20 text-on-primary border border-white/20 rounded-lg text-sm font-semibold transition-all">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Kembali ke Beranda
    </a>
</div>
<form action="{{ route('search') }}" method="GET" class="flex flex-col h-full">
<input type="hidden" name="q" value="{{ request('q') }}">
<div class="mb-8">
<h3 class="font-label-md text-label-md text-on-primary/50 uppercase tracking-widest px-2 mb-4">Pencarian Filter</h3>
<div class="space-y-6">
<!-- Prodi Filter -->
<div>
<label class="text-lg font-semibold text-on-primary block px-2 mb-2">Program Studi</label>
<select name="prodi" id="prodi-filter" class="w-full bg-primary-container/50 border border-outline-variant/30 text-on-primary rounded-lg text-base py-2.5 px-3 focus:ring-primary-fixed-dim focus:border-primary-fixed-dim">
<option value="">Semua Prodi</option>
@foreach($programStudiList as $prodi)
<option value="{{ $prodi->id_prodi }}" {{ request('prodi') == $prodi->id_prodi ? 'selected' : '' }}>{{ $prodi->nama_prodi }}</option>
@endforeach
</select>
</div>
<!-- Kelas Filter -->
<div>
<label class="text-lg font-semibold text-on-primary block px-2 mb-2">Kelas</label>
<select name="kelas" id="kelas-filter" class="w-full bg-primary-container/50 border border-outline-variant/30 text-on-primary rounded-lg text-base py-2.5 px-3 focus:ring-primary-fixed-dim focus:border-primary-fixed-dim">
<option value="">Semua Kelas</option>
@foreach($kelasList as $kelas)
<option value="{{ $kelas->id_kelas }}" data-prodi="{{ $kelas->id_prodi }}" {{ request('kelas') == $kelas->id_kelas ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
@endforeach
</select>
</div>
<!-- Action Buttons close to Kelas -->
<div class="pt-4 space-y-3 px-2">
    <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-500 active:scale-95 text-white font-bold rounded-lg transition-all text-base shadow-md">
        Terapkan Filter
    </button>
    <a href="{{ route('search') }}" class="w-full text-center block py-2.5 text-white hover:text-white/80 font-bold transition-all text-base">
        Reset Filter
    </a>
</div>
</div>
</div>
</form>
</aside>
<!-- Main Content -->
<main class="flex-1 md:ml-[280px] p-gutter">
<div class="">
<!-- Header Section -->
<div class="flex flex-col gap-4 mb-8">
<div>
<h1 class="font-headline-lg text-headline-lg text-primary mb-1">Hasil Pencarian</h1>
<p class="text-on-surface-variant font-body-md mb-4">Menampilkan <span class="font-bold text-primary">{{ $tarunaList->total() }} hasil</span> @if(request('q')) untuk <span class="italic text-primary-container px-2 py-0.5 bg-surface-container rounded-md">"{{ request('q') }}"</span> @endif</p>

<!-- Search Bar under Hasil Pencarian -->
<div class="max-w-2xl flex items-center relative">
<form class="relative w-full flex items-center bg-white border border-outline-variant shadow-sm rounded-full overflow-hidden focus-within:ring-2 focus-within:ring-primary/20 transition-all h-14" action="{{ route('search') }}" method="GET">
<div class="pl-5 text-outline flex items-center">
<span class="material-symbols-outlined text-[26px]">search</span>
</div>
<input name="q" value="{{ request('q') }}" class="w-full py-4 px-4 bg-transparent border-none focus:ring-0 text-on-surface placeholder:text-outline/60 text-base font-medium" placeholder="Cari taruna, NPT, atau kelas..." type="text">
<div class="pr-2 flex items-center">
    <button type="submit" class="bg-primary text-on-primary px-6 h-10 rounded-full text-sm font-semibold hover:opacity-90 active:scale-95 transition-all flex items-center justify-center">
        Cari
    </button>
</div>
@if(request('prodi'))
<input type="hidden" name="prodi" value="{{ request('prodi') }}">
@endif
@if(request('kelas'))
<input type="hidden" name="kelas" value="{{ request('kelas') }}">
@endif
</form>
</div>
</div>
</div>
<!-- Search Results Table Card -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b-2 border-primary-container/20">
<th class="py-4 px-6 font-label-md text-label-md text-primary uppercase tracking-wider w-16">No</th>
<th class="py-4 px-6 font-label-md text-label-md text-primary uppercase tracking-wider">Nama Lengkap</th>
<th class="py-4 px-6 font-label-md text-label-md text-primary uppercase tracking-wider">Program Studi</th>
<th class="py-4 px-6 font-label-md text-label-md text-primary uppercase tracking-wider w-24 text-center">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body-md text-on-surface">
@forelse($tarunaList as $index => $item)
<tr onclick="window.location.href='{{ route('detail', $item->id_taruna) }}'" class="hover:bg-surface-container/30 transition-colors cursor-pointer">
<td class="py-4 px-6">{{ $tarunaList->firstItem() + $index }}</td>
<td class="py-4 px-6 font-semibold">{{ $item->nama_lengkap }}</td>
<td class="py-4 px-6">{{ $item->kelas->programStudi->nama_prodi ?? '-' }}</td>
<td class="py-4 px-6 text-center">
    <a href="{{ route('detail', $item->id_taruna) }}" onclick="event.stopPropagation();" class="inline-flex items-center gap-1 px-3 py-1.5 bg-primary text-on-primary text-xs font-semibold rounded-lg hover:bg-primary-container transition-colors shadow-sm">
        <span class="material-symbols-outlined text-[16px]">visibility</span>
        Detail
    </a>
</td>
</tr>
@empty
<tr>
<td colspan="4" class="py-8 text-center text-on-surface-variant">Tidak ada data taruna yang ditemukan.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-gutter py-6 flex flex-col md:flex-row items-center justify-between border-t border-outline-variant bg-surface-container-low/30 gap-4">
<p class="text-on-surface-variant font-label-md text-label-md">Menampilkan {{ $tarunaList->firstItem() ?? 0 }} sampai {{ $tarunaList->lastItem() ?? 0 }} dari {{ $tarunaList->total() }} data</p>
<div>
{{ $tarunaList->appends(request()->query())->links() }}
</div>
</div>
</div>
<!-- Info Banner -->
<div class="mt-section-gap bg-primary-container/10 border-l-4 border-primary p-6 rounded-r-lg flex items-start gap-4">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">info</span>
<div>
<h4 class="font-title-lg text-primary text-sm font-bold mb-1">Catatan Pencarian</h4>
<p class="font-body-md text-on-surface-variant text-sm">Data yang ditampilkan adalah data taruna aktif untuk tahun akademik 2024/2025. Jika anda tidak menemukan data yang dicari, silakan hubungi bagian Administrasi Akademik (Student Affairs).</p>
</div>
</div>
</div>
</main>
</div>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest text-on-surface-variant dark:text-on-surface-variant font-body-md text-body-md md:ml-[280px] border-t border-outline-variant flex flex-col md:flex-row justify-between items-center px-gutter py-8 mt-section-gap relative z-40">
<div class="flex flex-col gap-2 text-center md:text-left mb-6 md:mb-0">
<div class="font-title-lg text-title-lg text-primary font-bold">STMKG 2024</div>
<p class="text-xs opacity-70">© 2024 Sekolah Tinggi Meteorologi Klimatologi dan Geofisika (STMKG). All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-6 md:gap-8">
<a class="text-secondary hover:text-primary underline transition-colors" href="#">Privacy Policy</a>
<a class="text-secondary hover:text-primary underline transition-colors" href="#">Terms of Service</a>
<a class="text-secondary hover:text-primary underline transition-colors" href="#">Contact Support</a>
<a class="text-secondary hover:text-primary underline transition-colors" href="#">Official Website</a>
</div>
</footer>
<script>
        // Dynamic Kelas filter based on selected Prodi
        const prodiSelect = document.getElementById('prodi-filter');
        const kelasSelect = document.getElementById('kelas-filter');
        
        if (prodiSelect && kelasSelect) {
            const originalKelasOptions = Array.from(kelasSelect.options);

            function updateKelasFilter() {
                const selectedProdi = prodiSelect.value;
                const currentSelectedKelas = "{{ request('kelas') }}";
                
                // Clear current options
                kelasSelect.innerHTML = '';
                
                // Filter and append appropriate options
                originalKelasOptions.forEach(option => {
                    if (!option.value || !selectedProdi || option.getAttribute('data-prodi') === selectedProdi) {
                        const newOption = option.cloneNode(true);
                        if (newOption.value === currentSelectedKelas) {
                            newOption.selected = true;
                        }
                        kelasSelect.appendChild(newOption);
                    }
                });
            }

            prodiSelect.addEventListener('change', () => {
                // When prodi changes, reset class value to empty (Semua Kelas) before filtering
                kelasSelect.value = "";
                updateKelasFilter();
            });

            // Initialize on load to match initial request
            updateKelasFilter();
        }
    </script>




</body></html>
