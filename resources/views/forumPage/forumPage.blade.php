<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto rounded-sm h-screen container-fluid pt-16 overflow-hidden">
        <div class="overflow-hidden sm:rounded-lg inline-flex w-full h-full">
            <aside id="default-sidebar"
                class="top-0 left-0 w-3/2 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">
                <div class="px-3 h-full py-2 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <a href="{{ route('dashboard') }}"
                        class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lomba Cerdas
                            Cermat
                            UCIC</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Hallo Teman-Teman Mahasiswa/i👋🏻 Sudah
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
            {{-- End navbar --}}
            {{-- chat room --}}
            <div class="w-full bg-white h-full overflow-hidden">
                {{-- chat name --}}
                <div class="p-2.5 bg-blue-500 h-fit flex items-center">
                    <div class="bg-black rounded-full w-10 h-10 mr-3">
                    </div>
                    <div class="text-white">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, enim.</p>
                    </div>
                </div>
                {{-- chat field --}}
                <div class="w-full h-5/6 bg-gray-100 p-3 text-justify overflow-auto grid grid-rows-5 gap-1">
                    <div class="relative">
                        {{-- chat left --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                    ">Lorem, ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- chat right --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit right-0 absolute">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                        ">Lorem,
                                ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- chat left --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                    ">Lorem, ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- chat right --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit right-0 absolute">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                        ">Lorem,
                                ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- chat right --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit right-0 absolute">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                        ">Lorem,
                                ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- chat right --}}
                        <div class="bg-blue-500 w-1/2 rounded-lg p-2 h-fit right-0 absolute">
                            <label for="">
                                <p class="font-bold text-xl text-white">User 1</p>
                            </label>
                            {{-- message --}}
                            <p class="bg-blue-200 p-2 rounded text-sm
                                        ">Lorem,
                                ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Itaque, eius.</p>
                        </div>
                    </div>
                </div>
                {{-- input chat --}}
                <div class="h-fit">
                    <div class=" w-full">
                        <form>
                            <label for="chat" class="sr-only">Your message</label>
                            <div class="flex items-center px-3 py-2 bg-gray-200 dark:bg-gray-700">
                                <button type="button"
                                    class="inline-flex justify-center p-2 text-gray-500 cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                                <button type="button"
                                    class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Add emoji</span>
                                </button>
                                <textarea id="chat" rows="1"
                                    class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Your message..."></textarea>
                                <button type="submit"
                                    class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Send message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
