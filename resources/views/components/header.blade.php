<header x-data="{ mobileOpen:false }"
        id="siteHeader"
        :class="mobileOpen ? 'z-[101]' : 'z-50'"
        class="fixed top-0 left-0 right-0 px-4 pt-4 animate-fade-down w-full transition-all duration-[700ms]">
    <div id="headerInner" class="flex items-center justify-between w-full max-w-full mx-auto transition-all duration-[700ms] ease-out-luxury gap-2 overflow-visible relative">

        {{-- Left Navigation / Hamburger --}}
        <div class="flex items-center z-20 flex-1">
            {{-- Hamburger for Mobile --}}
            <button @click="mobileOpen = !mobileOpen" class="md:hidden flex items-center justify-center w-8 h-8 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-transform duration-300 icon-btn">
                <svg class="w-4 h-4 transition-transform duration-300" :class="mobileOpen ? 'rotate-45' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </button>
            
            {{-- Nav Pill for Desktop --}}
            <div class="hidden md:flex items-center bg-white/95 backdrop-blur-sm px-6 py-2.5 rounded-[1rem] shadow-lg border border-white/20 nav-pill">
                <ul class="flex items-center gap-5 text-[13px] font-medium text-gray-800">
                    <li class="flex items-center gap-1 cursor-pointer hover:text-gray-500 transition-colors">Women <span class="text-xs text-gray-400">+</span></li>
                    <li class="flex items-center gap-1 cursor-pointer hover:text-gray-500 transition-colors">Shop All <span class="text-xs text-gray-400">+</span></li>
                    <li class="flex items-center gap-1 cursor-pointer hover:text-gray-500 transition-colors">Men <span class="text-xs text-gray-400">+</span></li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">New In</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Sale</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Outlet</li>
                </ul>
            </div>
        </div>

        {{-- Center Logo --}}
        <div class="absolute left-1/2 -translate-x-1/2 z-10 logo-pill">
            <a href="/" class="block bg-stone-100/90 backdrop-blur-md px-4 md:px-8 py-2 md:py-2.5 rounded-2xl shadow-lg border border-stone-200/50 hover:bg-stone-100 transition-colors duration-300">
                <span class="text-base md:text-xl font-bold tracking-widest md:tracking-[0.3em] text-gray-900" style="font-family:'Cormorant Garamond',serif;">SAREN</span>
            </a>
        </div>

        {{-- Right Icons --}}
        <div class="flex items-center justify-end gap-1 md:gap-1.5 z-20 flex-1 shrink-0">
            @foreach(['search','user','bookmark'] as $icon)
                <button class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-transform duration-300 icon-btn">
                    @if($icon==='search')
                        <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    @elseif($icon==='user')
                        <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    @else
                        <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                    @endif
                </button>
            @endforeach
            <button class="flex items-center gap-1.5 md:gap-2 h-8 md:h-10 bg-white/95 backdrop-blur-sm px-2.5 md:px-3 rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-transform duration-300 icon-btn">
                <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span class="text-[11px] md:text-[12px] font-bold text-gray-800">BAG</span>
                <span class="flex items-center justify-center w-4 h-4 md:w-5 md:h-5 bg-gray-900 text-white text-[10px] md:text-[11px] font-bold rounded-md">0</span>
            </button>
        </div>
    </div>

    {{-- Mobile Drawer --}}
    <template x-teleport="body">
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             class="fixed inset-0 z-[100]" style="display:none;">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="mobileOpen=false"></div>
            <div class="absolute left-0 top-0 bottom-0 w-72 bg-white flex flex-col p-8 pt-24 shadow-2xl z-50">
                <div class="text-2xl font-bold tracking-[0.3em] mb-8" style="font-family:'Cormorant Garamond',serif;">ETHNIC</div>
                <nav class="flex flex-col gap-1">
                    @foreach(['Kurta Sets','Sherwanis','Nehru Jackets','Indo-Western','Festive Wear','Wedding Collection','New Arrivals','Sale'] as $item)
                        <a href="#" class="py-3 text-sm font-medium border-b border-gray-100 hover:text-gray-500 hover:pl-2 transition-all duration-300">{{ $item }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </template>
</header>

<style>
    /* ── Luxury Cubic Bezier for all transitions ── */
    :root {
        --ease-luxury: cubic-bezier(0.25, 1, 0.5, 1);
        --ease-out-luxury: cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .ease-out-luxury {
        transition-timing-function: var(--ease-out-luxury);
    }

    /* ── Initial hero state ── */
    #siteHeader {
        transition:
            background   0.6s var(--ease-luxury),
            backdrop-filter 0.6s var(--ease-luxury),
            box-shadow   0.6s var(--ease-luxury),
            border-color 0.6s var(--ease-luxury),
            padding-top  0.6s var(--ease-luxury),
            padding-bottom 0.6s var(--ease-luxury);
        /* Force GPU acceleration to prevent jank */
        transform: translateZ(0);
        will-change: background, backdrop-filter, box-shadow, padding;
    }

    /* ── Scrolled compact state ── */
    #siteHeader.is-scrolled {
        background: transparent;
        box-shadow: none;
        border-bottom: none;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    /* ── Shift Inward & Rebalance ── */
    #headerInner {
        will-change: max-width, padding;
    }
    
    #siteHeader.is-scrolled #headerInner {
        max-width: 1280px; /* Shifts content inward smoothly */
        padding-left: 1rem;
        padding-right: 1rem;
    }

    /* Center logo pill — fades out, moves up, scales down */
    #siteHeader .logo-pill {
        transition:
            opacity   0.6s var(--ease-out-luxury),
            transform 0.6s var(--ease-out-luxury);
        transform-origin: center top;
        will-change: opacity, transform;
    }
    #siteHeader.is-scrolled .logo-pill {
        opacity: 0;
        transform: translateX(-50%) translateY(-20px) scale(0.9);
        pointer-events: none;
    }

    /* Nav pill — subtle tighten and blend on scroll */
    #siteHeader .nav-pill {
        transition:
            padding   0.6s var(--ease-out-luxury),
            box-shadow 0.6s var(--ease-out-luxury),
            background 0.6s var(--ease-out-luxury),
            border-color 0.6s var(--ease-out-luxury);
        will-change: padding, box-shadow, background;
    }
    #siteHeader.is-scrolled .nav-pill {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    /* Right icon buttons — tighten and blend on scroll */
    #siteHeader .icon-btn {
        transition:
            box-shadow 0.6s var(--ease-out-luxury),
            background 0.6s var(--ease-out-luxury),
            border-color 0.6s var(--ease-out-luxury),
            transform  0.3s ease;
        will-change: box-shadow, background, transform;
    }
    #siteHeader.is-scrolled .icon-btn {
        box-shadow: none;
    }
</style>

<script>
(function () {
    const header = document.getElementById('siteHeader');
    if (!header) return;

    let ticking = false;
    let wasScrolled = false;
    const THRESHOLD = 60;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scrolled = window.scrollY > THRESHOLD;
                if (scrolled !== wasScrolled) {
                    wasScrolled = scrolled;
                    if (scrolled) {
                        header.classList.add('is-scrolled');
                    } else {
                        header.classList.remove('is-scrolled');
                    }
                }
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
})();
</script>
