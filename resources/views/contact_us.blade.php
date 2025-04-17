<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venus Cars | Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f2f2f2] font-sans">
    <!-- NAVBAR -->
    <nav class="bg-white shadow-md px-10 py-4 flex justify-between items-center sticky top-0 z-50">
        <!-- Logo dan Search -->
        <div class="flex items-center gap-6">
            <img src="/images/logo.png" alt="Venus Cars Logo" class="h-10">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search cars..."
                    class="pl-10 pr-4 py-2 w-64 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#bfae91] transition duration-300" />
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="flex items-center gap-8 text-gray-800 text-sm font-medium tracking-wide">
            <a href="/login" class="hover:text-[#5a4c36] transition">Home</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Shop</a>
            <a href="#" class="hover:text-[#5a4c36] transition">About</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Contact</a>

            <a href="#" class="hover:text-[#5a4c36] transition">
                <i class="fas fa-user text-lg"></i>
            </a>
            <a href="#" class="hover:text-[#5a4c36] transition">
                <i class="fas fa-heart text-lg"></i>
            </a>
        </div>
    </nav>

    <!-- Main Contains -->
    <div class="w-full">
        <!-- Hero Image -->
        <img src="{{ asset('images/hero_cars.jpg') }}" alt="Hero Cars" class="w-full object-cover">

        <!-- Contact Us Section -->
        <div class="my-24"></div>
        <div class="bg-[#f2f2f2] py-12 text-center">
            <h1 class="text-4xl font-bold text-black">Contact Us</h1>
            <p class="text-gray-600 mt-6 text-lg px-4 md:px-0 max-w-2xl mx-auto">
                "Contact us and be part of this awesome journey together."
            </p>
        </div>

        <!-- Spacer sebelum section baru -->
        <div class="my-24"></div>

        <!-- Further Assistance -->
        <div class="bg-[#f2f2f2] py-12 text-center">
            <h1 class="text-4xl font-bold text-black">Need Further Assistance?</h1>
            <p class="text-gray-600 mt-6 text-lg px-4 md:px-0 max-w-2xl mx-auto">
                Our team is ready to support you. Feel free to get in touch through the contact methods below.
            </p>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-12 px-4 md:px-24 text-left">
                <!-- Phone + Email -->
                <div class="border-r border-gray-300 pr-6 md:pr-10">
                    <h2 class="text-xl font-semibold text-black mb-3">Phone + Email</h2>
                    <p class="text-gray-700 text-base">Phone: 0813-7853-5706</p>
                    <p class="text-gray-700 text-base mt">Email: @venuscars@gmail.com</p>
                </div>

                <!-- Response Hours -->
                <div class="border-r border-gray-300 px-6 md:px-10">
                    <h2 class="text-xl font-semibold text-black mb-3">Response Hours</h2>
                    <p class="text-gray-700 text-base">
                        <span class="font-semibold underline">Normal Hours:</span><br>
                        Monday – Friday: 8:00 a.m. – 8:00 p.m.<br>
                        Saturday: 9:00 a.m. – 7:00 p.m.
                    </p>
                </div>

                <!-- Postal Mail -->
                <div class="pl-6 md:pl-10">
                    <h2 class="text-xl font-semibold text-black mb-3">Postal Mail</h2>
                    <p class="text-gray-700 text-base">
                        Venus Cars<br>
                        Jalan Ahmad Yani No. 88,<br>
                        Komp. Ruko Mitra Raya Blok B No.5,<br>
                        Batam Kota, Kepulauan Riau 29444<br>
                        Indonesia
                    </p>
                </div>
            </div>
        </div>

        <!-- Spacer sebelum section baru -->
        <div class="my-24"></div>

        <!-- Support Center Section -->
        <div class="bg-[#f2f2f2] py-12 text-center">
            <h1 class="text-4xl font-bold text-black">Toyota Brand Engagement Center</h1>

            <p class="text-[#fffff] text-xl font-semibold mt-6">
                Call 0813-7853-5706
            </p>

            <div class="mt-6 text-lg text-gray-800">
                <p class="font-semibold underline">Normal Hours:</p>
                <p>Monday – Friday: 8:00 a.m. – 8:00 p.m.</p>
                <p>Saturday: 9:00 a.m. – 7:00 p.m.</p>
            </div>

            <a href="#" class="mt-10 bg-[#bfae91] hover:bg-[#a99b7b] text-white font-semibold text-base px-6 py-3 rounded inline-block text-center">
                Contact Us
            </a>

        </div>

        <!-- FOOTER -->
        <footer class="bg-[#000000] text-white py-10 px-8 mt-12">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Info Brand -->
                <div>
                    <h3 class="text-2xl font-bold font-serif mb-2">Venus Cars</h3>
                    <p class="text-sm text-gray-300">
                        Menghadirkan mobil pilihan terbaik untuk setiap perjalanan hidup Anda.
                        Karena setiap roda punya cerita.
                    </p>
                    <p class="text-xs text-gray-400 mt-4">© 2025 Venus Cars. Drive Your Destiny.</p>
                </div>

                <!-- Link Navigasi -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Menu</h4>
                    <ul class="space-y-1 text-gray-300">
                        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="#" class="hover:underline">Layanan</a></li>
                        <li><a href="#" class="hover:underline">Showroom</a></li>
                    </ul>
                </div>

                <!-- Kontak & Sosmed -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Hubungi Kami</h4>
                    <p class="text-sm text-gray-300 mb-2">
                        Tim kami siap membantu Anda:<br>
                        <strong>0-800-14-46632</strong>
                    </p>
                    <div class="flex space-x-4 mt-3 text-xl">
                        <a href="#" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-red-500"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>

</body>

</html>