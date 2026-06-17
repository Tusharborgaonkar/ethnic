@php
$trending = [
    ['name'=>'Handwoven Silk Kurta Set',       'price'=>'3499','sale_price'=>null,   'category'=>'Kurta Sets , Festive',       'badge'=>null,   'primary_image'=>asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg'),'secondary_image'=>asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg'),'colors'=>[['hex'=>'#d4a867','name'=>'Gold'],['hex'=>'#1a1612','name'=>'Onyx']],'sizes'=>['S','M','L','XL','XXL']],
    ['name'=>'Embroidered Bandhgala Sherwani', 'price'=>'8999','sale_price'=>null,   'category'=>'Sherwanis , Wedding',        'badge'=>'NEW',  'primary_image'=>asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg'),'secondary_image'=>asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg'),'colors'=>[['hex'=>'#1a1612','name'=>'Charcoal'],['hex'=>'#8b7355','name'=>'Beige']],'sizes'=>['S','M','L','XL']],
    ['name'=>'Linen Pathani Kurta Set',        'price'=>'2999','sale_price'=>'2499', 'category'=>'Pathani , Casual Ethnic',    'badge'=>'SALE', 'primary_image'=>asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg'),'secondary_image'=>asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg'),'colors'=>[['hex'=>'#c4b49a','name'=>'Sand'],['hex'=>'#4a5568','name'=>'Grey']],'sizes'=>['S','M','L','XL','XXL']],
    ['name'=>'Royal Velvet Nehru Jacket',      'price'=>'4499','sale_price'=>'3799', 'category'=>'Nehru Jackets , Festive',    'badge'=>'SALE', 'primary_image'=>asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg'),'secondary_image'=>asset('assets/products/84f7d7c500671af9117168db9a995448.jpg'),'colors'=>[['hex'=>'#1e3a5f','name'=>'Navy'],['hex'=>'#6b2737','name'=>'Maroon'],['hex'=>'#1a1612','name'=>'Black']],'sizes'=>['S','M','L','XL']],
    ['name'=>'Cotton Angrakha Kurta',          'price'=>'1899','sale_price'=>null,   'category'=>'Kurtas , Casual',            'badge'=>null,   'primary_image'=>asset('assets/products/84f7d7c500671af9117168db9a995448.jpg'),'secondary_image'=>asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg'),'colors'=>[['hex'=>'#e8e0d5','name'=>'Ivory'],['hex'=>'#8b7355','name'=>'Camel']],'sizes'=>['S','M','L','XL','XXL']],
];
@endphp

{{-- ── TRENDING NOW ── --}}
<section class="trending-section" style="padding-top:40px; padding-bottom:32px;" data-purpose="trending-products">
    <div class="container-custom">
        <div class="trending-header flex flex-row justify-between items-center mb-6 md:mb-10">
            <h2 class="trending-title text-xl md:text-2xl font-medium uppercase text-left text-gray-900 tracking-wide">TRENDING NOW</h2>
            <a class="trending-shop-btn flex items-center text-xs font-semibold text-gray-700 bg-white px-4 py-2 rounded-full hover:bg-neutral-50 transition-colors gap-2 flex-shrink-0 shadow-sm" href="{{ route('product.details') }}">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                SHOP ALL
            </a>
        </div>
        <div class="flex gap-4 md:gap-6 overflow-x-auto pb-4 hide-scrollbar snap-x snap-mandatory">
            @foreach($trending as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>
</section>

{{-- ── COLLECTION BANNERS ── --}}
<section class="container-custom mt-10 md:mt-16 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
    <a href="{{ route('product.details') }}" class="relative rounded-2xl md:rounded-[2rem] overflow-hidden group cursor-pointer block aspect-[3/4] md:aspect-[4/3]">
        <img src="{{ asset('assets/products/e8b53858921a1ec2d934f48c6befe20a.jpg') }}"
             alt="Wedding Collection"
             class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/15 transition-colors"></div>
        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
            <h2 class="text-xl md:text-3xl font-bold mb-3 md:mb-5 tracking-wide" style="font-family:'Cormorant Garamond',serif;">WEDDING COLLECTION</h2>
            <span class="inline-flex items-center bg-white text-black px-4 py-2.5 md:px-6 md:py-3 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-widest hover:bg-neutral-100 transition-colors gap-2">
                <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                EXPLORE SHERWANIS
            </span>
        </div>
    </a>
    <a href="{{ route('product.details') }}" class="relative rounded-2xl md:rounded-[2rem] overflow-hidden group cursor-pointer block aspect-[3/4] md:aspect-[4/3]">
        <img src="{{ asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg') }}"
             alt="Festive Collection"
             class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/15 transition-colors"></div>
        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
            <h2 class="text-xl md:text-3xl font-bold mb-3 md:mb-5 tracking-wide" style="font-family:'Cormorant Garamond',serif;">FESTIVE COLLECTION</h2>
            <span class="inline-flex items-center bg-white text-black px-4 py-2.5 md:px-6 md:py-3 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-widest hover:bg-neutral-100 transition-colors gap-2">
                <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                EXPLORE KURTA SETS
            </span>
        </div>
    </a>
</section>

<style>
    .container-custom { max-width:1440px; margin:0 auto; padding-left:2rem; padding-right:2rem; }
    .hide-scrollbar { -ms-overflow-style:none; scrollbar-width:none; }
    .hide-scrollbar::-webkit-scrollbar { display:none; }
    .serif { font-family:'Cormorant Garamond',serif; }
    @media (max-width:640px) {
        .container-custom { padding-left:1rem; padding-right:1rem; }
        .trending-section {
            padding-top: 3.2rem !important;
            padding-bottom: 1.75rem !important;
        }

        .trending-header {
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
            gap: .85rem !important;
            margin-bottom: 1.65rem !important;
            text-align: center;
        }

        .trending-title {
            font-size: 1.4rem !important;
            line-height: 1 !important;
            font-weight: 600 !important;
            text-align: center !important;
            letter-spacing: 0 !important;
        }

        .trending-shop-btn {
            min-width: 6.9rem;
            height: 2rem;
            justify-content: center;
            padding: 0 .95rem !important;
            border-radius: 999px !important;
            font-size: .75rem !important;
            font-weight: 500 !important;
            color: #2f2f2f !important;
            gap: .45rem !important;
            box-shadow: none !important;
        }
    }
</style>
