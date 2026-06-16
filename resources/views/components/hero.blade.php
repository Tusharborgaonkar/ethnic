<section class="relative w-full h-screen min-h-[600px] overflow-hidden hero-container" id="heroSection">

    <img src="{{ asset('assets/products/hero.jpg') }}"
         alt="Ethnic — Premium Men's Collection"
         class="hero-img absolute inset-0 w-full h-full object-cover object-[center_20%]"
         id="heroImg"/>

    <!-- Refined luxury gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/10"></div>

    <x-header />

    <div class="absolute bottom-0 left-0 w-full p-8 md:p-16 lg:p-24 flex flex-col justify-end hero-content">
        <div class="max-w-3xl">
            <span class="inline-block text-white/80 text-xs md:text-sm tracking-[0.4em] uppercase mb-4 hero-eyebrow font-medium">Wedding & Festive 2025</span>
            <h1 class="text-white font-bold uppercase mb-6 hero-title serif"
                style="font-size:clamp(40px, 7vw, 84px); letter-spacing:0.02em; line-height:1.0;">
                Timeless Ethnic<br>Elegance
            </h1>
            <p class="text-white/90 mb-10 leading-relaxed hero-desc font-light" style="max-width:500px; font-size:clamp(15px, 1.5vw, 18px);">
                Crafted for the modern gentleman — where heritage<br class="hidden md:block">
                meets contemporary silhouettes in every thread.
            </p>
            <div class="flex flex-wrap gap-4 hero-buttons">
                @foreach([['label'=>'SHOP KURTAS','href'=>route('product.details')],['label'=>'EXPLORE WEDDING','href'=>route('product.details')]] as $i => $btn)
                    <a href="{{ $btn['href'] }}"
                       class="category-btn px-8 py-3.5 bg-white/10 backdrop-blur-md text-white text-xs md:text-sm font-semibold tracking-[0.2em] uppercase rounded-full border border-white/30 hover:bg-white hover:text-black hover:border-white transition-all duration-500 ease-out-luxury"
                       style="animation-delay:{{ $i * 0.15 }}s">
                        {{ $btn['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    html { scroll-behavior: smooth; }
    @keyframes fadeDown { from{opacity:0;transform:translateY(-20px)} to{opacity:1;transform:translateY(0)} }
    .animate-fade-down { animation: fadeDown .8s ease forwards; }
    @keyframes scaleIn { from{transform:scale(1.05);opacity:0} to{transform:scale(1);opacity:1} }
    .hero-img { animation: scaleIn 1.4s ease forwards; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(30px)} to{opacity:1;transform:translateY(0)} }
    .hero-eyebrow { animation: fadeUp .8s ease .1s both; }
    .hero-title   { animation: fadeUp 1s ease .3s both; }
    .hero-desc    { animation: fadeUp 1s ease .5s both; }
    .category-btn { animation: fadeUp .8s ease both; }
    @media (max-width:768px)  { .hero-container { height:85vh !important; } }
    @media (max-width:480px)  { .hero-container { height:75vh !important; } }
</style>

<script>
(function(){
    const img = document.getElementById('heroImg');
    if(!img) return;
    document.addEventListener('mousemove', function(e){
        const x = (e.clientX/window.innerWidth - .5) * 10;
        const y = (e.clientY/window.innerHeight - .5) * 10;
        img.style.transform = `scale(1) translate(${x}px,${y}px)`;
    });
})();
</script>
