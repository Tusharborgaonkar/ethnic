<footer class="bg-[#0f0d0b] text-stone-300 pt-16 pb-8">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-14">

            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="text-white text-2xl font-bold tracking-[0.3em] mb-5" style="font-family:'Cormorant Garamond',serif;">ETHNIC</div>
                <p class="text-stone-400 text-xs leading-relaxed tracking-wide max-w-xs">
                    Premium men's ethnic wear — where heritage craftsmanship meets contemporary elegance. Crafted for the modern Indian gentleman.
                </p>
                <div class="flex gap-3 mt-6">
                    @foreach(['Instagram','Facebook','Pinterest','YouTube'] as $social)
                        <a href="#" class="w-9 h-9 rounded-full border border-stone-700 flex items-center justify-center hover:border-white hover:text-white transition-colors text-[10px] font-bold">
                            {{ substr($social,0,2) }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Collections --}}
            <div>
                <h4 class="text-white text-[11px] font-bold tracking-[0.3em] uppercase mb-5">Collections</h4>
                <ul class="space-y-3">
                    @foreach(['Kurta Sets','Sherwanis','Nehru Jackets','Indo-Western','Pathani Suits','Festive Wear','Wedding Collection'] as $item)
                        <li><a href="#" class="text-xs text-stone-400 hover:text-white transition-colors tracking-wider uppercase">{{ $item }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Help --}}
            <div>
                <h4 class="text-white text-[11px] font-bold tracking-[0.3em] uppercase mb-5">Help</h4>
                <ul class="space-y-3">
                    @foreach(['Size Guide','Track Order','Returns & Exchange','Shipping Policy','Contact Us','FAQ'] as $item)
                        <li><a href="#" class="text-xs text-stone-400 hover:text-white transition-colors tracking-wider uppercase">{{ $item }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-white text-[11px] font-bold tracking-[0.3em] uppercase mb-5">Contact</h4>
                <ul class="space-y-4 text-xs text-stone-400">
                    <li class="flex gap-2"><span>📍</span><span>123 Ethnic Lane, Textile Market, Surat, Gujarat 395003</span></li>
                    <li class="flex gap-2"><span>📞</span><span>+91 98765 43210</span></li>
                    <li class="flex gap-2"><span>✉</span><span>support@ethnic.in</span></li>
                    <li class="flex gap-2"><span>🕐</span><span>Mon–Sat: 10AM – 7PM IST</span></li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-stone-800 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-[10px] text-stone-500 tracking-wider uppercase">© 2025 Ethnic. All Rights Reserved.</p>
            <div class="flex gap-6">
                @foreach(['Privacy Policy','Terms of Service','Cookie Policy'] as $item)
                    <a href="#" class="text-[10px] text-stone-500 hover:text-white transition-colors tracking-wider uppercase">{{ $item }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
