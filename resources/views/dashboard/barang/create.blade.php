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
    <link rel="icon" type="png" href="{{asset('logo/logotoko.png')}}">

</head>
<body class="text-gray-800 font-inter">
    <!-- start sidebar -->
    <div class="sidebar fixed left-0 top-0 w-64 h-full bg-lime-900 p-4 overflow-x-auto">
        <a href="#" class="flex items-center pb-4 border-b border-b-white">
            <img src="{{asset('logo/logotoko.png')}}" alt="" class="w-10 h-10 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3"><span class="text-red-500">Me</span>Fresh</span>
        </a>
        <ul class="mt-4 sidebar-dropdown">
            <li class="mb-1 group">
                <a href="{{route('admin.dashboard')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-house mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <h3 class="text-sm text-slate-400 ml-4">Pengguna</h3>
            <li class="mb-1 group">
                <a href="{{route('user.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                <i class="fa-solid fa-user mr-3 text-lg"></i>
                <span class="text-sm">Pengguna</span>
                </a>
            </li>
            <h3 class="text-sm text-slate-400 ml-4">Pembelian</h3>
            <li class="mb-1 group">
                <a href="{{route('pembelian.index')}}" class="flex items-center py-2 px-4 text-white hover:bg-lime-300 rounded-md hover:text-gray-500 group-[.active]:bg-lime-600 group-[.active]:text-white">
                    <i class="fa-solid fa-basket-shopping mr-3 text-lg"></i>
                <span class="text-sm">Pembelian</span>
                </a>
            </li>
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
    <ul class="flex items-center text-sm ml-4">
    <li>
        <a href="/" class="text-lime-500 hover:text-gray-600">Create</a>
    </li>
    <li class="text-lime-600 mr-2 font-medium">/</li>
    <li class="text-lime-600 mr-2 font-medium">Menambahkan Produk</li>
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
        </div>
    </li>
    <li class="mr-3 dropdown ">
        <button type="button" class=" dropdown-toggle text-lime-600 w-8 h-8 rounded-md flex items-center justify-center hover:bg-lime-50 hover:text-gray-500">
        <i class="fa-solid fa-bell"></i>
        </button>
    </li>
    </ul>
    </div>

        <div class="pt-6 ml-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-[116rem]">
            <div class="bg-white border border-lime-100 shadow-md shadow-lime-600/100 p-6 rounded-md">
                <div class="flex justify-between mb-4 items-start">
                    <div class="dropdown">
                    <button type="button" class=" text-lime-400"><i class="ri-more-fill"></i></button>
                </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full main-w-[540px]">
                            <thead>
                                <h3 class="bg-lime-200 text-sm font-medium text-lime-600 py-2 px-4 rounded-md  active mr-2 mb-5 w-[200px]">Menambahkan Produk</h3>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">

                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form action="{{ route('barang.store') }}" id="frmProductCreate" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="product_category_id" class="form-label text-lime-700">Produk Kategori</label>
                                                        <select class="form-select text-gray-400 w-full p-2 border border-lime-500 rounded-md mb-3" id="product_category_id" name="product_category_id">
                                                            <option @if (isset($product_category_id)) selected @endif value="default">Pilih Kategori</option>
                                                            @foreach ($productCategories as $data)
                                                                <option value="{{ $data->id }}" @if (isset($product_category_id) and $data->id == $product_category_id) selected @endif>{{ $data->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="product_name" class="text-lime-700">Nama Produk</label>
                                                        <input type="text" class="form-control w-full p-2 border border-lime-500 rounded-md mb-3" id="product_name" placeholder="Enter the product name" name="product_name" value="{{ old('product_name') }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="desciption" class="form-label text-lime-700">Deskripsi</label>
                                                        <textarea class="form-control w-full p-2 border border-lime-500 rounded-md mb-2" id="desciption" rows="3" placeholder="A few things about this product" name="desciption">{{ old('desciption') }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price" class="text-lime-700">Harga</label>
                                                        <input type="number" class="form-control w-full p-2 border border-lime-500 rounded-md mb-3" id="price" placeholder="0" name="price" value="{{ old('price') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="stock_quantity" class="text-lime-700">Stok Barang</label>
                                                        <input type="number" class="form-control w-full p-2 border border-lime-500 rounded-md mb-3" id="stock_quantity" placeholder="0" name="stock_quantity" value="{{ old('stock_quantity') }}">
                                                    </div>
                                                    <div class="form-group w-full p-2 border border-lime-500 rounded-md mb-3">
                                                            <label for="image1" class="form-label text-lime-700">Foto 1</label>
                                                            <input type="file" class="form-control" id="image1" name="image1">
                                                        </div>

                                                        <div class="form-group w-full p-2 border border-lime-500 rounded-md mb-3">
                                                            <label for="image2" class="form-label text-lime-700">Foto 2</label>
                                                            <input type="file" class="form-control" id="image2" name="image2">
                                                        </div>

                                                        <div class="form-group w-full p-2 border border-lime-500 rounded-md mb-3">
                                                            <label for="image3_url" class="form-label text-lime-700">Foto 3</label>
                                                            <input type="file" class="form-control" id="image3" name="image3">
                                                        </div>

                                                        <div class="form-group w-full p-2 border border-lime-500 rounded-md mb-3">
                                                            <label for="image4_url" class="form-label text-lime-700">Foto 4</label>
                                                            <input type="file" class="form-control" id="image4" name="image4">
                                                        </div>

                                                        <div class="form-group w-full p-2 border border-lime-500 rounded-md mb-3">
                                                            <label for="image5_url" class="form-label text-lime-700">Foto 5</label>
                                                            <input type="file" class="form-control" id="image5" name="image5">
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hidden Input Fields for Status and Message -->
                                    <input type="hidden" id="sts" class="form-control" value="{{ $status ?? '' }}" />
                                    <input type="hidden" id="msg" class="form-control" value="{{ $message ?? '' }}" />

                                <div class="flex justify-end">
                                <button class="bg-red-200 text-sm font-medium text-red-600 py-2 px-4 rounded-md hover:text-white  active mr-2 mb-5 w-[100px]">Batal</button>
                                <button class="bg-lime-200 text-sm font-medium text-lime-600 py-2 px-4 rounded-md hover:text-white active mr-2 mb-5 w-[100px]" type="button" id="save">Simpan</a>
                                </div>
                            </thead>
                            <tbody>

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
    <script>
        const btnSave = document.getElementById("save")
        const form = document.getElementById("frmProductCreate")
        const productCategory = document.getElementById("product_category_id")
        const prd = document.getElementById("product_name")
        const desc = document.getElementById("desciption")
        const prc = document.getElementById("price")
        const pic = document.getElementById("image1")

        function save(){
            if(productCategory.value == "default") {
                productCategory.focus()
                swal("Incomplete data", "Please choose a the product's category", "error")
            } else if(prd.value == "") {
                prd.focus()
                swal("Incomplete data", "The product name must be filled!", "error")
            } else if(desc.value == "") {
                desc.focus()
                swal("Incomplete data", "Description must be filled!", "error")
            } else if(prc.value == "") {
                prc.focus()
                swal("Incomplete data", "Please set a price!", "error")
            } else if(pic.value == "") {
                pic.focus()
                swal("Incomplete data", "At least one picture must be filled!", "error")
            } else {
                form.submit()
            }
        }
        btnSave.onclick = function(){
            save()
        }

    </script>
    <!-- sidebar -->
    {{-- <script src="../resources/js/script.js"></script> --}}
    <!-- end script -->
</body>
</html>
