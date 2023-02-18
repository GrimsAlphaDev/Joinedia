<x-app-layout>
    {{-- Navbar --}}
    <div class="container-fluid">
        {{-- <x-navbar-custom></x-navbar-custom> --}}
        {{-- Big Hero --}}
        <div class="container-fluid bg-white p-10 space-y-40 pt-32">
            <div class="grid grid-cols-2 items-center space-x-20">
                <p class="text-3xl font-bold">
                    Joinedia merupakan Platform Untuk Menghubungkan Mahasiswa Dari Semua Angkatan Kampus, Alumni & Dosen
                    Prodi
                </p>
                <img src="assets/image/Logo Joinedia Mix.png" alt="" class="mx-auto w-3/4">
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="w-full">
                        <a href="{{ route('dashboard') }}" class="bg-cyan-500 rounded-lg px-32 py-2 text-xl font-bold">Kembali
                            Ke Dashboard</a>
                    </div>
                @else
                    @if (Route::has('register'))
                        <div class="w-full">
                            <a href="{{ route('register') }}"
                                class="bg-cyan-500 rounded-lg px-32 py-2 text-xl font-bold">Join Now</a>
                        </div>
                    @endif
                @endauth
            @endif
        </div>
        {{-- Feature --}}
        <div class="container-fluid p-10 space-y-5 h-full bg-slate-500">
            <p class="font-bold text-3xl text-center text-white">Our Feature</p>
            <div class="grid grid-cols-3 space-x-10 place-items-center w-3/5 mx-auto">
                {{-- Card --}}
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Real Time Chat</p>
                        <p class="text-center text-gray-700 text-base">
                            Fitur Real Time Chat memungkinkan pengguna untuk berkomunikasi satu sama lain secara instan dan dalam waktu nyata, meningkatkan efisiensi dan komunikasi yang mulus.
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Event Management</p>
                        <p class="text-center text-gray-700 text-base">
                            Fitur manajemen acara mempermudah proses perencanaan dan pelaksanaan acara dengan menyediakan berbagai alat untuk mengelola seluruh proses, dari awal hingga akhir. Baik untuk acara skala kecil atau besar
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Volunteer Management</p>
                        <p class="text-center text-gray-700 text-base">
                            Fitur Manajemen Sukarelawan membantu organisasi dalam merekrut, melatih, dan mengelola sukarelawan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Top Event --}}
        <div class="container-fluid px-10 py-10 space-y-5 h-full">
            <div class="flex justify-between items-center px-5">
                <p class="font-bold text-3xl">Top Event</p>
                <a href="">
                    <p class="font-bold bg-black text-white px-5 py-3 rounded-lg">Lebih Banyak</p>
                </a>
            </div>
            <div class="grid grid-cols-3 space-y-5 place-items-center mx-auto">
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 grid place-content-start space-y-10">
                        <img src="assets/image/Logo Joinedia Mix.png" alt="">
                        <div class="w-full h-full">
                            <p class="font-bold text-xl mb-2">Nama Event</p>
                            <p class=" text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        {{-- Footer --}}
        <div class="container-fluid px-10 py-10 space-y-5 h-96">
            <div class="flex justify-between px-5 py-10  h-full">
                <div class="grid place-content-between w-full space-y-10">
                    <div class="space-y-2">
                        <img src="assets/image/Logo Joinedia B&W.png" class="w-1/4" alt="">
                        <p class="w-full">Joinedia merupakan Platform Untuk Menghubungkan 
                            Mahasiswa Dari Semua Angkatan Kampus,<br> Alumni & Dosen Prodi</p>
                    </div>
                    <p>© 2023 JOINEDIA. All Rights Reserved.</p>
                </div>
                <div class="flex justify-between w-full h-full">
                    <div class="grid place-content-between">
                        <p class="hover:text-blue-600 font-bold">Link</p>
                        <p class="hover:text-blue-600"><a href="{{ route('dashboard') }}">Home</a></p>
                        <p class="hover:text-blue-600"><a href="{{ route('event') }}">Event</a></p>
                        <p class="hover:text-blue-600"><a href="">Promotion</a></p>
                        <p class="hover:text-blue-600"><a href="">Forum</a></p>
                        <p class="hover:text-blue-600"><a href="">Support</a></p>
                    </div>
                    {{-- <div class="grid place-content-between">
                        <p class="hover:text-blue-600 font-bold">Link 1</p>
                        <p class="hover:text-blue-600"><a href="">Home</a></p>
                        <p class="hover:text-blue-600"><a href="">Event</a></p>
                        <p class="hover:text-blue-600"><a href="">Promotion</a></p>
                        <p class="hover:text-blue-600"><a href="">Forum</a></p>
                        <p class="hover:text-blue-600"><a href="">Support</a></p>
                    </div>
                    <div class="grid place-content-between">
                        <p class="hover:text-blue-600 font-bold">Link 1</p>
                        <p class="hover:text-blue-600"><a href="">Home</a></p>
                        <p class="hover:text-blue-600"><a href="">Event</a></p>
                        <p class="hover:text-blue-600"><a href="">Promotion</a></p>
                        <p class="hover:text-blue-600"><a href="">Forum</a></p>
                        <p class="hover:text-blue-600"><a href="">Support</a></p>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
