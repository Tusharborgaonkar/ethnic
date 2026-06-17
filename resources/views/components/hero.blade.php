<section class="relative w-full h-screen min-h-[600px] overflow-hidden hero-container"
         id="heroSection"
         x-data="heroSlider()"
         x-init="init()">

    {{-- Slides --}}
    <template x-for="(slide, i) in slides" :key="i">
        <div class="absolute inset-0 transition-opacity duration-700"
             :class="current === i ? 'opacity-100 z-0' : 'opacity-0 z-[-1]'">
            <img :src="slide.img" :alt="slide.title"
                 class="w-full h-full object-cover object-center"/>
            <div class="hero-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/10"></div>
        </div>
    </template>

    {{-- Header --}}
    <x-header />

    {{-- Bottom Content --}}
    <div class="absolute bottom-0 left-0 w-full p-8 md:p-16 lg:p-24 flex flex-col justify-end hero-content z-10">
        <template x-for="(slide, i) in slides" :key="'content-'+i">
            <div x-show="current === i"
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 translate-y-6"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="hero-copy max-w-[560px]">
                <h1 class="hero-title text-white font-bold uppercase mb-4"
                    style="font-size:clamp(24px, 4.4vw, 52px); letter-spacing:0; line-height:0.96; font-family:'Inter Tight','Inter',sans-serif;"
                    x-text="slide.title"></h1>
                <p class="hero-desc text-white/90 mb-6 leading-relaxed font-light"
                   style="max-width:460px; font-size:clamp(12px, 1.05vw, 15px); line-height:1.55; font-family:'Inter','Roboto',sans-serif;"
                   x-text="slide.desc"></p>
                <div class="hero-tags flex flex-wrap gap-3">
                    <template x-for="tag in slide.tags" :key="tag">
                        <span class="hero-tag px-4 py-1.5 bg-white/95 text-gray-900 text-[10px] md:text-[11px] font-bold tracking-widest uppercase rounded-full cursor-pointer hover:bg-white transition-colors duration-300"
                              x-text="tag"></span>
                    </template>
                </div>
            </div>
        </template>
    </div>

    {{-- Dots (bottom-left) --}}
    <div class="hero-dots absolute bottom-8 left-8 md:left-16 lg:left-24 flex items-center gap-2 z-20">
        <template x-for="(slide, i) in slides" :key="'dot-'+i">
            <button @click="goTo(i)"
                    class="rounded-full transition-all duration-300"
                    :class="current === i ? 'w-5 h-2 bg-white' : 'w-2 h-2 bg-white/50'">
            </button>
        </template>
    </div>

    {{-- Prev / Next Arrows (bottom-right) --}}
    <div class="hero-arrows absolute bottom-6 right-6 md:right-16 flex items-center gap-2 z-20">
        <button @click="prev()"
                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button @click="next()"
                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>

</section>

<style>
    html { scroll-behavior: smooth; }
    @keyframes fadeDown { from{opacity:0;transform:translateY(-20px)} to{opacity:1;transform:translateY(0)} }
    .animate-fade-down { animation: fadeDown .8s ease forwards; }
    @media (max-width:768px) { .hero-container { height:85vh !important; } }
    @media (max-width:640px) {
        .hero-content {
            bottom: 4.75rem;
            padding: 0 1.35rem !important;
        }

        .hero-copy {
            max-width: 100%;
        }

        .hero-overlay {
            background: linear-gradient(to top, rgba(0,0,0,.84), rgba(0,0,0,.42) 48%, rgba(0,0,0,.12)) !important;
        }

        .hero-title {
            margin-bottom: .85rem !important;
            font-size: clamp(22px, 7vw, 30px) !important;
            line-height: .95 !important;
            text-shadow: 0 2px 16px rgba(0,0,0,.45);
        }

        .hero-desc {
            max-width: 22rem !important;
            margin-bottom: 1.15rem !important;
            font-size: clamp(12px, 3.45vw, 14px) !important;
            line-height: 1.45 !important;
            font-weight: 500 !important;
            text-shadow: 0 2px 12px rgba(0,0,0,.5);
        }

        .hero-tags {
            gap: .55rem !important;
            padding-right: 0;
        }

        .hero-tag {
            white-space: nowrap;
            padding: .38rem .82rem !important;
            font-size: 10px !important;
            letter-spacing: .13em !important;
            line-height: 1 !important;
        }

        .hero-dots {
            left: 1.35rem !important;
            bottom: 1.45rem !important;
        }

        .hero-dots button {
            box-shadow: 0 1px 8px rgba(0,0,0,.35);
        }

        .hero-arrows {
            right: 1.2rem !important;
            bottom: .95rem !important;
            gap: .65rem !important;
        }

        .hero-arrows button {
            width: 2.75rem !important;
            height: 2.75rem !important;
            background: rgba(255,255,255,.92) !important;
            color: #111827 !important;
            border-color: rgba(255,255,255,.75) !important;
            box-shadow: 0 8px 22px rgba(0,0,0,.22);
        }
    }
    @media (max-width:480px) { .hero-container { height:90vh !important; } }
    @media (max-width:360px) {
        .hero-content {
            bottom: 5.1rem;
        }

        .hero-tag {
            padding-left: .68rem !important;
            padding-right: .68rem !important;
            letter-spacing: .1em !important;
        }
    }
</style>

<script>
function heroSlider() {
    return {
        current: 0,
        timer: null,
        slides: [
            {
                img: '{{ asset('assets/products/hero.jpg') }}',
                title: '2025 — SUMMER COLLECTION',
                desc: 'Step into a world of timeless fashion. Discover refined silhouettes, luxurious fabrics, and trend-setting designs that elevate your everyday style.',
                tags: ['MEN', 'WOMEN', 'ACCESSORIES']
            },
            {
                img: 'https://images.unsplash.com/photo-1583391733956-3750e0ff4e8b?w=1400&q=80',
                title: '2025 — FESTIVE EDIT',
                desc: 'Celebrate every occasion with handcrafted ethnic wear that blends tradition with modern elegance.',
                tags: ['KURTA SETS', 'SHERWANIS', 'NEW IN']
            },
            {
                img: 'https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=1400&q=80',
                title: '2025 — WEDDING COLLECTION',
                desc: 'Crafted for the modern gentleman — where heritage meets contemporary silhouettes in every thread.',
                tags: ['WEDDING', 'INDO-WESTERN', 'SALE']
            }
        ],
        init() {
            this.startAuto();
        },
        startAuto() {
            this.timer = setInterval(() => this.next(), 5000);
        },
        next() {
            this.current = (this.current + 1) % this.slides.length;
            this.resetAuto();
        },
        prev() {
            this.current = (this.current - 1 + this.slides.length) % this.slides.length;
            this.resetAuto();
        },
        goTo(i) {
            this.current = i;
            this.resetAuto();
        },
        resetAuto() {
            clearInterval(this.timer);
            this.startAuto();
        }
    }
}
</script>
