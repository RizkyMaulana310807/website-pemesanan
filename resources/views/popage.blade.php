<x-template>
    {{-- Inisialisasi Alpine.js untuk mengelola state form --}}
    <div x-data="{
        customer_name: '{{ old('customer_name') }}',
        customer_phone: '{{ old('customer_phone') }}',
        {{-- pickup_time_slot: '{{ old('pickup_time_slot') }}', --}}
        products: {{ json_encode(
            $availableProducts->map(function ($p) {
                return ['id' => $p->id, 'name' => $p->name, 'price' => $p->price, 'image' => $p->image, 'quantity' => 0];
            }),
        ) }},
    
        // Fungsi untuk menghitung total harga
        get grandTotal() {
            return this.products.reduce((total, product) => {
                return total + (product.quantity * product.price);
            }, 0);
        },
    
        // Fungsi untuk validasi form
        get isFormInvalid() {
            return !this.customer_name || !this.customer_phone || this.grandTotal <= 0;
        }
    }">

        <div class="flex w-full px-4 mt-8 mx-auto justify-center">
            <div class="w-fit">
                <img src="{{ asset('/images/preordertext.png') }}" alt="Pre Order Text" class="w-56">
                <p class="text-[#E72828] poppins text-[15px] mt-1 text-start">3–5 Agustus</p>
            </div>
        </div>

        <form action="{{ route('preorder.process') }}" method="POST">
            @csrf
            <div class="mt-12">
                <p class="poppins text-[16px] text-[#164483] text-center">Pesenan kamu PO nih, masukin<br>infonya dulu
                    biar nggak ketuker<br>pas diambil</p>
            </div>

            @if ($errors->any())
                <div class="w-[354px] mx-auto my-4 p-3 bg-red-100 text-red-700 border border-red-400 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex items-center justify-center flex-col gap-6 mt-12">
                <input type="text" id="nameInput" name="customer_name"
                    class="inputform poppins w-[320px] h-[50px] border-1 rounded-full p-4 border-[#E72828]/50 focus:outline-[#E72828] focus:outline-2 transition-all duration-200"
                    placeholder="Nama">

                <input type="text" id="phoneInput" name="customer_phone"
                    class="inputform poppins w-[320px] h-[50px] border-1 rounded-full p-4 border-[#E72828]/50 focus:outline-[#E72828] focus:outline-2 transition-all duration-200"
                    placeholder="No. HP">
            </div>

            <div
                class="w-[340px] border-2 border-[#EB3D3D] rounded-4xl flex items-center justify-center flex-col mx-auto mt-12">
                <h1 class="text-[25px] coolvetica text-[#164483] text-center m-4">Menu yang dipesan</h1>
                <div class="flex flex-col w-full">
                    {{-- Loop menu menggunakan template Alpine.js --}}
                    <template x-for="(product, index) in products" :key="product.id">
                        <div class="flex justify-between items-center p-4">
                            <img :src="'{{ asset('') }}' + product.image" :alt="product.name"
                                class="w-20 h-20 rounded-md object-cover">
                            <div class="flex-grow mx-4">
                                <h3 class="font-bold text-[#164483]" x-text="product.name"></h3>
                                <p class="text-sm text-[#E72828]"
                                    x-text="new Intl.NumberFormat('id-ID').format(product.price) + 'K'"></p>
                            </div>
                            <div class="flex items-center gap-2" x-data="{ qty: product.quantity || 0 }" x-init="$watch('qty', val => product.quantity = val)">
                                <!-- Hidden ID -->
                                <input type="hidden" :name="'products[' + index + '][id]'" :value="product.id">

                                <!-- Tombol - -->
                                <button type="button" @click="qty > 0 ? qty-- : 1"
                                    class="w-6 h-6 rounded bg-[#164483] text-white text-sm flex items-center justify-center">−</button>

                                <!-- Input Jumlah -->
                                <input type="number" :name="'products[' + index + '][quantity]'" x-model.number="qty"
                                    class="w-6 text-center border rounded" min="0">

                                <!-- Tombol + -->
                                <button type="button" @click="qty++"
                                    class="w-6 h-6 rounded bg-[#164483] text-white text-sm flex items-center justify-center">+</button>
                            </div>
                        </div>
                    </template>
                </div>
                {{-- Menampilkan Total Harga Real-time --}}
                <div class="w-full p-4 text-right">
                    <span class="text-[#164483] font-bold">Total:</span>
                    <span class="font-bold text-lg text-[#E72828]"
                        x-text="'Rp' + new Intl.NumberFormat('id-ID').format(grandTotal)"></span>
                </div>
            </div>

            <div class="flex items-center text-center justify-center my-12">
                <button type="submit"
                    class="flex w-[300px] h-[50px] coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white active:bg-transparent active:text-[#164483] rounded-full items-center justify-center transition">
                    Selanjutnya
                </button>
            </div>
        </form>
    </div>
</x-template>
