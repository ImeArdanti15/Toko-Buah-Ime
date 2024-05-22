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
  <header class="w-full py-8">
    <nav class="container mx-auto px-4 flex justify-between items-center">
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
            <a href="produk/index" class="hover:text-lime-500 transition-all duration-300">Produk</a>
          </li>
          <li>
            <a href="{{('wishlist')}}" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
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
            <a href="" class="hover:text-lime-500 transition-all duration-300">Produk</a>
          </li>
          <li>
            <a href="" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
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

  <!-- main -->
  <main class="relative">
    <section class="pt-20 pb-10">

      <!-- hijau -->
      <div class="w-60 h-60 bg-lime-400/30 blur-2xl absolute top-2 md:top-5 left-5 -z-20 rounded-full"></div>
      <div class="w-60 h-60 bg-lime-400/30 blur-2xl absolute button-0 right-0 md:top-5 -z-20 rounded-full"></div>
      <!-- end hijau -->

      <div id="main" class="container mx-auto px-4">
        <div class="md:flex w-full">

          <!-- kiri -->
          <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
            <h4 class="text-sm mb-2 capitalize font-semibold text-lime-500"># MeFresh</h4>
            <h1 class="font-bold text-3xl mb-4 md:mb-6 md:text-4xl md:leading-relaxed leading-snug capitalize">Pastikan selalu ada <span class="text-red-500">Buah</span> dan <span class="text-lime-500">Sayur</span> di meja. </h1>
            <p class="leading-relaxed mb-12 text-sm capitalize md:text-base md:pr-10">Sebagian besar buah-buahan yang sudah atau belum Anda ketahui kaya akan nutrisi dan gizi yang dibutuhkan oleh tubuh. Dari semua manfaat yang akan Anda dapatkan, meningkatkan daya ingat sekaligus melindungi sel-sel otak adalah salah satu dari dua poin yang diberikan sayur dan buah.</p>
            <a href="" class="btn bg-lime-500 text-white">Pesan Sekarang ! <i class="fa-solid fa-caret-right"></i></a>
          </div>
          <!-- end kiri -->
          
          <!-- kanan -->
          <div class="md:w-1/2 relative">
            <div class="md:h-[340px] rounded-md overflow-hidden">
              <img src="fruit2.jpeg" alt="" class="w-full h-full object-cover">
            </div>

            <!-- card -->
            <div class="absolute top-1/2 -left-5">
              <div class="max-w-44 bg-white rounded-md py-3 pl-2 pr-1 capitalize " >
                <h3 class="text-sm font-bold text-slate-950 mb-1 "><i class="fa-solid fa-quote-left"></i> <br>Jangan Malas Makan Buah dan Sayur</h3>
                <p class="text-xs text-slate-700 italic">Harta karun yang terbaik tersembunyi di dalam buah dan sayur.<i class="fa-solid fa-quote-right"></i></p>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end kanan -->
        </div>
      </div>
    </section>
  </main>
  <!-- end main -->

  <!-- main 2 -->
  <main>
  <header id="category" class="w-full py-20">
    <div class="container mx-auto px-4">
      <!-- header  -->
      <div class="capitalize text-center mb-12">
        <h4 class="text-lime-500 font-semibold mb-2"># Mulai Belanja</h4>
        <h1 class="font-bold text-2xl leading-snug mx-auto md:-3xl md:max-w-lg">Belanja buah dan sayur di Me<span class="text-lime-500">Fresh</span> </h1>

      </div>
      <!-- end header  -->

      <!-- content -->
      <div class="grid md:grid-cols-4 md:gap-6 ">
        <!-- card -->
        <div class="py-3 px-4 border border-lime-500 rounded-md mb-4 capitalize md:mb-1 md:bg-ketiga md:border-ketiga text-center hover: bg-lime-500 hover:text-slide-950 group transition-all duration-300">
          <div class="mb-1">
            <i class="fa-solid fa-lemon"></i>
          </div>
          <h2 class="font-semibold mb-2">Buah Segar</h2>
          <p class="text-sm text-slate-500 group-hover:text-slite-900">Buah-buahan segar berasal dari pertanian Indonesia maupun import.</p>
        </div>

        <div class="py-3 px-4 border border-lime-500 rounded-md mb-4 capitalize md:mb-1 md:bg-ketiga md:border-ketiga text-center hover: bg-lime-500 group transition-all duration-300">
          <div class="mb-1">
            <i class="fa-solid fa-apple-whole"></i>
          </div>
          <h2 class="font-semibold mb-2">Buah Lokal Segar</h2>
          <p class="text-sm text-slate-500 group-hover:text-slite-900">buah lokal segar yang berasal dari pertanian indonesia</p>
        </div>

        <div class="py-3 px-4 border border-lime-500 rounded-md mb-4 capitalize md:mb-1 md:bg-ketiga md:border-ketiga text-center hover: bg-lime-500 hover:text-slide-950 group transition-all duration-300">
          <div class="mb-1">
            <i class="fa-solid fa-carrot"></i>
          </div>
          <h2 class="font-semibold mb-2">Sayur Segar</h2>
          <p class="text-sm text-slate-500 group-hover:text-slite-900">sayuran segar yang berasal dari pertanian Indonesia maupun import.</p>
        </div>

        <div class="py-3 px-4 border border-lime-500 rounded-md mb-4 capitalize md:mb-1 md:bg-ketiga md:border-ketiga text-center hover: bg-lime-500 hover:text-slide-950 group transition-all duration-300">
          <div class="mb-1">
            <i class="fa-solid fa-pepper-hot"></i>
          </div>
          <h2 class="font-semibold mb-2">Rempah-rempah</h2>
          <p class="text-sm text-slate-500 group-hover:text-slite-900">rempah-rempah dari pertanian Indonesia.</p>
        </div>
        <!-- end card -->
      </div>
      <!-- end content -->
    </div>
  </header>

  <header class="w-full bg-white py-20 relative">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center md:flex-row">
        <!-- kiri -->
        <div id="joinkiri" class="capitalize mb-12 md:pl-10 md:mb-0 md:w-1/2 md:order-2">
          <h4 class="font-semibold text-lime-500 text-center mb-2 md:text-start">Gabung MeFresh</h4>
          <h1 class="font-bold text-2xl text-center leading-snug mb-8 md:text-start md:text-3xl">banyak keuntungan dari belanja sayur dan buah di Me<span class="text-lime-500">Fresh</span>.</h1>
          <div class="space-y-4 md:max-w-96 mb-12">
            <div class="flex gap-4 items-center">
              <i class="fa-solid fa-circle-check text-lime-500/80"></i>
              <p class="text-sm  leading-relaxed">diskon 50% bagi pelanggan baru.</p>
            </div>
            <div class="flex gap-4 items-center">
              <i class="fa-solid fa-circle-check text-lime-500/80"></i>
              <p class="text-sm  leading-relaxed">diskon 10% disetiap event holiday.</p>
            </div>
            <div class="flex gap-4 items-center">
              <i class="fa-solid fa-circle-check text-lime-500/80"></i>
              <p class="text-sm  leading-relaxed">buah dikemas dengan baik dan benar.</p>
            </div>
            <div class="flex gap-4 items-center">
              <i class="fa-solid fa-circle-check text-lime-500/80"></i>
              <p class="text-sm  leading-relaxed">buah segar dipilih dari pertanian.</p>
            </div>
          </div>
        </div>
        <!-- end kiri -->

        <!-- kanan -->
        <div id="joinkanan" class="nd:w-1/2 relative">
          <div class="w-full h-[280px] md:h[330px] overflow-hidden rounded-md">
            <img src="fruit3.jpeg" alt="" class="w-full h-full object-cover">
          </div>

          <!-- card buah -->
          <div class="bg-white max-w-[180px] px-3 py-4 rounded-md absolute top-6 left-5 md:top-1/2 border border-lime-500">
            <h1 class="text-slate-900 capitalize font-bold text-center mb-4 text-sm">produk terbaru</h1>
            <div class="flex gap-4 items-center py-2">
              <img width="25" src="logo/cerry-removebg-preview.png" alt="">
              <p class="font-semibold capitalize text-slate-900 text-xs">Ceri</p>
            </div>
            <div class="flex gap-4 items-center py-2">
              <img width="25" src="logo/grape-removebg-preview.png" alt="">
              <p class="font-semibold capitalize text-slate-900 text-xs">Anggur</p>
            </div>
            <div class="flex gap-4 items-center py-2">
              <img width="25" src="logo/starfruit-removebg-preview.png" alt="">
              <p class="font-semibold capitalize text-slate-900 text-xs">Belimbing</p>
            </div>
            <div class="flex gap-4 items-center py-2">
              <img width="25" src="logo/mushroom-removebg-preview.png" alt="">
              <p class="font-semibold capitalize text-slate-900 text-xs">Jamur</p>
            </div>
          </div>
          <!-- end card buah -->
        </div>
        <!-- end kanan -->
      </div>
    </div>
  </header>

  <header>
    <div class="w-full py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-end mb-12">
          <!-- kiri -->
          <div class="capitalize max-w-80">
            <h4 class="text-lime-500 font-semibold mb-2">#MeFresh</h4>
            <h1 class="font-bold text-2xl leading-snug mx-auto  md:text-3xl md:max-w-lg">Produk kualitas terbaik, terbaru, dan tentunya segar ada di Me<span class="text-lime-500">Fresh</span></h1>
          </div>
          <!-- end kiri -->

          <!-- kanan -->
          <div class=" mb-3 hidden md:block">
            <a href="" class="w-full inline-block text-center rounded-md font-semibold py-3 px-6 text-sm border border-lime-500 text-lime-500 hover:opacity-70">Lihat semua</a>
          </div>
        </div>
          <!-- end kanan -->

          <!-- content -->
            <!-- card -->
                <div class="grid grid-cols-3 md:grid-cols-3 gap-6">
                  <!-- card 1 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white border-[3px] border-lime-500  relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/apel.jpeg"
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
                          Beli Apel Merah 
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 57.000,00 /kg</p>
                    </div>
                  </div>

                  <!-- card 2 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/pear.jpeg"
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
                          Beli Pear Segar
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 55.500,00 /kg</p>
                    </div>
                  </div>

                  <!-- card 3 -->
                  <div class="bg-white rounded-md overvlow-hidden">
                    <div
                      class="bg-white relative overflow-hidden group cursor-pointer flex justify-center items-center md:h-[230px] rounded-md border-[3px] border-lime-500">
                      <div class="w-[80%] h-[180px]">
                        <img
                          src="card/pisang.jpeg"
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
                          Beli Pisang Manis
                        </h1>
                      </a>
                      <p class="font-medium text-slate-500">Rp 50.000,00 /kg</p>
                    </div>
                  </div>
                </div>
              <!-- end card --> 1.25.06

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</main>
  <!-- end main 2 -->
  
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
