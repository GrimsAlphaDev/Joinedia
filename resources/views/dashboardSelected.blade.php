<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto rounded-sm h-screen container-fluid pt-16">
        <x-search-bar />

        <div class="overflow-hidden sm:rounded-lg inline-flex h-5/6 w-full">
            <aside id="default-sidebar"
                class="top-0 left-0 w-2/5 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <a href="{{ route('dashboard') }}"
                        class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lomba Cerdas Cermat UCIC</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Hallo Teman-Teman Mahasiswa/i👋🏻 Sudah siapkah kalian untuk berkompetisi? Karena Universitas Catur Insan Cendekia akan menyelenggarakan "SEMARAK UCIC 2023" dan pendaftaran telah dibuka!</p>
                    </a>
                    @foreach ($events as $event)
                        <a href="{{ route('selected.event.dashboard' , $event->id) }}"
                            class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->nama_event }}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $event->deskripsi }}</p>
                        </a>
                    @endforeach
                </div>
            </aside>
            <div class="w-full bg-white flex h-full"><img class="w-96" src="{{ url('assets/image/') . '/' . $detail_event->image }}" alt="">
                <div class="w-full p-10 text-justify">
                    <h1 class="font-bold text-center">{{ $detail_event->nama_event }}</h1>
                    <p>{{ $detail_event->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
