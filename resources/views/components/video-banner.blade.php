@php
$videos = [
    [
        'src'=>asset('assets/videos/0491eb56-c241-4d92-b015-f2aca854ddeb.mp4'),        
        'poster'=>asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg'), 
        'title'=>'Midnight Blue Silk Kurta',
        'price'=>'4,499',
        'old_price'=>'5,999',
        'discount'=>'25% OFF'
    ],
    [
        'src'=>asset('assets/videos/3bda2126-6388-482d-8112-ea8690e62fd6.mp4'),        
        'poster'=>asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg'), 
        'title'=>'Ivory Embroidered Sherwani',
        'price'=>'12,999',
        'old_price'=>'18,500',
        'discount'=>'30% OFF'
    ],
    [
        'src'=>asset('assets/videos/3bda2126-6388-482d-8112-ea8690e62fd6 (1).mp4'),    
        'poster'=>asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg'), 
        'title'=>'Charcoal Velvet Nehru Jacket',
        'price'=>'3,299',
        'old_price'=>'4,500',
        'discount'=>'26% OFF'
    ],
    [
        'src'=>asset('assets/videos/bc0992d6-4bb0-4156-a36b-6aa25c024a11.mp4'),        
        'poster'=>asset('assets/products/84f7d7c500671af9117168db9a995448.jpg'), 
        'title'=>'Emerald Indo-Western Suit',
        'price'=>'8,999',
        'old_price'=>'11,999',
        'discount'=>'25% OFF'
    ],
    [
        'src'=>asset('assets/videos/ecddff0e-8b5c-46bd-9425-919260d80c08.mp4'),        
        'poster'=>asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg'), 
        'title'=>'Rose Gold Festive Jacquard',
        'price'=>'6,499',
        'old_price'=>'8,999',
        'discount'=>'28% OFF'
    ],
    [
        'src'=>asset('assets/videos/0491eb56-c241-4d92-b015-f2aca854ddeb.mp4'),        
        'poster'=>asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg'), 
        'title'=>'Royal Maroon Wedding Sherwani',
        'price'=>'15,999',
        'old_price'=>'22,000',
        'discount'=>'27% OFF'
    ],
];
@endphp

<section class="py-12 md:py-20 px-4 md:px-6 lg:px-12 bg-[#e8e4df]" data-purpose="saren-in-motion">
    <div class="container-custom">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 md:mb-14 pb-6 md:pb-10 border-b border-stone-300 gap-4">
            <div>
                <span class="text-[11px] tracking-[0.35em] uppercase text-stone-500 block mb-2">Interactive Lookbook Vol. 04</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold uppercase italic" style="font-family:'Cormorant Garamond',serif; letter-spacing:0.05em;">
                    Ethnic in Motion
                </h2>
            </div>
            <a href="#" class="hidden md:flex items-center gap-2 text-[11px] font-bold tracking-[0.2em] uppercase border-b border-black pb-1 hover:text-stone-500 transition-colors flex-shrink-0">
                View Full Lookbook
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
            </a>
        </div>

        <div class="flex overflow-x-auto gap-6 lg:gap-8 pb-8 snap-x snap-mandatory hide-scrollbar">
            @foreach($videos as $i => $v)
                <div class="group flex flex-col video-motion-card bg-white rounded-2xl p-4 shadow-sm hover:shadow-2xl transition-all duration-500 w-[85vw] sm:w-[45vw] md:w-[23vw] lg:w-[23vw] flex-shrink-0 snap-start"
                     style="opacity:0; transform:translateY(20px); transition: opacity .5s ease {{ $i*80 }}ms, transform .5s ease {{ $i*80 }}ms, box-shadow .5s ease;">

                    <div class="relative overflow-hidden bg-stone-200 rounded-xl" style="aspect-ratio:3/4;">
                        <video class="w-full h-full object-cover transition-transform duration-[1500ms] group-hover:scale-105"
                                autoplay muted loop playsinline
                                poster="{{ $v['poster'] }}"
                                src="{{ $v['src'] }}">
                        </video>

                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 transition-opacity duration-700 group-hover:opacity-20 rounded-xl"></div>

                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1.5 text-[10px] font-bold text-black tracking-widest uppercase rounded-full shadow-sm">
                            Live Look
                        </div>
                    </div>

                    <div class="mt-5 flex flex-col flex-1 px-1">
                        <h3 class="text-base font-bold text-gray-900 truncate mb-1.5">{{ $v['title'] }}</h3>
                        
                        <div class="flex items-center flex-wrap gap-x-3 gap-y-1 mb-5">
                            <span class="text-lg font-bold text-gray-900">INR {{ $v['price'] }}</span>
                            <span class="text-xs text-gray-400 line-through">INR {{ $v['old_price'] }}</span>
                            <span class="text-[10px] font-bold text-stone-600 bg-stone-100 px-2 py-1 rounded">{{ $v['discount'] }}</span>
                        </div>
                        
                        <div class="mt-auto pt-2">
                            <a href="{{ route('product.details') }}" class="block w-full text-center py-3.5 bg-[#1a1612] text-white text-[11px] font-bold tracking-[0.25em] uppercase hover:bg-stone-700 transition-colors duration-300 rounded-xl">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .video-motion-card.in-view { opacity:1 !important; transform:translateY(0) !important; }
</style>
<script>
(function(){
    // Reveal cards on scroll
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in-view'); io.unobserve(e.target); } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.video-motion-card').forEach(c => io.observe(c));
})();
</script>
