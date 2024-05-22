<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="resources/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="png" href="logo/logotoko.png">

</head>
<body class="text-gray-800 font-inter">
    <!-- start sidebar -->
    <div class="sidebar fixed left-0 top-0 w-64 h-full bg-lime-900 p-4 overflow-x-auto">
        <a href="#" class="flex items-center pb-4 border-b border-b-white">
            <img src="logo/logotoko.png" alt="" class="w-10 h-10 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3"><span class="text-red-500">Me</span>Fresh</span>
        </a>
        <ul class="mt-4 sidebar-dropdown">
            <li class="mb-1 group">
                <a href="{{route('dashboard')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-house mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <h3 class="text-sm text-slate-400 ml-4">Pengguna</h3>
            </li>
            <li class="mb-1 group">
                <a href="{{route('user.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-user-tie  mr-3 text-lg"></i>
                <span class="text-sm">Pengguna</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('pelanggan.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-user  mr-3 text-lg"></i>
                <span class="text-sm">Pelanggan</span>
                </a>
            </li>
            <h3 class="text-sm text-slate-400 ml-4">Pembelian</h3>
            <li class="mb-1 group">
                <a href="{{route('pesanan.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-store mr-3 text-lg"></i>
                <span class="text-sm">Pesanan</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('detailpesanan.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-list-check mr-3 text-lg"></i>
                <span class="text-sm">Detail Pesanan</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('pengiriman.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-truck mr-3 text-lg"></i>
                <span class="text-sm">Pengiriman</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('pembayaran.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-money-bill mr-3 text-lg"></i>
                <span class="text-sm">Pembayaran</span>
                </a>
            </li>
            <h3 class="text-sm text-slate-400 ml-4">Produk</h3>
            <li class="mb-1 group">
                <a href="{{route('barang.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-box mr-3 text-lg"></i>
                <span class="text-sm">Produk</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('kategoriproduk.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-boxes-stacked mr-3 text-lg"></i>
                <span class="text-sm">Kategori Produk</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('penilaianproduk.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-pencil mr-3 text-lg"></i>
                <span class="text-sm">Penilaian Produk</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('diskon.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-tag mr-3 text-lg"></i>
                <span class="text-sm">Diskon</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('kategoridiskon.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-tags mr-3 text-lg"></i>
                <span class="text-sm">Kategori Diskon</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->

    <!-- start main -->
    <main class="w-[calc(100%-256px)] ml-64 bg-lime-100 min-h-screen top-0 pt-0 mt-0">
    <div class="py-2 px-6 bg-white items-center shadow-md shadow-lime-500/50 flex">
    <button type="button" class="text-lg text-lime-700">
    </button>
    <ul class="flex items-center text-sm ml-4">
    <li>
        <a href="/" class="text-lime-500 hover:text-gray-600">Dashboard</a>
    </li>
    <li class="text-lime-600 mr-2 font-medium">/</li>
    <li class="text-lime-600 mr-2 font-medium">Kategori Diskon</li>
    </ul>
    <ul class="ml-auto flex items-center">
    <li class="mr-1 dropdown">
        <button type="button" class="dropdown-toggle text-lime-600 w-8 h-8 rounded-md flex items-center justify-center hover:bg-lime-50 hover:text-gray-500">
        <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <div class="dropdown-menu hidden max-w-xs w-full bg-white rounded-md border-lime-300">
            <div class="flex items-center px-4 pt-4 border-b border-b-lime-100">
                <button type="button" class="text-lime-400 font-medium text-[13px] hover:text-lime-600 border-b-transparent pb-1 mr-4 active">Notifikasi</button>
                <button type="button" class="text-lime-400 font-medium text-[13px] hover:text-lime-600 border-b-transparent pb-1 mr-4">Pesan</button>
            </div>
            <form action="" class="p-4">
                <div class="relative w-full">
                <input type="text" class="py-2 pr-4 pl-10 bg-lime-50 w-full outline-none border border-lime-100 rounded-md text-sm focus:border-lime-500" placeholder="Cari ...">
                <i class="fa-solid fa-magnifying-glass absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                </div>
            </form>
            <div class="mt-3 mb-2">
                <div class="text-[13px] font-medium text-gray-40 ml-4 mb-2">Pencarian</div>
                <ul class="max-h-64 overflow-y-auto">
                    <li>
                        <a href="" class="py-2 px-4 flex items-center hover:bg-lime-50 group">
                        <img src="profile1.jpg" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </li>
    <li class="mr-3 dropdown ">
        <button type="button" class=" dropdown-toggle text-lime-600 w-8 h-8 rounded-md flex items-center justify-center hover:bg-lime-50 hover:text-gray-500">
        <i class="fa-solid fa-bell"></i>
        </button>
    </li>
    <li>
        <button type="button">
            <img src="profile1.jpg" alt="" class="w-8 h-8 rounded block object-cover align-middle">
        </button>
    </li>
    </ul>
    </div>

        <div class="pt-6 ml-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-[116rem]">
            <div class="bg-white border border-lime-100 shadow-md shadow-lime-600/100 p-6 rounded-md">
                <div class="flex justify-between mb-4 items-start">
                    <div class="">
                </div>
                    </div>
                    <div class="">
                        <table class="w-full  main-w-[540px]">
                            <thead>
                                <tr>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-lime-600 py-2 px-4 bg-lime-50 rounded-md">No.</th>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-lime-600 py-2 px-4 bg-lime-50 rounded-md">Nama Kategori Diskon</th>
                                    <th class="text-[12px] uppercase tracking-wide font-medium text-lime-600 py-2 px-4 bg-lime-50 rounded-md">Aksi</th>
                                </tr>
                            </thead>
                            <div class="flex items-center mb-5 order-tab">
                                <a href="{{route ('kategoridiskon.create')}}" class="bg-lime-200 text-sm font-medium text-lime-600 py-2 px-4 rounded-md  active mr-2 hover:text-white"><i class="fa-solid fa-plus"></i> Tambah Kategori Diskon</a>
                            </div>
                            <tbody>
                                @foreach ($kategoridiskon as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $data->category_discount__id }}
                                    </td>
                                    <td>
                                        {{ $data->product_id }}
                                    </td>
                                    <td>
                                        {{ $data->start_date }}
                                    </td>
                                    <td>
                                        {{ $data->end_date }}
                                    </td>
                                    <td>
                                        {{ $data->status }}
                                    </td>
                                    <td>
                                        {{ $data->aktif }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </main>
    <!-- end main -->




    <!-- script -->
    <!-- sidebar -->
    <script src="../resources/js/script.js"></script>
    <!-- end script -->
</body>
</html>
