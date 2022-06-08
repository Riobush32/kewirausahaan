<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    {{-- header strart  --}}
    <header class="bg-transparent w-full absolute top-0 left-0 flex intems-center z-10">
        <div class="container">
            <div class="flex justify-between items-center relative">
                <div class="px-4 flex">
                    <div class="width-{70px} pt-4">
                        <img src="{{ asset('img/Group_1-removebg-preview.png') }}" alt="" width="70">
                    </div>

                    <a href="#home" class="font-bold text-lg text-dark block py-6">Snack.Id</a>
                </div>
                <div class="flex items-center px-4 mr-2">
                    <button id="humberger" name="humberger" class="block absolute right-4:button lg:hidden">
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="blok lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Shop</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Sign-In</a>
                            </li>

                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Sign-Up</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="w-48 h-12 border-1 shadow rounded">
                    <input type="text" placeholder="Search" class="w-48 h-12">
                </div>
            </div>
        </div>
    </header>
    {{-- header end --}}

    {{-- banner start  --}}
    <div class="realtive container-[100%]  md:flex md:flex-row-reverse">
        <div class="w-full bg-amber-50 md:w-1/2">

            <div class="mt-36 flex justify-center md:justify-start">
                <img src="{{ asset('img/banner3.png') }}" alt="banner" width="350px">
            </div>

        </div>
        <div class="container w-full mt-10 px-10 md:px-0 md:w-1/2 md:mt-36 md:pl-24">
            <h1 class="font-bold text-5xl text-dark max-w-md">Lestarikan Snack Khas Indonesia</h1>
            <div class="flex mt-3">
                <div class="flex flex-wrap h-[100px] w-1/2 items-center ">
                    <div class="w-full">
                        <hr class="h-4 border-5 border-slate-500 block w-[70%] ">
                    </div>

                    <h3 class="font-semibold text-xl block text-dark">#1</h3>
                </div>
                <div class="w-1/2">
                    <p class="font-base text-sm text-secondary mb-10 mt-[15px] md:max-w-xs">Beragam jajanan Khas Indonesia Tersedia DiSini </p>

                    <a href="#"
                        class="text-base font-semibold mt-5 text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Mulai
                        Belanja</a>
                </div>
            </div>
            <div class="container flex mt-16">
                <div class="container flex items-center">
                    <div class="w-10 h-10 rounded-full bg-orange-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>
                    <div class="w-10 h-10 rounded-full bg-lime-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>
                    <div class="w-10 h-10 rounded-full bg-amber-300 overflow-hidden border border-white -ml-2">
                        <img src="{{ asset('img/gambar2.png') }}" alt="">
                    </div>

                    <p class="font-semibold text-sm text-slate-700 max-w-[100px] mx-3">Para Developer</p>
                </div>
                <div class="ml-30 mr-10">
                    <h2 class="font-semibold text-2xl text-dark">100%</h2>
                    <p class="fond-base text-xs text-secondary">Bebas Pengawet</p>
                </div>

            </div>

            


        </div>
    </div>
    {{-- banner end  --}}

    {{-- store start  --}}
    <div class="w-full bg-emerald-800 md:flex md:py-10">
        <div class="container w-1/2 flex md:py-10 md:justify-start md:ml-10">
            <a href=""class="w-1/2 container md:w-52 md:h-56 flex flex-col md:mx-10 md:rounded-md bg-smoot md:px-6 items-center hover:animate-pulse">
                <img src="{{ asset('img/product2.png') }}" alt="product-1" width="250px">
                <h2 class="font-semibold text-emerald-800">Rp 5.000,00</h2>
                <h4 class="font-semibold text-md text-dark inline-block mx-auto">Kripik Singkong Balado</h4>
            </a>
            <a href=""class="w-1/2 container md:w-52 md:h-56 flex flex-col md:mx-10 md:rounded-md bg-fresh md:px-6 items-center hover:animate-pulse pt-2">
                <img src="{{ asset('img/banner4.png') }}" alt="product-1" width="125px">
                <h2 class="font-semibold text-emerald-800">Rp 5.000,00</h2>
                <h4 class="font-semibold text-md text-dark inline-block mx-auto">Kripik Singkong Original</h4>
            </a>
            
        </div>
        <div class="md:w-1/2 md:mx-5 md:pt-10">
            <h1 class="font-semibold text-4xl text-white md:text-5xl max-w-md">Ayo Beli Sekarang!</h1>
            <p class="font-base text-sm text-white mt-5 max-w-md">Snack id menjamin cemilannya bebas pengawet dan pastinya akan mengobati rasa kangen teman-teman dengan cita rasa khas Indonesia</p>
        </div>
    </div>
    {{-- store end  --}}



    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
