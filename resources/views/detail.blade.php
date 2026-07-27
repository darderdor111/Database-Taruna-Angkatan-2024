<!DOCTYPE html><html lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Detail Profil Taruna - STMKG 2024</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
        }
        .academic-table tr:nth-child(even) {
            background-color: #f0f3ff;
        }
        .academic-table tr {
            border-bottom: 1px solid #f1f5f9;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary-fixed": "#191c1e",
                      "surface-container-low": "#f0f3ff",
                      "secondary": "#5c5f61",
                      "surface-tint": "#386188",
                      "surface": "#f9f9ff",
                      "on-primary-fixed": "#001d34",
                      "surface-bright": "#f9f9ff",
                      "primary-fixed-dim": "#a2caf7",
                      "primary-container": "#0a3d62",
                      "on-surface": "#111c2d",
                      "on-tertiary-fixed-variant": "#38485d",
                      "on-error-container": "#93000a",
                      "inverse-on-surface": "#ecf1ff",
                      "secondary-container": "#e0e3e5",
                      "on-error": "#ffffff",
                      "tertiary-fixed-dim": "#b7c8e1",
                      "surface-container-high": "#dee8ff",
                      "outline-variant": "#c2c7cf",
                      "tertiary": "#152539",
                      "surface-variant": "#d8e3fb",
                      "inverse-primary": "#a2caf7",
                      "tertiary-container": "#2b3b50",
                      "on-background": "#111c2d",
                      "on-secondary-container": "#626567",
                      "on-tertiary-container": "#95a5be",
                      "background": "#f9f9ff",
                      "on-primary-container": "#80a8d3",
                      "primary-fixed": "#cfe5ff",
                      "on-secondary-fixed-variant": "#444749",
                      "secondary-fixed": "#e0e3e5",
                      "error-container": "#ffdad6",
                      "primary": "#002743",
                      "on-tertiary": "#ffffff",
                      "on-secondary": "#ffffff",
                      "error": "#ba1a1a",
                      "surface-container-lowest": "#ffffff",
                      "on-surface-variant": "#42474e",
                      "tertiary-fixed": "#d3e4fe",
                      "surface-container-highest": "#d8e3fb",
                      "on-tertiary-fixed": "#0b1c30",
                      "secondary-fixed-dim": "#c4c7c9",
                      "on-primary": "#ffffff",
                      "surface-container": "#e7eeff",
                      "surface-dim": "#cfdaf2",
                      "inverse-surface": "#263143",
                      "outline": "#72777f",
                      "on-primary-fixed-variant": "#1d496f"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "sidebar-width": "280px",
                      "gutter": "1.5rem",
                      "container-max": "1280px",
                      "section-gap": "2rem",
                      "component-padding": "1rem",
                      "margin-mobile": "1rem"
              },
              "fontFamily": {
                      "headline-lg": ["Inter"],
                      "title-lg": ["Inter"],
                      "body-md": ["Inter"],
                      "label-md": ["Inter"]
              },
              "fontSize": {
                      "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                      "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                      "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopNavBar (Simplified for Task) -->
<header class="bg-primary text-on-primary sticky top-0 z-50 shadow-sm border-b border-outline-variant px-gutter h-16 w-full flex justify-between items-center">
<div class="flex items-center gap-6">
<a href="{{ route('home') }}" class="flex items-center gap-3">
    <img src="{{ asset('images/logo-stmkg.jpg') }}" alt="Logo STMKG" class="h-12 w-12 object-contain bg-white p-0.5 rounded-lg">
    <span class="text-2xl font-bold text-on-primary">STMKG ANGKATAN 2024</span>
</a>
<nav class="hidden md:flex gap-4">
<!-- Navigation Shell Mapping -->




</nav>
</div>

</header>
<!-- Main Content Canvas -->
<main class="flex-grow w-full px-gutter py-section-gap">
<!-- Back Button & Breadcrumbs -->
<div class="mb-8 flex items-center justify-between">
<a href="{{ route('search') }}" class="flex items-center gap-2 px-4 py-2 bg-white border border-outline-variant text-primary font-semibold rounded hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined">arrow_back</span>
<span class="">Kembali ke Hasil Pencarian</span>
</a>
<div class="flex items-center gap-2 text-label-md font-label-md text-secondary">

<span class="material-symbols-outlined text-[12px]">chevron_right</span>

<span class="material-symbols-outlined text-[12px]">chevron_right</span>

</div>
</div>
<!-- Student Profile Section -->
<div class="bg-white border border-outline-variant rounded shadow-sm overflow-hidden mb-12">
<!-- Profile Header/Banner -->

<!-- Single Large Data Table -->
<div class="mt-16 p-8">
<div class="border border-outline-variant rounded-lg overflow-hidden">
<table class="w-full academic-table border-collapse">
<thead>
<tr class="bg-primary text-on-primary">
<th class="px-6 py-4 text-left font-title-lg uppercase tracking-wider text-headline-md" colspan="2">Informasi Lengkap Taruna</th>
</tr>
</thead>
<tbody class="text-title-lg">
<tr class="">
<td class="px-6 py-4 font-bold text-primary w-1/3">Nama Lengkap</td>
<td class="px-6 py-4 text-on-surface-variant uppercase font-semibold">{{ $taruna->nama_lengkap }}</td>
</tr>
<tr class="">
<td class="px-6 py-4 font-bold text-primary">NPT (Nomor Pokok Taruna)</td>
<td class="px-6 py-4 text-on-surface-variant font-code">{{ $taruna->npt }}</td>
</tr>
<tr class="">
<td class="px-6 py-4 font-bold text-primary">Jenis Kelamin</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $taruna->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
</tr>
<tr class="">
<td class="px-6 py-4 font-bold text-primary">Kelas</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $taruna->kelas->nama_kelas ?? '-' }}</td>
</tr>
<tr class="">
<td class="px-6 py-4 font-bold text-primary">Program Studi</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $taruna->kelas->programStudi->nama_prodi ?? '-' }}</td>
</tr>
</tbody>
</table>
</div>
<!-- Action Footer within Canvas -->
<div class="mt-8 flex justify-end gap-4">


</div>
</div>
</div>
<!-- Academic Record Summary (Bento Style) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-section-gap">



</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low text-on-surface-variant border-t border-outline-variant px-gutter py-8 mt-auto">
<div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex flex-col items-center md:items-start">
<span class="font-title-lg text-title-lg text-primary font-bold">STMKG 2024</span>
<p class="font-body-md text-body-md mt-1">© 2024 Sekolah Tinggi Meteorologi Klimatologi dan Geofisika (STMKG). All rights reserved.</p>
</div>
<div class="flex gap-6">
<a class="text-secondary hover:text-primary underline font-body-md" href="#">Privacy Policy</a>
<a class="text-secondary hover:text-primary underline font-body-md" href="#">Terms of Service</a>
<a class="text-secondary hover:text-primary underline font-body-md" href="#">Contact Support</a>
<a class="text-secondary hover:text-primary underline font-body-md" href="#">Official Website</a>
</div>
</div>
</footer>
<script>
        // Micro-interaction for table rows
        document.querySelectorAll('.academic-table tbody tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                if(!row.classList.contains('bg-surface-container-high/30')) {
                    row.style.backgroundColor = '#f1f5f9';
                }
            });
            row.addEventListener('mouseleave', () => {
                if(!row.classList.contains('bg-surface-container-high/30')) {
                    row.style.backgroundColor = '';
                }
            });
        });
    </script>




</body></html>
