<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joinedia</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container-fluid">
        {{-- Navbar --}}
        <div class="grid grid-cols-3 px-5 py-1 items-center outline-1 outline-black border-2 fixed w-full bg-white">
            {{-- Logo Brand --}}
            <div class="text-start">
                <a href="{{ url('/dashboard') }}">
                    <img src="assets/image/Logo Joinedia Mix.png" alt="" class="w-36">
                </a>
            </div>
            {{-- Nav link --}}
            <div class="text-center grid grid-cols-4 font-bold">
                <p><a href="">Home</a></p>
                <p><a href="">Event</a></p>
                <p><a href="">Forum</a></p>
                <p><a href="">Promotion</a></p>
            </div>
            {{-- Button Sign Up/Login --}}
            <div class="text-end">
                @if (Route::has('login'))
                    @auth
                    @else
                        <a href="{{ route('login') }}"
                            class="btn btn-primary bg-cyan-600 text-white pt-2 pb-2 pl-4 pr-4 rounded-lg">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="btn btn-primary bg-cyan-600 text-white pt-2 pb-2 pl-4 pr-4 rounded-lg">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        {{-- Big Hero --}}
        <div class="container-fluid bg-white p-10 space-y-40 pt-32">
            <div class="grid grid-cols-2 items-center space-x-20">
                <p class="text-3xl font-bold">
                    Joinedia merupakan Platform Untuk Menghubungkan Mahasiswa Dari Semua Angkatan Kampus, Alumni & Dosen
                    Prodi
                </p>
                <img src="assets/image/Logo Joinedia Mix.png" alt="" class="mx-auto w-3/4">
            </div>
            <div class="w-full">
                <a href="{{ route('register') }}" class="bg-cyan-500 rounded-lg px-32 py-2 text-xl font-bold">Join Now</a>
            </div>
        </div>
        {{-- Feature --}}
        <div class="container-fluid p-10 space-y-5 h-full bg-slate-500">
            <p class="font-bold text-3xl text-center text-white">Our Feature</p>
            <div class="grid grid-cols-3 space-x-10 place-items-center w-3/5 mx-auto">
                {{-- Card --}}
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Nama Fitur</p>
                        <p class="text-center text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Nama Fitur</p>
                        <p class="text-center text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg w-52 h-96 bg-white outline-black border-2">
                    <div class="px-6 py-4 h-full grid place-content-center">
                        <p class="text-center font-bold text-xl mb-2">Nama Fitur</p>
                        <p class="text-center text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
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
                        <p class="w-full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus labore facere recusandae eum
                            nesciunt soluta illo nobis et necessitatibus voluptatem.</p>
                    </div>
                    <p>© 2023 JOINEDIA. All Rights Reserved.</p>
                </div>
                <div class="flex justify-between w-full h-full">
                    <div class="grid place-content-between">
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
                    </div>
                    <div class="grid place-content-between">
                        <p class="hover:text-blue-600 font-bold">Link 1</p>
                        <p class="hover:text-blue-600"><a href="">Home</a></p>
                        <p class="hover:text-blue-600"><a href="">Event</a></p>
                        <p class="hover:text-blue-600"><a href="">Promotion</a></p>
                        <p class="hover:text-blue-600"><a href="">Forum</a></p>
                        <p class="hover:text-blue-600"><a href="">Support</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>
