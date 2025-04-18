<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Merriweather&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
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
                        <a href="/" class="hover:text-lime-500 transition-all duration-300">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentangkami') }}"
                            class="hover:text-lime-500 transition-all duration-300">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}"
                            class="hover:text-lime-500 transition-all duration-300">Produk</a>
                    </li>
                    <li>
                        <a href="/wishlist" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
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
                        <a href="/" class="hover:text-lime-500 transition-all duration-300">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentangkami') }}"
                            class="hover:text-lime-500 transition-all duration-300">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}"
                            class="hover:text-lime-500 transition-all duration-300">Produk</a>
                    </li>
                    <li>
                        <a href="/wishlist" class="hover:text-lime-500 transition-all duration-300">Wishlist</a>
                    </li>
                    <li>
                        <a href="{{ route('account.login') }}"
                            class="hover:text-lime-500 transition-all duration-300">Masuk</a>
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


    <section class="cart-section section-b-space">
        <div class="container justify-content-center align-center">
            @if ($cartItems->count() > 0)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <form action="" method="post" class="text-center mb-3">
                            <table class="min-w-full bg-white border">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b">Product</th>
                                        <th class="py-2 px-4 border-b">Price</th>
                                        <th class="py-2 px-4 border-b">Quantity</th>
                                        <th class="py-2 px-4 border-b">Total</th>
                                        <th class="py-2 px-4 border-b">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b">
                                                <a
                                                    href="{{ route('produk-detail', $item->id) }}">{{ $item->name }}</a>
                                            </td>
                                            <td class="py-2 px-4 border-b">
                                                <h2>Rp.{{ $item->price }}</h2>
                                            </td>
                                            <td class="py-2 px-4 border-b">
                                                <input type="number" name="quantity" data-rowid="{{ $item->rowId }}"
                                                    class="form-control input-number w-16 text-center"
                                                    value="{{ $item->qty }}"
                                                    onchange="updateCartItemQuantity('{{ $item->rowId }}', this.value)">
                                            </td>
                                            <td class="py-2 px-4 border-b">
                                                <h2 class="td-color" id="subtotal_{{ $item->rowId }}">
                                                    Rp.{{ $item->subtotal() }}</h2>
                                            </td>
                                            <td class="py-2 px-4 border-b">
                                                <form id="removeForm_{{ $item->rowId }}"
                                                    action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                                    <button type="submit" class="focus:outline-none">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        <div class="mt-10 mb-10 text-center">
                            <a href="{{ route('checkout') }}" class="btn bg-lime-500 text-white">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <h2>Keranjang Kamu Kosong</h2>
                        <h5 class="mt-3 mb-3">Ayo! Tambahkan Produk ke Keranjang</h5>
                        <a href="{{ route('produk.index') }}" class="btn btn-warning mt-5">Beli</a>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- JavaScript Section -->
    <script>
        function removeItemFromCart(rowId) {
            let formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('rowId', rowId);

            fetch('{{ route('cart.remove') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Failed to remove item from cart.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to remove item from cart. Please try again later.');
                });
        }

        function updateCartItemQuantity(rowId, newQuantity) {
            let formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('rowId', rowId);
            formData.append('quantity', newQuantity);

            fetch('{{ route('cart.update') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update the subtotal and total in the DOM
                        document.querySelector(`#subtotal_${rowId}`).innerText = `Rp.${data.subtotal}`;
                        document.querySelector('#total').innerText = `Rp.${data.total}`;
                    } else {
                        alert('Failed to update item quantity: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to update item quantity. Please try again later.');
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
                        <p class="text-xs text-slate-500">mefresh1509@gmail.com</p>
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
