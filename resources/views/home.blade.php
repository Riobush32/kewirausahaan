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
                            
                            
                        </ul>
                    </nav>
                </div>
                <div class="w-48 h-12 border-1 shadow rounded-md flex pl-3 py-1 bg-white items-center">
                    <svg width="25px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>QuickLook</title><path d="M18.814 11.913a4.786 4.786 0 0 1-4.786 4.786 4.786 4.786 0 0 1-4.786-4.786 4.786 4.786 0 0 1 4.786-4.786 4.786 4.786 0 0 1 4.786 4.786zm1.687 0a6.473 6.473 0 0 1-6.473 6.473 6.473 6.473 0 0 1-6.473-6.473 6.473 6.473 0 0 1 6.473-6.473 6.473 6.473 0 0 1 6.473 6.473zM7.155 1c-2.992.545-5.533 1.037-5.638 1.084a1.274 1.274 0 0 0-.352.298l-.158.205v18.819l.158.205c.088.111.246.246.352.299.24.111 11.095 2.09 11.481 2.09.322 0 .527-.094.756-.334.269-.287.286-.474.269-2.64l-.018-2.003h.293c1.03 0 2.447-.445 3.425-1.077.229-.146.434-.27.457-.27.023 0 .755.715 1.622 1.587.872.873 1.65 1.622 1.739 1.669.088.047.28.082.427.082.592 0 1.025-.416 1.025-.972 0-.17-.03-.38-.065-.474-.029-.088-.784-.89-1.668-1.78l-1.61-1.61.216-.322c1.154-1.716 1.458-4.075.785-6.095-.357-1.066-.837-1.827-1.692-2.688-1.124-1.13-2.29-1.745-3.835-2.014a6.683 6.683 0 0 0-.82-.088h-.299l.018-2.002c.017-2.143 0-2.313-.258-2.623-.222-.264-.439-.352-.825-.346-.188 0-2.787.451-5.785 1.001z"/></svg>

                    <input type="text" placeholder="Search" class="w-24 mx-2">

                    <div class="w-10 h-10 p-[5px] bg-amber-400 items-center justify-center rounded-md">
                        <svg role="img" width="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Shopify</title><path d="M15.337 23.979l7.216-1.561s-2.604-17.613-2.625-17.73c-.018-.116-.114-.192-.211-.192s-1.929-.136-1.929-.136-1.275-1.274-1.439-1.411c-.045-.037-.075-.057-.121-.074l-.914 21.104h.023zM11.71 11.305s-.81-.424-1.774-.424c-1.447 0-1.504.906-1.504 1.141 0 1.232 3.24 1.715 3.24 4.629 0 2.295-1.44 3.76-3.406 3.76-2.354 0-3.54-1.465-3.54-1.465l.646-2.086s1.245 1.066 2.28 1.066c.675 0 .975-.545.975-.932 0-1.619-2.654-1.694-2.654-4.359-.034-2.237 1.571-4.416 4.827-4.416 1.257 0 1.875.361 1.875.361l-.945 2.715-.02.01zM11.17.83c.136 0 .271.038.405.135-.984.465-2.064 1.639-2.508 3.992-.656.213-1.293.405-1.889.578C7.697 3.75 8.951.84 11.17.84V.83zm1.235 2.949v.135c-.754.232-1.583.484-2.394.736.466-1.777 1.333-2.645 2.085-2.971.193.501.309 1.176.309 2.1zm.539-2.234c.694.074 1.141.867 1.429 1.755-.349.114-.735.231-1.158.366v-.252c0-.752-.096-1.371-.271-1.871v.002zm2.992 1.289c-.02 0-.06.021-.078.021s-.289.075-.714.21c-.423-1.233-1.176-2.37-2.508-2.37h-.115C12.135.209 11.669 0 11.265 0 8.159 0 6.675 3.877 6.21 5.846c-1.194.365-2.063.636-2.16.674-.675.213-.694.232-.772.87-.075.462-1.83 14.063-1.83 14.063L15.009 24l.927-21.166z"/></svg>
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
