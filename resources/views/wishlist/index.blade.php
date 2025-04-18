<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Merriweather&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="png" href="{{ asset('logo/logotoko.png') }}">
</head>

<body class="text-lime-500 tracking-wider bg-white">
    <!-- header -->
    <header class="w-full py-8">
        <nav class="container mx-auto px-4 flex justify-between items-center">
            <!-- left -->
            <div class="md:py-5 text-3xl font-bold text-lime-500">
                <a href=""><span class="text-red-500">Me</span>Fresh</a>
            </div>
            <!-- end left -->

            <!-- center  -->
            <div class="">
                <ul class="hidden md:flex md:space-x-6 capitalize">
                    <li>
                        <a href="{{ route('welcome') }}" class="hover:text-lime-500 transition-all duration-300">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentangkami') }}"
                            class="hover:text-lime-500 transition-all duration-300">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('produk.index') }}"
                            class="hover:text-lime-500 transition-all duration-300">Produk</a>
                    </li>
                    <li>
                        <a href="/wishlist"
                            class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
                    </li>
                    <li>
                        <a href="/cart" class="hover:text-lime-500 transition-all duration-300"><i
                                class="fa-solid fa-cart-shopping"></i></a>
                    </li>
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

    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="wish-list-section section-b-space">
        <div class="container">
            @if ($items->count() > 0)
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table cart-table wishlist-table">
                            <thead>
                                <tr class="table-head">
                                    <th scope="col">image</th>
                                    <th scope="col">product name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">availability</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>
                                            <a href="{{ route('produkdetail.index', ['slug' => $item->model->slug]) }}">
                                                <img src="{{ asset('assets/images/fashion/product/front') }}/{{ $item->model->image }}"
                                                    class=" blur-up lazyload" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('produkdetail.index', ['slug' => $item->model->slug]) }}"
                                                class="font-light">{{ $item->model->name }}</a>
                                            <div class="mobile-cart-content row">
                                                <div class="col">
                                                    <p>In Stock</p>
                                                </div>
                                                <div class="col">
                                                    <p class="fw-bold">${{ $item->model->regular_price }}</p>
                                                </div>
                                                <div class="col">
                                                    <h2 class="td-color">
                                                        <a href="javascript:void(0)" class="icon">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </h2>
                                                    <h2 class="td-color">
                                                        <a href="cart.php" class="icon">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-bold">${{ $item->model->regular_price }}</p>
                                        </td>
                                        <td>
                                            @if ($item->model->stock_status == 'instock')
                                                <p>In Stock</p>
                                            @else
                                                <p>Stock Out</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->model->stock_status == 'instock')
                                                <a href="javascript:void(0)" class="icon">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            @else
                                                <a href="javascript:void(0)" class="icon disabled">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            @endif
                                            <a href="javascript:void(0)" class="icon">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-end">
                        <a href="javascript:void(0)">Clear All Items</a>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Wishlist Kamu Kosong</h2>
                        <h5 class="mt-3 mb-3">Ayo ! Tambahkan Produk Favoritmu.</h5>
                        <a href="{{ route('produk.index') }}" class="btn btn-warning mt-5">Beli</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Cart Section End -->

<script>
    function addProductToWishlist(id, name, quantity, price) {
        $.ajax({
            type: "POST",
            url: "{{ route('wishlist.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                quantity: quantity,
                price: price
            },
            success: function(data) {
                if (data.status == 200) {
                    $.notify({
                        icon: 'fa fa-check',
                        title: 'Success',
                        message: "Item Successsfully added to wishlist",
                    });
                }
            }
        });
    }
</script>

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
