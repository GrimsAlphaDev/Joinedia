<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Event') }}
        </h2>
    </x-slot>

    <main>
        <div class="container mx-auto mt-20">
            <div class="w-2/3 mx-auto rounded-sm bg-white p-10">
                <form>
                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Event</label>
                        <input type="text" placeholder="Masukkan Nama Event" id="small-input"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Deskripsi event</label>
                        <textarea id="message" rows="4"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis Deskripsi Event Kamu"></textarea>
                    </div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Pelaksanaan</label>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Dari</label>
                            <input type="text" placeholder="Masukkan Nama Event" id="small-input"
                                class="block w-full mx-2 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="flex items-center w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Sampai</label>
                            <input type="text" placeholder="Masukkan Nama Event" id="small-input"
                                class="block w-full mx-2 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster /
                            Gambar</label>
                        <input type="file" placeholder="Masukkan Nama Event" id="small-input"
                            class="cursor-pointer block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            aria-describedby="user_avatar_help" id="user_avatar">
                    </div>
                    <div class="items-center flex">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Open
                            Volunteer</label>
                        <label class="mx-2 relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                        <span class="text-sm font-bold text-red-500 w-2/3">*Dengan mengaktifkan fitur ini, anda bisa merekrut
                            volunteer untuk menjadi panitia ke event anda</span>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat
                            Event</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</x-app-layout>
