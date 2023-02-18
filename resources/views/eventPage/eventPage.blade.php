<x-app-layout>
    <div class="pt-20">

        <div class="bg-white container px-10 py-2 shadow overflow-hidden">
            <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
            <div class="grid">
                <div class="border-b-4 border-gray-400">
                    <h1 class="text-3xl m-2 font-bold">Akademik</h1>
                    <div class="grid grid-cols-2">
                        @foreach ($events_akademik as $event_akademik)
                            <div class="flex outline outline-1 m-2 shadow-sm rounded-sm">
                                <div class="rounded overflow-hidden m-2 flex justify-between">
                                    <div class="md:flex-shrink-0">
                                        <a href="">
                                            <img class="md:w-56"
                                                src="{{ url('assets/image/') . '/' . $event_akademik->image }}"
                                                alt="A Quiet Place movie poster" />
                                        </a>
                                    </div>
                                    <div class="flex flex-col flex-grow px-8 py-4 bg-color-333">
                                        <h3 class="font-bold text-4xl md:text-2xl lg:text-2xl text-black">
                                            {{ $event_akademik->nama_event }}</h3>
                                        <span
                                            class="text-black text-xl lg:text-sm lg:mb-4">{{ $event_akademik->university->nama_universitas }}</span>
                                        <div class="flex-grow">
                                            <p
                                                class="text-xl md:text-base lg:text-base text-black leading-snug truncate-overflow">
                                                {{ $event_akademik->deskripsi }}</p>
                                        </div>
                                        <div class="button-container flex justify-between mb-2">
                                            <button
                                                class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-blue-500 text-white">Lihat
                                                Event</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="border-b-4 border-gray-400">
                    <h1 class="text-3xl m-2 font-bold">Non Akademik</h1>
                    <div class="grid grid-cols-2">
                        @foreach ($events_non_akademik as $event_akademik)
                            <div class="flex outline outline-1 m-2 shadow-sm rounded-sm">
                                <div class="rounded overflow-hidden m-2 flex justify-between">
                                    <div class="md:flex-shrink-0">
                                        <a href="">
                                            <img class="md:w-56"
                                                src="{{ url('assets/image/') . '/' . $event_akademik->image }}"
                                                alt="A Quiet Place movie poster" />
                                        </a>
                                    </div>
                                    <div class="flex flex-col flex-grow px-8 py-4 bg-color-333">
                                        <h3 class="font-bold text-4xl md:text-2xl lg:text-2xl text-black">
                                            {{ $event_akademik->nama_event }}</h3>
                                        <span
                                            class="text-black text-xl lg:text-sm lg:mb-4">{{ $event_akademik->university->nama_universitas }}</span>
                                        <div class="flex-grow">
                                            <p
                                                class="text-xl md:text-base lg:text-base text-black leading-snug truncate-overflow">
                                                {{ $event_akademik->deskripsi }}</p>
                                        </div>
                                        <div class="button-container flex justify-between mb-2">
                                            <button
                                                class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-blue-500 text-white">Lihat
                                                Event</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
