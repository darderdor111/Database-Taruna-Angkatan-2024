<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Admin Login - STMKG Academic Database System</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#dee8ff",
                        "on-error": "#ffffff",
                        "secondary": "#5c5f61",
                        "on-primary-container": "#80a8d3",
                        "background": "#f9f9ff",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#c4c7c9",
                        "outline-variant": "#c2c7cf",
                        "error": "#ba1a1a",
                        "outline": "#72777f",
                        "on-secondary-fixed-variant": "#444749",
                        "tertiary-fixed-dim": "#b7c8e1",
                        "on-primary-fixed-variant": "#1d496f",
                        "inverse-on-surface": "#ecf1ff",
                        "tertiary-container": "#2b3b50",
                        "surface-variant": "#d8e3fb",
                        "secondary-fixed": "#e0e3e5",
                        "on-secondary-fixed": "#191c1e",
                        "primary-container": "#0a3d62",
                        "on-tertiary-container": "#95a5be",
                        "inverse-surface": "#263143",
                        "on-surface": "#111c2d",
                        "surface-container-low": "#f0f3ff",
                        "on-secondary-container": "#626567",
                        "on-tertiary-fixed-variant": "#38485d",
                        "tertiary-fixed": "#d3e4fe",
                        "tertiary": "#152539",
                        "surface-bright": "#f9f9ff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "secondary-container": "#e0e3e5",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#001d34",
                        "on-primary": "#ffffff",
                        "surface-tint": "#386188",
                        "on-background": "#111c2d",
                        "primary-fixed": "#cfe5ff",
                        "on-surface-variant": "#42474e",
                        "primary": "#002743",
                        "primary-fixed-dim": "#a2caf7",
                        "inverse-primary": "#a2caf7",
                        "surface": "#f9f9ff",
                        "surface-container": "#e7eeff",
                        "on-secondary": "#ffffff",
                        "surface-dim": "#cfdaf2",
                        "surface-container-highest": "#d8e3fb",
                        "on-tertiary-fixed": "#0b1c30"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "1.5rem",
                        "sidebar-width": "280px",
                        "section-gap": "2rem",
                        "margin-mobile": "1rem",
                        "container-max": "1280px",
                        "component-padding": "1rem"
                    },
                    "fontFamily": {
                        "code": ["JetBrains Mono"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display": ["Inter"],
                        "body-lg": ["Inter"],
                        "title-lg": ["Inter"]
                    },
                    "fontSize": {
                        "code": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "display": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                        "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top right, #f0f3ff 0%, #f9f9ff 100%);
        }
        .login-card {
            box-shadow: 0 1px 3px rgba(0,0,0,0.1), 0 1px 2px rgba(0,0,0,0.06);
            border: 1px solid #e2e8f0;
        }
        .input-focus-ring:focus-within {
            ring: 2px;
            ring-offset: 2px;
            ring-color: #002743;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between bg-surface text-on-surface">
<!-- Top AppBar (Simplified for Login Context) -->
<header class="fixed top-0 w-full bg-surface border-b border-outline-variant flex justify-between items-center px-gutter h-16 z-50">
<div class="flex items-center gap-3">
<a href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary">STMKG Admin Portal</a>
</div>
<div class="flex items-center gap-4 text-on-surface-variant">
<a href="{{ route('home') }}" class="flex items-center gap-1.5 px-3 py-1.5 bg-primary text-on-primary rounded-lg text-sm font-semibold hover:opacity-90 transition-opacity">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Kembali
</a>
<button class="material-symbols-outlined hover:bg-surface-container transition-colors p-2 rounded-full">help_outline</button>
</div>
</header>
<!-- Main Content: Login Container -->
<main class="flex-grow flex items-center justify-center px-4 pt-16 pb-24">
<div class="w-full max-w-[440px] bg-surface-container-lowest p-8 rounded-lg login-card animate-in fade-in slide-in-from-bottom-4 duration-700">
<!-- Logo & Header -->
<div class="text-center mb-8">
<div class="flex justify-center mb-6">

</div>
<h1 class="font-headline-md text-headline-md text-primary mb-1">Admin Portal Login</h1>
<p class="font-body-md text-body-md text-secondary">Secure access for academic administrators</p>
</div>
<!-- Login Form -->
<form class="space-y-6" id="loginForm" method="POST" action="{{ route('login.post') }}" autocomplete="off">
    @csrf
    @if($errors->any())
        <div class="p-3 bg-error-container text-on-error-container rounded-lg text-sm font-semibold mb-4">
            {{ $errors->first() }}
        </div>
    @endif
<!-- Username Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="username">Username or Email</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]">person</span>
</div>
<input class="w-full h-[40px] pl-10 pr-4 bg-white border border-outline-variant rounded-lg font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" id="username" name="username" placeholder="Enter your credentials" required="" type="text" value="{{ old('username') }}" autocomplete="off">
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="password">Password</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<input class="w-full h-[40px] pl-10 pr-10 bg-white border border-outline-variant rounded-lg font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" id="password" name="password" placeholder="••••••••" required="" type="password" autocomplete="new-password">
<button class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-primary transition-colors" onclick="togglePassword()" type="button">
<span class="material-symbols-outlined text-[20px]" id="passwordIcon">visibility</span>
</button>
</div>
</div>
<!-- Remember & Forgot -->
<div class="flex items-center justify-between">
<label class="flex items-center gap-2 cursor-pointer group">
<input class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox">
<span class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Remember me</span>
</label>
<a class="font-label-md text-label-md text-primary hover:underline transition-all" href="#">Forgot Password?</a>
</div>
<!-- Sign In Button -->
<button class="w-full h-12 bg-primary text-white font-title-lg text-title-lg rounded-lg hover:opacity-90 active:opacity-80 transition-all flex items-center justify-center gap-2 shadow-sm" type="submit">
<span class="">Sign In</span>
<span class="material-symbols-outlined">login</span>
</button>
</form>
<!-- Additional Links -->
<div class="mt-8 pt-6 border-t border-outline-variant text-center">
<p class="font-body-md text-body-md text-secondary">
                    Authorized personnel only. 
                    <a class="text-primary font-semibold hover:underline" href="#">Request access</a>
</p>
</div>
</div>
</main>
<!-- Footer Component -->
<footer class="bg-surface-container-low border-t border-outline-variant w-full">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter py-component-padding w-full max-w-container-max mx-auto">
<div class="mb-4 md:mb-0">
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider">© 2024 STMKG Academic Database System. All rights reserved.</span>
</div>
<div class="flex gap-6">
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors" href="#">Support</a>
</div>
</div>
</footer>
<script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.innerText = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                passwordIcon.innerText = 'visibility';
            }
        }


    </script>
</body></html>
