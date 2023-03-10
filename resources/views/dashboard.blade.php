<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto rounded-sm h-screen container-fluid pt-20 overflow-hidden">
        <div class="overflow-hidden sm:rounded-lg inline-flex w-full h-5/6">
            <aside id="default-sidebar"
                class="top-0 left-0 w-3/4 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">
                <div class="px-3 h-5/6 py-2 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <a href="{{ route('dashboard') }}"
                        class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lomba Cerdas
                            Cermat
                            UCIC</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Hallo Teman-Teman Mahasiswa/iğğ» Sudah
                            siapkah kalian untuk berkompetisi? Karena Universitas Catur Insan Cendekia akan
                            menyelenggarakan
                            "SEMARAK UCIC 2023" dan pendaftaran telah dibuka!</p>
                    </a>
                    {{-- @foreach ($events as $event) --}}
                    @for ($i = 0; $i < 10; $i++)
                        <a href=""
                            class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{-- {{ $event->nama_event }} --}}
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                {{-- {{ $event->deskripsi }} --}}
                            </p>
                        </a>
                    @endfor
                    {{-- @endforeach --}}
                </div>
            </aside>
            <img class="" src="assets/image/poster.png" alt="">
            <div class="w-full bg-white flex h-full overflow-auto">
                <div class="w-full p-10 text-justify">
                    <h1 class="font-bold text-center">â¨[OPEN REGISTER NOW - SEMARAK UCIC 2023]â¨</h1>
                    <p>Hallo Teman-Teman Mahasiswa/iğğ» Sudah siapkah kalian untuk berkompetisi? Karena Universitas
                        Catur Insan Cendekia akan menyelenggarakan "SEMARAK UCIC 2023" dan pendaftaran telah dibuka!ğ¥
                    <p class="font-bold">
                        ğ PROUDLY PRESENT!!ğ
                    </p>
                    SEMARAK UCIC 2023 merupakan satu rangkaian beberapa perlombaan yang akan diikuti oleh
                    Mahasiswa/i se-Ciayumajakuning dengan hadiah jutaan rupiah lho!!ğ¥³
                    Catat Tanggalnya Ya!!</p>
                    <p>ğ Pelaksanaan : 06-11 Februari 2023 ğ Kampus Universitas Catur Insan Cendeki ğAdapun
                        Perlombaan Yang di Selenggarakan Adalah:
                        ğ Pelaksanaan : 06-11 Februari 2023 ğ Kampus Universitas Catur Insan Cendeki ğAdapun
                        Perlombaan Yang di Selenggarakan Adalah:
                    <ul>
                        <li>
                            1. Web Design
                        </li>
                        <li>
                            2. Poster
                        </li>
                        <li>
                            3. Essay
                        </li>
                        <li>
                            4. Cerdas Cermat
                        </li>
                        <li>
                            5. Videografi
                        </li>
                        <li>
                            6. E-Sport (Mobile Legend)
                        </li>
                    </ul>
                    </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, facilis inventore a quis nisi magni ex, consequuntur enim, quam fugiat vel molestias. Natus cum dolore fuga exercitationem quisquam blanditiis rem illum ipsum, consequuntur atque. Voluptatem sint maiores doloribus autem, nisi distinctio ducimus magni vitae magnam soluta doloremque aperiam perspiciatis, porro, optio est? Doloribus odit nisi error, totam quidem, similique consequuntur ab illum, ipsa beatae consequatur ea aspernatur fugit? Iure expedita consequatur eveniet inventore necessitatibus facere! Impedit, nulla consequuntur numquam tempore distinctio nobis dolorem accusamus dolore eos in at provident quos. Delectus fugiat corporis dolor eos officiis asperiores quos laboriosam vero.</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
