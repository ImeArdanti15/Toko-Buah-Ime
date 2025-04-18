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
  <link rel="icon" type="png" href="{{asset('logo/logotoko.png')}}">
</head>
<body class="text-lime-500 tracking-wider bg-white">
  <!-- header -->
  <header class="w-full py-8 border border-bold border-solid border-lime-500">
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
          @if (auth()->check())
          <li>
            <a href="{{route('produk')}}" class="hover:text-lime-500 transition-all duration-300">Produk</a>
          </li>
          <li>
            <a href="/wishlist" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
          </li>
          <li>
            <a href="/cart" class="hover:text-lime-500 transition-all duration-300"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          @endif
        </ul>
      </div>
      <!-- end center  -->

      <!-- right -->
      <div class="hidden md:block">
        @if (auth()->check())
            <div class="flex items-center space-x-2">
                {{-- <i class="fa-solid fa-user pr-3 mr-3 text-lg"></i> --}}
                <p class="text-lime-500 mr-4 pr-3 flex">{{ auth()->user()->name }}</p>
                <a href="{{ route('account.logout') }}">
                    <i class="fa-solid fa-right-from-bracket ml-3"></i>
                </a>
            </div>
        @else
            <a href="{{ route('account.login') }}" class="btn bg-lime-500 text-white">
                <i class="fa-solid fa-right-to-bracket"></i> Masuk
            </a>
        @endif
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
            <h1 class="font-bold text-3xl mb-4 md:mb-6 md:text-4xl md:leading-relaxed leading-snug capitalize">kami akan pastikan  Buah dan Sayur tetap segar dan terjamin kualitasnya. </h1>
            <p class="leading-relaxed mb-12 text-sm capitalize md:text-base md:pr-10">Kami menyediakan berbagai macam buah dan sayur yang segar dan terjamin kualitas dan rasanya !!</p>
            <a href="{{route('produk')}}" class="btn bg-lime-500 text-white">Pesan Sekarang ! <i class="fa-solid fa-caret-right"></i></a>
          </div>
          <!-- end kiri -->

          <!-- kanan -->
          <div class="md:w-1/2 relative">
            <div class="md:h-[340px] rounded-md overflow-hidden">
              <img src="fruit4.jpg" alt="" class="w-full h-full object-cover">
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
        <h1 class="font-bold text-2xl leading-snug mx-auto md:-3xl md:max-w-lg">Belanja buah dan sayur di Me<span class="text-lime-500">Fresh</span></h1>
      </div>
      <!-- end header  -->
    </div>

    <!-- tentang  -->
    <div class="capitalize text-center mb-15 pb-10">
    <p class="text-[13px] text-slate-700">
      Kenapa memilih MeFresh ? <br>
      Karena MeFresh menyediakan berbagai macam buah dan sayur yang segar dan terjamin kualitasnya. <br>
      Kami juga memahami kebutuhan dan pentingnya buah dan sayur bagi tubuh manusia. <br>
      Untuk mencapai kesehatan yang maksimal, maka tubuh akan memerlukan buah dan sayur. <br>
      baik untuk menjaga imunitas tubuh atau melancarkan pencernaan tubuh.
    </p>
    </div>
    <!-- end tentang  -->

    <!-- table  -->
    <div class="py-2 px-6 bg-white items-center shadow-md shadow-lime-500/50 flex">
    <table class="shadow-2xl font-[Poppins] border border-solid border-lime-300 bg-lime-600">
      <thead class="text-lime-900 border">
        <tr>
          <th class="py-3 text-slate-700">No.</th>
          <th  class="py-3 text-slate-700">Nama Buah</th>
          <th  class="py-3 text-slate-700">Mengandung</th>
          <th  class="py-3 text-slate-700">Manfaat</th>
        </tr>
      </thead>
      <tbody class="text-slate-700 text-center">
        <tr class="bg-lime-200 cursor-pointer duration-300">
          <td class="py-3 px-6">1.</td>
          <td class="py-3 px-6">Pisang</td>
          <td class="py-3 px-6">Vitamin B6, Vitamin C, dan Magnesium</td>
          <td class="py-3 px-6">Menjaga tekanan darah, menyehatkan pencernaan, mendapat energi ekstra, dll.</td>
        </tr>

        <tr class="bg-lime-200 cursor-pointer duration-300">
          <td class="py-3 px-6">2.</td>
          <td class="py-3 px-6">Apel</td>
          <td class="py-3 px-6">Vitamin C, Vitamin K, dan Pottasium</td>
          <td class="py-3 px-6">Menurunkan berat badan, menurunkan resiko penyakit diabetes, mencegah terjadinya kanker, dll.</td>
        </tr>

        <tr class="bg-lime-200 cursor-pointer duration-300">
          <td class="py-3 px-6">3.</td>
          <td class="py-3 px-6">Pear</td>
          <td class="py-3 px-6">Vitamin C dan Vitamin K</td>
          <td class="py-3 px-6">Mencegah masalah sembelit dan meningkatkan penyerapan zat besi.</td>
        </tr>
      </tbody>
    </table>
    </div>
    <!-- end table  -->
  </header>
  <!-- end main 2 -->

<p class="text-[13px] text-slate-700 text-center">Oleh karena itu, tidak perlu ragu untuk membeli buah dan sayur di MeFresh. <i class="fa-solid fa-heart"></i></p>

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
