@props(['img', 'alt' => '', 'title', 'price'])

<div class="flex items-center justify-between w-full px-4 py-2 mb-8">
    <!-- Gambar dan Info -->
    <div class="flex items-center gap-3">
        <img src="{{ asset($img) }}" alt="{{ $alt }}" class="w-16 h-16 rounded-full object-cover">
        <div class="leading-tight">
            <p class="font-bold text-[#164483] text-[22px]">{{ $title }}</p>
            <p class="text-[#E72828] font-bold text-[26px] mt-1">{{ $price }}</p>
        </div>
    </div>

    <!-- Counter -->
    <div x-data="{ qty: 1 }" class="flex items-center gap-1">
        <button @click="qty > 1 ? qty-- : 1"
            class="w-6 h-6 rounded bg-[#164483] text-white text-sm flex items-center justify-center">−</button>
        <span class="font-medium text-[#164483] text-sm w-4 text-center" x-text="qty"></span>
        <button @click="qty++"
            class="w-6 h-6 rounded bg-[#164483] text-white text-sm flex items-center justify-center">+</button>
    </div>
</div>
