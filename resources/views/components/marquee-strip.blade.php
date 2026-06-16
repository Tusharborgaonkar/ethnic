<div class="bg-[#1a1612] text-white py-3 overflow-hidden">
    <div class="marquee-track flex gap-16 whitespace-nowrap" style="animation: marquee 28s linear infinite;">
        @php
        $items = ['✦ WEDDING COLLECTION 2025','✦ FREE SHIPPING ON ORDERS ABOVE ₹2999','✦ NEW ARRIVALS: FESTIVE KURTA SETS','✦ EXCLUSIVE SHERWANI COLLECTION','✦ NEHRU JACKETS IN STOCK','✦ HANDCRAFTED ETHNIC WEAR','✦ PREMIUM FABRICS — SILK · LINEN · COTTON'];
        @endphp
        @foreach(array_merge($items, $items) as $item)
            <span class="text-[11px] font-semibold tracking-[0.2em] uppercase shrink-0">{{ $item }}</span>
        @endforeach
    </div>
</div>
<style>
    @keyframes marquee { from { transform: translateX(0) } to { transform: translateX(-50%) } }
    .marquee-track { width: max-content; }
</style>
