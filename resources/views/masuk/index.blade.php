<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke MeFresh</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="items-center justify-center bg-lime-500">
    <div class="flex-items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-r space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold text-lime-600">Silahkan Masuk</span>
                <span class="font-light text-lime-400 mb-8">Silahkan Isi Akun Anda !!</span>
                <form action="{{ route('admin.auth') }}" method="post" id="form">
                    @csrf
                <div class="py-4">
                    <span class="mb-2 text-md text-lime-600">Email</span>
                    <input type="text" class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500" name="email" id="email" placeholder="email">
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md text-lime-600">Password</span>
                    <input type="password" name="password" id="pass" class="w-full p-2 border border-lime-500 rounded-md placeholder:font-light placeholder:text-gray-500" placeholder="password">
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2">
                        <span class=" text-lime-500 text-md">Ingat Aku</span>
                    </div>
                    <a href="#" class="text-lime-500 text-md">Lupa Akun ?</a>
                </div>
                <button class="w-full bg-lime-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-lime-500 hover:border hover:border-gray-300" type="submit">Masuk</button>
            </form>
                <div class="text-center text-lime-500">
                    Tidak Punya Akun?
                    <a href="{{route('daftar')}}" class="font-bold text-lime-500">Silahkan Daftar</a>
                </div>
            </div>
            <div class="relative">
                <img src="{{asset('fruit11.jpeg')}}" alt="" class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover">
                <div class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">Ayo ! Segera Beli Buah Kesukaan Anda !!</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
