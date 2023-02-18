<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto rounded-sm h-screen container-fluid pt-20 overflow-hidden">
        <div class="overflow-hidden sm:rounded-lg inline-flex w-full">
            <aside id="default-sidebar"
                class="top-0 left-0 w-2/5 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">
                <div class="px-3 h-5/6 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <h1 class="font-bold text-center text-2xl">Anggaran</h1>
                    @for($i = 1; $i <= 5; $i++)
                    <a href="{{ route('dashboard') }}"
                        class="my-2 block text-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <p>Rp.{{ $i }}00.0000/minggu</p>
                    </a>
                    @endfor
                    <h1 class="font-bold text-center text-2xl">Durasi</h1>
                    @for($i = 1; $i <= 5; $i++)
                    <a href="{{ route('dashboard') }}"
                        class="my-2 block text-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <p>Rp.{{ $i }} minggu</p>
                    </a>
                    @endfor
                    
                    {{-- @endforeach --}}
                </div>
            </aside>
            <div class="w-full grid grid-rows-2 space-y-64 bg-white h-full">
                <div class="w-full p-5">
                    <p class="font-bold text-3xl">Detail Promosi</p>
                    <p class="font-bold text-xl">Anggaran & Durasi</p>
                    <div class="flex w-full justify-between">
                        <p>Anggaran Promosi</p>
                        <p>Rp. 100.000,00</p>
                    </div>
                    <div class="flex w-full justify-between">
                        <p>Durasi Promosi</p>
                        <p>1 minggu</p>
                    </div>
                    <p class="font-bold text-xl">Detail Harga</p>
                    <div class="flex w-full justify-between">
                        <p>Subtotal</p>
                        <p>Rp. 100.000,00</p>
                    </div>
                    <div class="flex w-full justify-between">
                        <p>Promo</p>
                        <p>- Rp. 0</p>
                    </div>
                    <div class="flex w-full justify-between">
                        <p>Pajak</p>
                        <p>2%</p>
                    </div>
                    <div class="flex w-full justify-between">
                        <p>Total</p>
                        <p>Rp. 102.000,00</p>
                    </div>
                </div>
                <div class="mx-5">
                    <button class="w-full bg-green-400 p-2 rounded text-white">
                        Bayar Dan Mulai Promosi
                    </button>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
