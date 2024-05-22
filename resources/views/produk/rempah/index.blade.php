<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/output.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Merriweather&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="png" href="logotoko.png">
</head>
<body class="text-lime-500 tracking-wider bg-white">
  <!-- header -->
  <header class="w-full py-8 border border-bold border-solid border-lime-500">
    <nav class="container mx-auto px-4 flex justify-between items-center" x-data="{navbarOpen: false}">
      <!-- left -->
      <div class="md:py-5 text-3xl font-bold text-lime-500">
          <a href="" ><span class="text-red-500">Me</span>Fresh</a>
      </div>
      <!-- end left -->

      <!-- center  -->
      <div class="">
        <ul class="hidden md:flex md:space-x-6 capitalize">
          <li>
            <a href="/" class="hover:text-lime-500 transition-all duration-300">Beranda</a>
          </li>
          <li>
            <a href="{{route('tentangkami')}}" class="hover:text-lime-500 transition-all duration-300">Tentang Kami</a>
          </li>
          <li>
            <a href="{{route('produk')}}" class="hover:text-lime-500 transition-all duration-300">Produk</i></a>
          </li>
          <li>
            <a href="{{route('wishlist')}}" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
        </ul>
      </div>
      <!-- end center  -->

      <!-- right -->
      <div class="hidden md:block">
        <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-right-to-bracket"></i> Masuk</a>
      </div>
      <!-- end right -->

      <!-- mobile menu -->

      <div id="navMobile" class="hidden transition-all duration-300">
        <ul class="py-20 absolute h-[100vh] grid place-items-center inset-0 bg-slate-900 capitalize z-50">
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300">Beranda</a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300">Tentang Kami</a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300">Produk </a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300"></i> Log In</a>
          </li>
        </ul>
      </div>

      <div id="menu" class="md:hidden cursor-pointer transition-all duration-300 z-50">
        <i class="fa-solid fa-bars"></i>
      </div>
      <!-- end mobile menu -->
    </nav>

  </header>
  <!-- end header -->

  
  <!-- main 2 -->
  <main>
  <header>
    <div class="w-full py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-end mb-12">
          <!-- kiri -->
          <div class="capitalize max-w-100">
            <h4 class="text-lime-500 font-semibold mb-2">#MeFresh</h4>
            <h1 class="font-bold text-2xl leading-snug mx-auto  md:text-3xl md:max-w-lg">Produk kualitas terbaik, terbaru, dan tentunya segar ada di <span class="text-red-500">Me</span>Fresh</h1>
          </div>
        </div>
          <!-- end kiri -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</main>
  <!-- end main 2 -->

  <div class="flex items-center mb-4 order-table mx-auto px-20 justify-center">
    <a href="{{route('buah')}}" class="bg-lime-50 text-sm font-medium text-lime-600 py-2 px-4 rounded-md hover:text-gray-600 mr-2">Buah</a>
    <a href="{{route('sayur')}}" class="bg-lime-50 text-sm font-medium text-lime-600 py-2 px-4 rounded-md hover:text-gray-600 mr-2">Sayur</a>
    <a href="{{route('rempah')}}" class="bg-lime-50 text-sm font-medium text-lime-600 py-2 px-4 rounded-md hover:text-gray-600 mr-2">Rempah</a>
    
  </div>

  <!-- main buah -->
  <!-- content -->
            <!-- card -->
            <main class="container mx-auto px-4">
                <div class="grid grid-cols-3 md:grid-cols-6 gap-6">
                  <!-- card 1 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white border-[3px] border-lime-500  relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/ketumbar.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Guren Ichinose</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Ketumbar 
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 34.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="hidden md:block">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 2 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/merica.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Mikaela Hyakuya</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Merica
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 35.500,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="hidden md:block">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 5 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/kemiri.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Yuuichirou Hyakuya</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Kemiri
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 30.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="hidden md:block">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>


                  <!-- card 6 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/lengkuas.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Yuuichirou Hyakuya</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Lengkuas
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 50.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="hidden md:block">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>


                  <!-- card 7 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/jahe.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Yuuichirou Hyakuya</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Jahe
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 50.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="hidden md:block">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/kunyit.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Kunyit
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/serai.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Serai
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/vanili.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Vanili
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/kayumanis.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Kayu Manis
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/cengkeh.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Cengkeh
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/bungalawang.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Bunga Lawang
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                  <!-- card 8 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500 ">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/kluwek.jpeg"
                          alt=""
                          class="w-full h-full object-cover rounded-md"/>
                      </div>
                    </div>
                    <div class="mt-6 capitalize px-4 pb-8">
                      <div class="flex justify-between mb-3">
                        <p class="text-slate-500 text-sm">by Nova Pratiwi</p>
                        <div class="flex gap-1 items-cente">
                          <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                          <p class="text-slate-500 text-xs font-medium">
                            4.5 <span class="font-normal">penilaian</span>
                          </p>
                        </div>
                      </div>
                      <a href="" class="group">
                        <h1
                          class="font-bold mb-6 text-lg group-hover:text-lime-500 transition-all duration-300">
                          Kluwek
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 15.000,00 /kg</p>
                    </div>
                    <!-- beli  -->
                    <div class="md:block flex align-item-center justify-center">
                      <a href="" class="btn bg-lime-500 text-white"><i class="fa-solid fa-cart-shopping mr-3"></i>+</a>
                    </div>
                    <!-- end beli  -->
                  </div>

                    </div>
                  </div>
                </div>
              </div>
            </main>
              <!-- end card -->
  <!-- end main buah -->

  
  <!-- footer -->
  <footer class="pt-8 inset-x-0 bottom-0 pb-0">
    <div class="w-full h-[110px] bg-white flex items-center">
      <div class="container mx-auto flex justify-between items-center px-4 py-4">
        <!-- content  -->
        <div class="md:flex gap-3">
          <div class="flex gap-3 items-center mb-3 md:mb-0">
            <i class="fa-solid fa-location-dot"></i>
            <p class="text-xs text-slate-500">Jalan Dadi Kusmayadi, Cibinong, Bogor</p>
          </div>
          <div class="flex gap-3 items-center mb-3 md:mb-0">
            <i class="fa-solid fa-phone"></i>
            <p class="text-xs text-slate-500">+62 857 0139 5436</p>
          </div>
          <div class="flex gap-3 items-center mb-3 md:mb-0">
            <i class="fa-solid fa-envelope"></i>
            <p class="text-xs text-slate-500">mefresh1509@.gmail.com</p>
          </div>
        </div>
        <!-- end content  -->
      </div>
    </div>
  </footer>
   <!-- end footer -->

  <script src="src/main.js"></script>
</body>
</html>
