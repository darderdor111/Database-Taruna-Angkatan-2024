<!-- Admin: Dashboard & Management -->
<!DOCTYPE html><html class="light" lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>STMKG 2024 - Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-container": "#0a3d62",
                    "surface-container": "#e7eeff",
                    "on-surface": "#111c2d",
                    "background": "#f9f9ff",
                    "on-primary-container": "#80a8d3",
                    "primary": "#002743",
                    "surface-container-low": "#f0f3ff",
                    "error": "#ba1a1a",
                    "outline": "#72777f",
                    "secondary": "#5c5f61",
                    "outline-variant": "#c2c7cf",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#a2caf7",
                    "on-surface-variant": "#42474e"
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
            color: #111c2d;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .sidebar-active {
            background-color: #0a3d62;
            color: #80a8d3;
            border-left: 4px solid #a2caf7;
        }
        .table-zebra tr:nth-child(even) {
            background-color: #f0f3ff;
        }
        .sticky-header {
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 10;
        }
    </style>
</head>
<body class="flex min-h-screen">
<!-- SideNavBar (Authority: JSON & Design System) -->
<aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-primary text-on-primary flex flex-col py-6 z-50">
<div class="px-6 mb-10 flex flex-col items-center">

<h1 class="font-title-lg text-title-lg font-bold text-center">Admin Portal</h1>
<p class="font-label-md text-label-md text-on-primary/60 mt-1">Academic Admin</p>
</div>
<nav class="flex-1 space-y-1">



<!-- Active State: Data Taruna (Master Data mapping) -->
<a class="bg-primary-container text-on-primary-container border-l-4 border-inverse-primary px-6 py-3 flex items-center gap-3 transition-all duration-200 font-label-md text-label-md font-bold" href="{{ route('admin.dashboard') }}">
<span class="material-symbols-outlined">group</span>
                Data Taruna
            </a>
<a class="text-on-primary/60 px-6 py-3 flex items-center gap-3 hover:bg-primary-container/50 hover:text-on-primary transition-all duration-200 font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">settings</span>
                Settings
            </a>
</nav>
<div class="mt-auto px-6 space-y-1 pt-6 border-t border-primary-container">
<a class="text-on-primary/60 py-3 flex items-center gap-3 hover:text-on-primary font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">help</span>
                Help Center
            </a>
<a class="text-on-primary/60 py-3 flex items-center gap-3 hover:text-error transition-colors font-label-md text-label-md" href="{{ route('logout') }}">
<span class="material-symbols-outlined">logout</span>
                Logout
            </a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-[280px] min-h-screen flex flex-col">

<!-- Dashboard Content -->
<section class="p-gutter max-w-container-max mx-auto w-full mt-6">
<!-- Page Header & Action -->

@if(session('success'))
<div id="toast-success" class="fixed top-6 right-6 z-50 flex items-center w-full max-w-sm p-4 text-gray-800 bg-white rounded-xl shadow-2xl border border-emerald-200 animate-in fade-in slide-in-from-top-5 duration-300">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-emerald-600 bg-emerald-100 rounded-lg">
        <span class="material-symbols-outlined text-2xl">check_circle</span>
    </div>
    <div class="ms-3 text-sm font-medium pr-2">
        <h4 class="font-bold text-emerald-900 text-sm">Berhasil Disimpan</h4>
        <p class="text-emerald-700 text-xs mt-0.5">{{ session('success') }}</p>
    </div>
    <button type="button" onclick="document.getElementById('toast-success').remove()" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8">
        <span class="material-symbols-outlined text-sm">close</span>
    </button>
</div>
<script>
    setTimeout(() => {
        const toast = document.getElementById('toast-success');
        if(toast) {
            toast.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(-10px)';
            setTimeout(() => toast.remove(), 500);
        }
    }, 4000);
</script>
@endif

<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
<div>
<nav class="flex gap-2 text-label-md font-label-md text-on-surface-variant mb-2">


<span class="text-primary font-bold">Data Taruna</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-primary">Master Data Taruna</h1>

</div>
<a href="{{ route('admin.taruna.create') }}" class="bg-[#10b981] hover:bg-[#059669] text-white px-6 py-3 rounded-lg font-bold flex items-center gap-2 shadow-sm transition-all transform active:scale-95 cursor-pointer">
<span class="material-symbols-outlined">add</span>
                    Tambah Data Taruna
                </a>
</div>
<!-- Dashboard Quick Stats (Bento Style) -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-4">
@foreach($kelasList as $kelasStat)
    @php
        $bgColor = 'bg-gray-50';
        $textColor = 'text-gray-800';
        $borderColor = 'border-gray-200';
        $subTextColor = 'text-gray-600';
        
        $iconTop = 'cloud';
        $iconBottom = 'device_thermostat';

        $nama_lower = strtolower($kelasStat->nama_kelas);
        if(str_contains($nama_lower, 'meteo')) {
            $iconTop = 'cloud';
            $iconBottom = 'air';
            $bgColor = 'bg-[#fef2f2]'; // red-50
            $textColor = 'text-[#991b1b]'; // red-800
            $borderColor = 'border-[#fecaca]'; // red-200
            $subTextColor = 'text-[#b91c1c]'; // red-700
        } elseif(str_contains($nama_lower, 'klimat')) {
            $iconTop = 'thermostat';
            $iconBottom = 'wb_sunny';
            $bgColor = 'bg-[#ecfdf5]'; // emerald-50
            $textColor = 'text-[#065f46]'; // emerald-800
            $borderColor = 'border-[#a7f3d0]'; // emerald-200
            $subTextColor = 'text-[#047857]'; // emerald-700
        } elseif(str_contains($nama_lower, 'geof')) {
            $iconTop = 'monitor_heart';
            $iconBottom = 'waves';
            $bgColor = 'bg-[#eff6ff]'; // blue-50
            $textColor = 'text-[#1e40af]'; // blue-800
            $borderColor = 'border-[#bfdbfe]'; // blue-200
            $subTextColor = 'text-[#1d4ed8]'; // blue-700
        } elseif(str_contains($nama_lower, 'instru')) {
            $iconTop = 'radar';
            $iconBottom = 'satellite_alt';
            $bgColor = 'bg-[#fff7ed]'; // orange-50
            $textColor = 'text-[#9a3412]'; // orange-800
            $borderColor = 'border-[#fed7aa]'; // orange-200
            $subTextColor = 'text-[#c2410c]'; // orange-700
        }
    @endphp
    <div class="{{ $bgColor }} p-4 rounded-xl border {{ $borderColor }} relative overflow-hidden flex flex-col justify-between min-h-[120px] hover:shadow-md transition-all group">
        <!-- Top icon -->
        <span class="material-symbols-outlined absolute top-3 right-3 {{ $textColor }} opacity-30 text-3xl group-hover:scale-110 transition-transform">{{ $iconTop }}</span>
        
        <div>
            <p class="font-label-md text-[10px] md:text-[11px] {{ $subTextColor }} uppercase tracking-wider pr-6 truncate opacity-90">{{ $kelasStat->nama_kelas }}</p>
            <h3 class="font-display text-3xl md:text-4xl {{ $textColor }} font-bold mt-1">{{ number_format($kelasStat->taruna_count) }}</h3>
        </div>
        
        <div class="flex items-center justify-between mt-2">
            <div class="flex items-center gap-1 {{ $subTextColor }} text-[11px] font-medium opacity-90">
                <span class="material-symbols-outlined text-[14px]">person</span>
                <span>Taruna</span>
            </div>
            <!-- Bottom icon -->
            <span class="material-symbols-outlined {{ $textColor }} opacity-40 text-[18px]">{{ $iconBottom }}</span>
        </div>
    </div>
@endforeach
</div>

<div class="mb-6">
    <div class="bg-white p-5 rounded-xl border border-outline-variant shadow-sm inline-block w-full md:w-auto min-w-[320px]">
        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-2">Total Seluruh Taruna</p>
        <h3 class="font-display text-4xl md:text-5xl text-primary font-bold">{{ number_format($totalTaruna) }}</h3>
        <div class="flex items-center gap-1 text-[#10b981] mt-2">
            <span class="material-symbols-outlined text-sm">trending_up</span>
        </div>
    </div>
</div>

<!-- Search Bar Section -->
<div class="mb-8">
    <form action="{{ route('admin.dashboard') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-outline">
                <span class="material-symbols-outlined text-2xl text-primary/60">search</span>
            </span>
            <input type="text" name="q" value="{{ $query ?? '' }}" placeholder="Cari taruna berdasarkan Nama Lengkap atau NPT..." class="block w-full pl-12 pr-10 py-3.5 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent text-body-lg text-primary transition-all placeholder:text-outline shadow-sm">
            @if(!empty($query))
                <a href="{{ route('admin.dashboard') }}" class="absolute inset-y-0 right-0 flex items-center pr-3 text-outline hover:text-error" title="Hapus Pencarian">
                    <span class="material-symbols-outlined text-xl">cancel</span>
                </a>
            @endif
        </div>
        <button type="submit" class="px-8 py-3.5 bg-primary hover:opacity-95 text-white font-bold rounded-xl shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer">
            <span class="material-symbols-outlined text-xl">search</span>
            <span>Cari Data</span>
        </button>
    </form>
</div>
<!-- Table Container -->
<div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
<div class="p-4 border-b border-outline-variant flex justify-between items-center bg-surface-container-low/30">
<div class="flex items-center gap-4">
<h4 class="font-title-lg text-title-lg text-primary">Student Directory</h4>
<div class="flex gap-2">


</div>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left table-zebra">
<thead>
<tr class="bg-surface-container-low text-primary border-b-2 border-outline">
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider">No.</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider">NPT</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider">Nama Lengkap</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider">Kelas</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider text-center">Lihat Detail</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider text-center">Edit</th>
<th class="px-6 py-4 font-label-md text-label-md uppercase tracking-wider text-center">Hapus</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md">
@forelse($tarunaList as $index => $item)
<tr>
<td class="px-6 py-4 text-on-surface-variant">{{ (int) substr($item->npt, -4) }}</td>
<td class="px-6 py-4 font-bold text-primary">{{ $item->npt }}</td>
<td class="px-6 py-4 font-semibold">{{ $item->nama_lengkap }}</td>
<td class="px-6 py-4">{{ $item->kelas->nama_kelas ?? '-' }}</td>
<td class="px-6 py-4 text-center">
<a href="{{ route('detail', $item->id_taruna) }}" class="p-2 text-primary hover:bg-surface-container rounded-lg transition-colors inline-block" title="Lihat Detail">
<span class="material-symbols-outlined">visibility</span>
</a>
</td>
<td class="px-6 py-4 text-center">
<a href="{{ route('admin.taruna.edit', $item->id_taruna) }}" class="p-2 text-[#d97706] hover:bg-[#fff7ed] rounded-lg transition-colors inline-block" title="Edit Data">
<span class="material-symbols-outlined">edit</span>
</a>
</td>
<td class="px-6 py-4 text-center">
<button onclick="confirmDelete('{{ route('admin.taruna.destroy', $item->id_taruna) }}')" class="p-2 text-error hover:bg-[#ffdad6] rounded-lg transition-colors inline-block" title="Hapus">
<span class="material-symbols-outlined">delete</span>
</button>
</td>
</tr>
@empty
<tr>
<td colspan="7" class="px-6 py-8 text-center text-on-surface-variant">Tidak ada data taruna.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<div class="p-4 border-t border-outline-variant bg-surface-container-low flex justify-between items-center">
<p class="font-body-md text-body-md text-on-surface-variant">Showing {{ $tarunaList->firstItem() ?? 0 }} to {{ $tarunaList->lastItem() ?? 0 }} of {{ $tarunaList->total() }} entries</p>
<div class="flex gap-1">
{{ $tarunaList->links() }}
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="mt-auto w-full border-t border-outline-variant bg-surface-container-low py-8 px-gutter flex flex-col md:flex-row justify-between items-center text-on-surface-variant font-body-md text-body-md">
<div class="mb-4 md:mb-0">
<p class="">© 2024 Sekolah Tinggi Meteorologi Klimatologi dan Geofisika (STMKG). All rights reserved.</p>
</div>
<div class="flex gap-6">
<a class="hover:text-primary underline" href="#">Privacy Policy</a>
<a class="hover:text-primary underline" href="#">Terms of Service</a>
<a class="hover:text-primary underline" href="#">Contact Support</a>
<a class="hover:text-primary underline" href="#">Official Website</a>
</div>
</footer>
</main>
<!-- Modal Placeholder Logic (Invisible) -->
<div class="hidden fixed inset-0 z-[60] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4" id="deleteModal">
<div class="bg-white rounded-xl max-w-md w-full shadow-xl p-6">
<div class="flex items-center gap-4 text-error mb-4">
<span class="material-symbols-outlined text-4xl">warning</span>
<h3 class="font-headline-md text-headline-md">Konfirmasi Hapus</h3>
</div>
<p class="text-on-surface-variant font-body-lg text-body-lg mb-6">Apakah Anda yakin ingin menghapus data taruna ini? Tindakan ini tidak dapat dibatalkan.</p>
<div class="flex justify-end gap-3">
<button class="px-6 py-2 border border-outline-variant rounded-lg font-bold text-secondary hover:bg-surface-container transition-colors" onclick="toggleModal('deleteModal')">Batal</button>
<form id="deleteForm" method="POST" action="">
    @csrf
    @method('DELETE')
    <button type="submit" class="px-6 py-2 bg-error text-white rounded-lg font-bold hover:opacity-90 transition-all">Hapus Data</button>
</form>
</div>
</div>
</div>
<script>
        function toggleModal(id) {
            const el = document.getElementById(id);
            el.classList.toggle('hidden');
        }

        function confirmDelete(actionUrl) {
            document.getElementById('deleteForm').action = actionUrl;
            toggleModal('deleteModal');
        }
    </script>
</body></html>
