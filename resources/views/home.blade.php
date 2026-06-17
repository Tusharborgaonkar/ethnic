<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethnic — Premium Men's Ethnic Wear</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600;700&family=Inter+Tight:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background-color: #e8e4df; overflow-x: hidden; color: #1a1612; }
        .container-custom { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
        .serif { font-family: 'Cormorant Garamond', serif; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        @media (max-width: 640px) {
            .container-custom { padding: 0 1rem; }
        }
    </style>
</head>
<body x-data="{ mobileOpen: false }">

    {{-- 1. HERO --}}
    <x-hero />

    {{-- 2. MARQUEE STRIP --}}
    <x-marquee-strip />


    {{-- 4. TRENDING / PRODUCT GRID --}}
    <x-product-grid />

    {{-- 5. SAREN IN MOTION (VIDEO) --}}
    <x-video-banner />

    {{-- 6. SHOP BY OCCASION --}}
    <x-occasion-section />

    {{-- 7. FOOTER --}}
    <x-site-footer />

</body>
</html>
