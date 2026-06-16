@props(['product'])

<article class="group relative flex-shrink-0 w-[72vw] sm:w-[45vw] md:w-[320px] snap-start" data-purpose="product-card">
    <!-- Clickable Area -->
    <a href="{{ route('product.details') }}" class="absolute inset-0 z-0"></a>

    <div class="relative rounded-[1.5rem] overflow-hidden aspect-[3/4] pointer-events-none" style="background:#f5f5f5;">
        <img src="{{ $product['primary_image'] }}" alt="{{ $product['name'] }}"
             class="w-full h-full object-cover object-top absolute inset-0 transition-opacity duration-500" loading="lazy">
        <img src="{{ $product['secondary_image'] }}" alt="{{ $product['name'] }}"
             class="w-full h-full object-cover object-top absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500" loading="lazy">

        @if(!empty($product['badge']))
            @php $bc = match($product['badge']) { 'SALE'=>'background:#dc2626;color:#fff;', 'NEW'=>'background:#1a1612;color:#fff;', default=>'background:#1a1612;color:#fff;' }; @endphp
            <span style="position:absolute;top:14px;left:14px;z-index:10;{{ $bc }}font-size:10px;font-weight:700;letter-spacing:0.08em;padding:3px 10px;border-radius:4px;text-transform:uppercase;">{{ $product['badge'] }}</span>
        @endif

        <button class="absolute top-3 right-3 p-2 bg-white/60 rounded-full hover:bg-white transition-colors z-20 pointer-events-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </button>

        @if(!empty($product['sizes']))
            <div class="absolute bottom-0 left-0 right-0 z-20 p-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out pointer-events-auto">
                <div class="bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 flex items-center gap-1.5 flex-wrap">
                    <button class="w-7 h-7 flex items-center justify-center border border-gray-300 rounded-lg text-base leading-none hover:bg-black hover:text-white hover:border-black transition-all duration-200 flex-shrink-0">+</button>
                    @foreach($product['sizes'] as $size)
                        <button class="h-7 px-2 text-[10px] font-semibold border border-gray-300 rounded-lg bg-white hover:bg-black hover:text-white hover:border-black transition-all duration-200">{{ $size }}</button>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <div class="mt-4 px-1">
        <div class="flex justify-between items-start gap-2">
            <h3 class="text-sm font-semibold" style="max-width:180px;">{{ $product['name'] }}</h3>
            @if(!empty($product['sale_price']))
                <div class="text-right flex-shrink-0">
                    <p class="text-[10px] text-neutral-400 line-through">₹{{ $product['price'] }}</p>
                    <p class="text-sm font-bold text-red-600">₹{{ $product['sale_price'] }}</p>
                </div>
            @else
                <p class="text-sm font-bold flex-shrink-0">₹{{ $product['price'] }}</p>
            @endif
        </div>
        <p class="text-[10px] text-neutral-500 mt-1 uppercase tracking-wider">{{ $product['category'] }}</p>
        @if(!empty($product['colors']))
            <div class="flex space-x-1 mt-3">
                @foreach($product['colors'] as $c)
                    <span title="{{ $c['name'] }}" class="w-3 h-3 rounded-full border border-neutral-300 inline-block cursor-pointer hover:scale-125 transition-transform duration-150" style="background:{{ $c['hex'] }};"></span>
                @endforeach
            </div>
        @endif
    </div>
</article>
