<header x-data="{ mobileOpen:false }"
        id="siteHeader"
        class="fixed top-0 left-0 right-0 px-4 pt-4 w-full z-50 transition-all duration-[700ms]">

    <div id="headerInner" class="flex items-center justify-between w-full mx-auto gap-2 relative">

        {{-- Left: Mobile Logo / Desktop Nav --}}
        <div class="flex items-center flex-1 gap-2">
            <a href="/" id="mobileLogo" class="md:hidden block bg-stone-100/90 backdrop-blur-md px-3 py-1.5 rounded-xl shadow-lg border border-stone-200/50">
                <span class="text-sm font-bold tracking-widest text-gray-900" style="font-family:'Cormorant Garamond',serif;">ETHNIC</span>
            </a>
            <div class="hidden md:flex items-center bg-white/95 backdrop-blur-sm px-6 py-2.5 rounded-[1rem] shadow-lg border border-white/20 nav-pill">
                <ul class="flex items-center gap-5 text-[13px] font-medium text-gray-800">
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Women</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Shop All</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Men</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">New In</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Sale</li>
                    <li class="cursor-pointer hover:text-gray-500 transition-colors">Outlet</li>
                </ul>
            </div>
        </div>

        {{-- Center Logo Desktop --}}
        <div class="hidden md:block absolute left-1/2 -translate-x-1/2 z-10 logo-pill">
            <a href="/" class="block bg-stone-100/90 backdrop-blur-md px-8 py-2.5 rounded-2xl shadow-lg border border-stone-200/50 hover:bg-stone-100 transition-colors duration-300">
                <span class="text-xl font-bold tracking-[0.3em] text-gray-900" style="font-family:'Cormorant Garamond',serif;">ETHNIC</span>
            </a>
        </div>

        {{-- Right Icons --}}
        <div class="flex items-center justify-end flex-1 shrink-0 gap-1 md:gap-1.5 z-20">

            {{-- Mobile: + / × toggle button — ALWAYS visible --}}
            <button @click="mobileOpen = !mobileOpen"
                    class="md:hidden flex items-center justify-center w-8 h-8 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 icon-btn">
                <svg x-show="!mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <svg x-show="mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- Other icons — always visible on desktop, hidden on mobile when menu open --}}
            <button class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 icon-btn"
                    :class="mobileOpen ? 'hidden' : 'flex'">
                <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
            <button class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 icon-btn"
                    :class="mobileOpen ? 'hidden' : 'flex'">
                <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </button>
            <button class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/20 icon-btn"
                    :class="mobileOpen ? 'hidden' : 'flex'">
                <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
            </button>
            <button class="flex items-center gap-1.5 md:gap-2 h-8 md:h-10 bg-white/95 backdrop-blur-sm px-2.5 md:px-3 rounded-xl shadow-lg border border-white/20 icon-btn"
                    :class="mobileOpen ? 'hidden' : 'flex'">
                <svg class="w-3.5 h-3.5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span class="text-[11px] md:text-[12px] font-bold text-gray-800">BAG</span>
                <span class="flex items-center justify-center w-4 h-4 md:w-5 md:h-5 bg-gray-900 text-white text-[10px] md:text-[11px] font-bold rounded-md">0</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <template x-teleport="body">
        <div x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="fixed inset-0 z-[100]" style="display:none;">

            <div class="absolute top-0 left-0 right-0">
                {{-- Top bar --}}
                <div class="flex items-center justify-between px-4 pt-4 pb-3 bg-white">
                    <a href="/" class="bg-stone-100 px-3 py-1.5 rounded-xl">
                        <span class="text-sm font-bold tracking-widest text-gray-900" style="font-family:'Cormorant Garamond',serif;">ETHNIC</span>
                    </a>
                    <div class="flex items-center gap-1">
                        <button class="flex items-center justify-center w-8 h-8 bg-stone-100 rounded-xl">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 bg-stone-100 rounded-xl">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 bg-stone-100 rounded-xl">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 bg-gray-900 text-white rounded-xl">
                            <span class="text-[11px] font-bold">0</span>
                        </button>
                        <button @click="mobileOpen=false" class="flex items-center justify-center w-8 h-8 bg-stone-100 rounded-xl ml-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Menu body --}}
                <div class="bg-white mx-3 rounded-2xl shadow-xl px-6 pt-6 pb-8 mb-3">
                    <div class="flex gap-8">
                        <div class="flex flex-col gap-1">
                            @foreach(['Shop All','Men','Women','New In','Sale','Outlet'] as $item)
                                <a href="#" class="text-[1.45rem] font-semibold text-gray-900 leading-[2] hover:text-gray-400 transition-colors" style="font-family:'Cormorant Garamond',serif;">{{ $item }}</a>
                            @endforeach
                        </div>
                        <div class="flex flex-col gap-1 pt-1">
                            @foreach(['Boutiques','Support','FAQ','Privacy Policy','Terms & Conditions','Shipping & Returns'] as $link)
                                <a href="#" class="text-[0.78rem] text-gray-700 leading-[2.1] hover:text-gray-400 transition-colors">{{ $link }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="h-10"></div>
                    <div>
                        <a href="#" class="flex items-center gap-1.5 text-[0.78rem] font-semibold text-red-500 mb-0.5">
                            <span>&rarr;</span> Spring Sale
                        </a>
                        <p class="text-[0.78rem] text-gray-700">Up to 50% off!</p>
                    </div>
                </div>
            </div>

            <div class="absolute inset-0 -z-10" @click="mobileOpen=false"></div>
        </div>
    </template>
</header>

<style>
    :root {
        --ease-luxury: cubic-bezier(0.25, 1, 0.5, 1);
        --ease-out-luxury: cubic-bezier(0.16, 1, 0.3, 1);
    }
    #siteHeader {
        transform: translateZ(0);
    }
    #siteHeader.is-scrolled {
        padding-top: 12px;
    }
    #siteHeader .logo-pill {
        transition: opacity 0.6s var(--ease-out-luxury), transform 0.6s var(--ease-out-luxury);
        will-change: opacity, transform;
    }
    #siteHeader.is-scrolled .logo-pill {
        opacity: 0;
        transform: translateX(-50%) translateY(-20px) scale(0.9);
        pointer-events: none;
    }
    #siteHeader .nav-pill {
        transition: padding 0.6s var(--ease-out-luxury);
    }
    #siteHeader.is-scrolled .nav-pill {
        padding-top: 4px;
        padding-bottom: 4px;
    }
    #mobileLogo {
        opacity: 1;
        transform: translateX(0) scale(1);
        transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }
    #siteHeader.is-scrolled #mobileLogo {
        opacity: 0;
        transform: translateX(-12px) scale(0.92);
        pointer-events: none;
    }
    #siteHeader .icon-btn {
        transition: box-shadow 0.6s var(--ease-out-luxury), transform 0.3s ease;
    }
    #siteHeader.is-scrolled .icon-btn {
        box-shadow: none;
    }
</style>

<script>
(function () {
    const header = document.getElementById('siteHeader');
    if (!header) return;
    let ticking = false, wasScrolled = false;
    const THRESHOLD = 60;
    window.addEventListener('scroll', function () {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scrolled = window.scrollY > THRESHOLD;
                if (scrolled !== wasScrolled) {
                    wasScrolled = scrolled;
                    header.classList.toggle('is-scrolled', scrolled);
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
})();
</script>
