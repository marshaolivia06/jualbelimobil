<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- Custom CSS (opsional jika kamu punya tambahan sendiri) -->
    <!-- link rel="stylesheet" href="{{ asset('styles/styles06.css') }}"> -->
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-gray-50 border-4 border-violet-400 p-10 rounded-xl w-full max-w-md text-center shadow-md">
        <div class="flex items-center justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Venus Cars" class="w-12 h-12 mr-2">
            <h1 class="text-3xl font-bold teks-black">Login</h1>
        </div>

        <form>
            <div class="mb-4">
                <input type="text" placeholder="Username :" class="w-full px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-violet-400">
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password :" class="w-full px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-violet-400">
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded-full hover:bg-gray-800 transition duration-200">
                Login
            </button>
        </form>

        <div class="mt-6 text-sm text-gray-500">
            <p>Don’t have an account? <a href="#" class="text-yellow-600 hover:underline">Sign Up</a></p>
            <p class="mt-2">Or</p>
            <p><a href="#" class="text-yellow-600 hover:underline">Lost password?</a></p>
        </div>
    </div>

</body>
</html>
