<section class="py-12 md:py-20 bg-transparent">
    <div class="container-custom">
        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 uppercase tracking-wide mb-3">Shop by Occasion</h2>
            <p class="text-sm md:text-base text-gray-600 max-w-xl mx-auto">From intimate gatherings to grand celebrations, discover handpicked styles curated perfectly for your special moments.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6">
            @php
            $occasions = [
                ['name'=>'Wedding Ceremony',  'img'=>asset('assets/products/e8b53858921a1ec2d934f48c6befe20a.jpg')],
                ['name'=>'Festive Season',    'img'=>asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg')],
                ['name'=>'Casual Ethnic',     'img'=>asset('assets/products/b3e594ad1c203f6dfdce2fd3f1be84bd.jpg')],
                ['name'=>'Reception Night',   'img'=>asset('assets/products/ad9318da853cddee6d486b0ccc51b8d9.jpg')],
            ];
            @endphp
            @foreach($occasions as $occ)
                <a href="{{ route('product.details') }}" class="group relative rounded-[1.5rem] md:rounded-[2rem] overflow-hidden aspect-[4/3] md:aspect-square block">
                    <img src="{{ $occ['img'] }}" alt="{{ $occ['name'] }}"
                         class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 flex flex-col items-start text-left md:items-center md:text-center">
                        <h3 class="text-white text-lg md:text-lg font-bold uppercase tracking-wide mb-3 md:mb-4">{{ $occ['name'] }}</h3>
                        <span class="inline-flex items-center gap-2 bg-white text-black px-4 py-2 md:px-5 md:py-2.5 rounded-full text-[10px] md:text-[11px] font-semibold hover:bg-gray-100 transition-colors uppercase">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            DISCOVER
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
