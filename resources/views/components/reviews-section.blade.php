<section class="py-20 bg-[#e8e4df]">
    <div class="container-custom">
        <div class="text-center mb-14">
            <span class="text-[11px] tracking-[0.35em] uppercase text-stone-500 block mb-2">What Our Customers Say</span>
            <h2 class="text-3xl font-semibold uppercase" style="font-family:'Cormorant Garamond',serif; letter-spacing:0.1em;">Trusted by Thousands</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
            $reviews = [
                ['name'=>'Arjun Sharma',    'city'=>'Delhi',     'rating'=>5, 'text'=>'The Banarasi Sherwani I ordered for my wedding was absolutely magnificent. The craftsmanship and fabric quality exceeded my expectations completely.', 'product'=>'Banarasi Brocade Sherwani'],
                ['name'=>'Rahul Mehta',     'city'=>'Mumbai',    'rating'=>5, 'text'=>'Ordered a festive kurta set for Diwali and received so many compliments. The embroidery work is intricate and the fit is perfect. Will order again!', 'product'=>'Festive Embroidered Kurta Set'],
                ['name'=>'Vikram Singh',    'city'=>'Jaipur',    'rating'=>5, 'text'=>'The Indo-Western jacket set is exactly what I was looking for — blends tradition with modern style seamlessly. Delivery was fast and packaging premium.', 'product'=>'Silk Indo-Western Jacket Set'],
            ];
            @endphp
            @foreach($reviews as $review)
                <div class="bg-white rounded-2xl p-7 shadow-sm">
                    <div class="flex gap-1 mb-4">
                        @for($i=0;$i<$review['rating'];$i++)
                            <svg class="w-4 h-4 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-sm text-stone-600 leading-relaxed mb-6 italic">"{{ $review['text'] }}"</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-bold text-stone-900">{{ $review['name'] }}</p>
                            <p class="text-[10px] text-stone-400 uppercase tracking-wider">{{ $review['city'] }}</p>
                        </div>
                        <p class="text-[10px] text-stone-400 uppercase tracking-wider text-right" style="max-width:120px;">{{ $review['product'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
