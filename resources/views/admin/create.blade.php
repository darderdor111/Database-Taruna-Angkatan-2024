<!-- Admin: Form Input Data Taruna -->
<!DOCTYPE html><html class="light" lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>STMKG 2024 - Tambah Data Taruna</title>
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
                    "primary": "#0a3d62",
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
                    "DEFAULT": "0.25rem",
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
    </style>
</head>
<body class="flex min-h-screen">
<!-- Main Content Area -->
<main class="flex-1 min-h-screen flex flex-col">
<!-- Top Navigation Area -->
<header class="sticky top-0 z-30 w-full h-16 bg-white border-b border-outline-variant flex items-center justify-between px-gutter shadow-sm">
<div class="flex items-center gap-2">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 text-primary hover:opacity-80 transition-opacity font-bold">
        <span class="material-symbols-outlined">arrow_back</span>
        Kembali ke Dashboard
    </a>
</div>
</header>
<!-- Form Content Area -->
<section class="p-gutter flex items-center justify-center flex-grow">
<!-- Centered Bento-Style Card -->
<div class="w-full max-w-[960px] bg-white border border-outline-variant shadow-xl rounded-lg overflow-hidden animate-in fade-in slide-in-from-bottom-4 duration-500">
<!-- Header with Accent -->
<div class="h-1.5 bg-primary w-full"></div>
<div class="p-6 border-b border-outline-variant bg-surface-container-low/30">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-primary-container/10 rounded flex items-center justify-center border border-primary/10">
<span class="material-symbols-outlined text-primary text-[32px]">person_add</span>
</div>
<div>
<h2 class="font-headline-md text-title-lg text-primary uppercase tracking-tight">Tambah Data Taruna Baru</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Lengkapi formulir di bawah ini untuk mendaftarkan taruna baru ke sistem.</p>
</div>
</div>
</div>
<!-- Registration Form -->
<form class="p-8 space-y-6" action="{{ route('admin.taruna.store') }}" method="POST">
    @csrf
    
    @if($errors->any())
        <div class="p-4 bg-error-container text-on-error-container rounded-lg font-semibold text-sm mb-6">
            {{ $errors->first() }}
        </div>
    @endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- NPT -->
<div class="space-y-1.5">
<label class="block font-label-md text-label-md text-primary uppercase" for="npt">Nomor Pokok Taruna (NPT) <span class="text-error">*</span></label>
<input name="npt" value="{{ old('npt') }}" class="block w-full h-11 px-4 bg-white border border-outline-variant rounded focus:ring-2 focus:ring-primary focus:border-transparent text-body-md transition-all placeholder:text-outline-variant" id="npt" placeholder="Contoh: 21.24.0001" required="" type="text">
</div>
<!-- Nama Lengkap -->
<div class="space-y-1.5">
<label class="block font-label-md text-label-md text-primary uppercase" for="nama">Nama Lengkap <span class="text-error">*</span></label>
<input name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="block w-full h-11 px-4 bg-white border border-outline-variant rounded focus:ring-2 focus:ring-primary focus:border-transparent text-body-md transition-all placeholder:text-outline-variant" id="nama" placeholder="Masukkan nama lengkap" required="" type="text">
</div>
<!-- Jenis Kelamin -->
<div class="space-y-1.5 md:col-span-2">
<label class="block font-label-md text-label-md text-primary uppercase">Jenis Kelamin <span class="text-error">*</span></label>
<div class="flex gap-8 p-3 bg-surface-container-low/50 border border-outline-variant/50 rounded">
<label class="inline-flex items-center group cursor-pointer">
<input class="form-radio w-4 h-4 text-primary border-outline focus:ring-primary" name="gender" required="" type="radio" value="L" {{ old('gender') == 'L' ? 'checked' : '' }}>
<span class="ml-2 font-body-md text-on-surface group-hover:text-primary transition-colors">Laki-laki</span>
</label>
<label class="inline-flex items-center group cursor-pointer">
<input class="form-radio w-4 h-4 text-primary border-outline focus:ring-primary" name="gender" required="" type="radio" value="P" {{ old('gender') == 'P' ? 'checked' : '' }}>
<span class="ml-2 font-body-md text-on-surface group-hover:text-primary transition-colors">Perempuan</span>
</label>
</div>
</div>
<!-- Program Studi -->
<div class="space-y-1.5">
<label class="block font-label-md text-label-md text-primary uppercase" for="prodi">Program Studi <span class="text-error">*</span></label>
<div class="relative">
<select id="prodi" class="block w-full h-11 pl-4 pr-10 bg-white border border-outline-variant rounded focus:ring-2 focus:ring-primary focus:border-transparent text-body-md transition-all appearance-none" required="">
<option disabled="" selected="" value="">-- Pilih Program Studi --</option>
@foreach($programStudiList as $prodi)
    <option value="{{ $prodi->id_prodi }}">{{ $prodi->nama_prodi }}</option>
@endforeach
</select>
<span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined">expand_more</span>
</span>
</div>
</div>
<!-- Kelas -->
<div class="space-y-1.5">
<label class="block font-label-md text-label-md text-primary uppercase" for="kelas">Kelas <span class="text-error">*</span></label>
<div class="relative">
<select name="id_kelas" id="kelas" class="block w-full h-11 pl-4 pr-10 bg-white border border-outline-variant rounded focus:ring-2 focus:ring-primary focus:border-transparent text-body-md transition-all appearance-none" required="">
<option disabled="" selected="" value="">-- Pilih Kelas --</option>
@foreach($kelasList as $kelas)
    <option value="{{ $kelas->id_kelas }}" data-prodi="{{ $kelas->id_prodi }}">{{ $kelas->nama_kelas }}</option>
@endforeach
</select>
<span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined">expand_more</span>
</span>
</div>
</div>

</div>
<!-- Form Actions -->
<div class="flex items-center justify-end gap-3 pt-6 mt-6 border-t border-outline-variant/30">
<a href="{{ route('admin.dashboard') }}" class="px-6 py-2.5 rounded font-bold text-on-surface-variant bg-surface-container hover:bg-secondary-container transition-all focus:ring-2 focus:ring-outline border border-outline-variant">
                            Batal
                        </a>
<button class="px-8 py-2.5 rounded font-bold text-white bg-primary shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-[20px]">save</span>
                            Simpan Data
                        </button>
</div>
</form>
</div>
</section>
<!-- Footer -->
<footer class="w-full border-t border-outline-variant bg-surface-container-low py-8 px-gutter flex flex-col md:flex-row justify-between items-center text-on-surface-variant font-body-md text-body-md">
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
<script>
        // Add subtle focus ring effects to inputs
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('ring-offset-1');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('ring-offset-1');
            });
        });

        // Dependent dropdown logic for Program Studi -> Kelas
        const prodiSelect = document.getElementById('prodi');
        const kelasSelect = document.getElementById('kelas');
        const originalKelasOptions = Array.from(kelasSelect.options);

        function updateKelasOptions() {
            const selectedProdi = prodiSelect.value;
            kelasSelect.innerHTML = '';
            
            // Re-add placeholder
            const placeholder = document.createElement('option');
            placeholder.value = '';
            placeholder.disabled = true;
            placeholder.selected = true;
            placeholder.textContent = '-- Pilih Kelas --';
            kelasSelect.appendChild(placeholder);
            
            originalKelasOptions.forEach(option => {
                if (option.value && (!selectedProdi || option.getAttribute('data-prodi') === selectedProdi)) {
                    kelasSelect.appendChild(option.cloneNode(true));
                }
            });
        }

        prodiSelect.addEventListener('change', updateKelasOptions);
        
        // Run once on load to initialize correct state
        updateKelasOptions();
    </script>
</body></html>
