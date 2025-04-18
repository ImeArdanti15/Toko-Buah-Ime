<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke MeFresh</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="items-center justify-center g-lime-500">
    <div class="flex-items-center justify-center h-[500px] bg-gray-100 ">
        <div class="relative flex flex-col m-r space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold text-lime-600">Silahkan Daftar </span>
                <span class="font-light text-lime-500 mb-8">Silahkan Isi Data Diri Anda !!</span>
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1 1 0 001.414-1.414l-4.242-4.242 4.242-4.242a1 1 0 10-1.414-1.414l-4.242 4.242-4.242-4.242a1 1 0 00-1.414 1.414l4.242 4.242-4.242 4.242a1 1 0 001.414 1.414l4.242-4.242 4.242 4.242z" />
                            </svg>
                        </span>
                    </div>
                @endif
                <form action="{{ route('account.storeRegister') }}" method="post">
                    @csrf
                    <div class="py-4">
                        <span class="mb-2 text-md text-lime-600">Nama</span>
                        <input type="text"
                            class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="name" id="name" placeholder="nama">
                    </div>
                    <div class="py-4">
                        <span class="mb-2 text-md text-lime-600">Email</span>
                        <input type="text"
                            class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="email" id="email" placeholder="email">
                    </div>
                    <div class="py-4">
                        <span class="mb-2 text-md text-lime-600">Password</span>
                        <input type="password" name="password" id="pass"
                            class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500"
                            placeholder="password">
                    </div>
                    {{-- <div class="py-4">
                    <span class="mb-2 text-md text-lime-600">Nomor Telephone</span>
                    <input type="text" name="pass" id="pass"
                        class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500"
                        placeholder="nomor telephone">
                </div> --}}
                    {{-- <div class="py-4">
                    <span class="mb-2 text-md text-lime-600">Alamat</span>
                    <textarea name="alamat" id="alamat"
                        class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500"
                        placeholder="Silahkan masukkan alamat anda "></textarea>
                </div> --}}
                    {{-- <button class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2">
                        <span class="text-md text-lime-600">Ingat Aku</span>
                    </div>
                </button> --}}
                    <button
                        class="w-full bg-lime-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-lime-500 hover:border hover:border-gray-300"
                        type="submit">Daftar</button>
                </form>
                <a href="{{ route('account.login') }}" class="text-center text-lime-500">Sudah punya akun ? Login</a>
            </div>

            <div class="relative">
                <img src="{{asset('fruit10.jpeg')}}" alt=""
                    class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover">
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">Ayo ! Segera Beli Buah Kesukaan Anda !!</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
