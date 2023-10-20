<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VK Wedding</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('public') }}/assets/config/tailwind.css" />
    <link rel="stylesheet" href="{{ url('public') }}/assets/config/styles.css" />
  </head>
  <body class="landing-screen" id="home">
   
    
   
<nav class="navbars">
    <div class="navbars-content">
        <a href="#" class="flex items-center">
            <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-green-100 rounded-full dark:bg-gray-600">
                <span class="font-medium text-gray-600 dark:text-gray-300">Vw</span>
            </div>
            <span class="brand-title ml-6">Vitri Weddding</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="navbars-menus" id="navbar-default">
            <ul class="navbars-menus-ul">
                <li>
                    <a href="#home" class="navbars-menus-item active" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#paket" class="navbars-menus-items">Paket</a>
                </li>
                <li>
                    <a href="#event" class="navbars-menus-items">Event</a>
                </li>
                <li>
                    <a href="#galeri" class="navbars-menus-items">Galeri</a>
                </li>
                <li>
                    <a href="#artikel" class="navbars-menus-items">Artikel</a>
                </li>
                <li>
                    <a href="#kontak" class="navbars-menus-items">Kontak Kami</a>
                </li>
                <li>
                    <a href="{{ url('auth/login') }}" class="navbars-menus-items">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section-hero">
    <div class="hero-caption">
        <h1>Selamat Datang !</h1>
        <h2>Fitri Wedding</h2>
        <a href="" class="px-6 py-4 rounded-full bg-green-500 min-w-[250px] mt-8 text-white font-medium text-sm flex items-center justify-center">Jelajahi</a>

    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="paket">
    <div class="sections-header mb-8 mt-[114px] flex items-center justify-center flex-col">
        <h2 class="text-2xl font-medium text-green-500">Paket Layanan Wedding</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-4">
    @foreach ($paket as $item)
        
        <div class="bg-white rounded-md hover:shadow-md">
            <img src="{{ url('public') }}/{{ $item->gambar }}" alt="" style="width: 100%;height:250px">
            <div class="p-6">
                <h5 class="font-bold text-2xl text-slate-600">{{ $item->nama }}</h5>
                <h5 class="font-bold text-4xl text-green-600" style="font-size: 50px;font-weight:800;color:#22c55e">Rp.{{ $item->harga }}</h5>
            </div>
        </div>
    @endforeach

    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="event">
    <div class="sections-header mb-8 mt-[114px] flex items-center justify-center flex-col">
        <h2 class="text-2xl font-medium text-green-500">Top Event Wedding</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-4">
        @foreach ($event as $item)
        
        <div class="bg-white rounded-md hover:shadow-md">
            <img src="{{ url('public') }}/{{ $item->thumbnail }}" alt="" style="width: 100%;height:250px">
            <div class="p-6">
                <h5 class="font-bold text-2xl text-slate-600">{{ $item->judul }}</h5>
                <h5 class="" style="color:#94a3b8">{{ Str::limit($item->isi, 100) }} <button style="font-size: 16px;color:#22c55e;font-weight:500">Selengkapnya ></button></h5>
            </div>
        </div>
    @endforeach
    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="galeri">
    <div class="sections-header mb-8 mt-[114px] flex items-center justify-center flex-col">
        <h2 class="text-2xl font-medium text-green-500">Galeri</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-4 gap-6">
        @foreach ($galeri as $item)
        
        <div class="bg-white rounded-md hover:shadow-md">
            <img src="{{ url('public') }}/{{ $item->gambar }}" alt="" style="width: 100%;height:250px">
            <div class="p-6 text-center">
                <h5 class="font-bold text-2xl text-slate-600">{{ $item->judul }}</h5>
                <h5 class="" style="color:#94a3b8">{{ Str::limit($item->keterang, 100) }}</h5>
            </div>
        </div>
    @endforeach

    </div>
</section>
<section class="p-8 min-h-screen w-screen bg-slate-50 " id="galeri">
    <div class="sections-header mb-8 mt-[114px] flex items-center justify-center flex-col">
        <h2 class="text-2xl font-medium text-green-500">Artikel</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-6">
        @foreach ($artikel as $item)
        
        <button class="bg-white rounded-md hover:shadow-md">
            <img src="{{ url('public') }}/{{ $item->thumbnail }}" alt="" style="width: 100%;height:250px">
            <div class="p-6 text-center">
                <h5 class="font-bold text-2xl text-slate-600">{{ $item->judul }}</h5>
                <h5 class="" style="color:#94a3b8">{{ Str::limit($item->isi, 100) }}</h5>
            </div>
        </button>
    @endforeach

    </div>
</section>



<section class="p-8 min-h-screen w-screen" style="background: #22c55e; display:flex;justify-content:space-between; padding: 50px 128px" id="kontak">
    <div style="margin-top: 5px ;">
        <div class="p-6">
            <h3 style="color: #ffffff;font-weight:500;font-size:24px;" class="mb-3">Social Media Kami</h3>
            <ul>
                <li class="text-white flex items-center ">
                    <span class="mr-[84px]">Email</span>
                    <span>email@gmail</span>
                </li>
                <li class="text-white flex items-center ">
                    <span class="mr-[50px]">Instagram</span>
                    <span>fkurniawati1321</span>
                </li>
                <li class="text-white flex items-center ">
                    <span class="mr-[53px]">Fitri Kurniawati</span>
                    <span>Email</span>
                </li>
                <li class="text-white flex items-center ">
                    <span class="mr-[50px]">Whatsapp</span>
                    <span>089694452656</span>
                </li>
                <li class="text-white flex flex-col mt-3">
                    <span class="mr-[50px]">Alamat</span>
                    <span>Sungai Kinjil,Jl.R.E.Martadinata Kec.Benua Kayong Kab.Ketapang Kalimantan Barat</span>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="max-w-[50%]">
        <div class="p-6">
            <h3 style="color: #ffffff;font-weight:500;font-size:24px">Sejarah Singkat</h3>
            <p class="text-white mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eos dolor suscipit ducimus modi ratione optio reiciendis ipsum dolorem, ex id doloribus rerum nostrum odit? Architecto doloribus sapiente asperiores vel?</p>
        </div>
    </div>
</section>
  
  

    <script src="{{ url('public') }}/assets/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
