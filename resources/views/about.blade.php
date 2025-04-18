<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Perusahaan - PT Honda Prospect Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    html, body {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-white text-gray-900 flex flex-col min-h-screen">

  <!-- NAVBAR -->
  <nav class="bg-white shadow-md px-10 py-4 flex justify-between items-center sticky top-0 z-50">
   <!-- Logo dan Search -->
   <div class="flex items-center gap-6">
    <img src="/images/logo.png" alt="Venus Cars Logo" class="h-10">
    <div class="relative">
        <input 
            type="text" 
            placeholder="Search cars..." 
            class="pl-10 pr-4 py-2 w-64 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#bfae91] transition duration-300"
        />
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

  <!-- Header -->
  <div class="w-full">
    <img src="navbar.jpg" alt="PT Honda Prospect Motor" class="w-full h-auto object-cover" />
  </div>
  <header class="py-24 px-6 bg-gradient-to-r from-white via-white to-rose-100 text-center" data-aos="fade-down">
    <div class="max-w-3xl mx-auto" data-aos="zoom-in" data-aos-delay="200">
      <h1 class="text-4xl md:text-5xl font-semibold mb-6">PT Honda Prospect Motor</h1>
      <p class="text-lg md:text-xl leading-relaxed">
        Agen Tunggal Pemegang Merek (ATPM) Honda di Indonesia, hadir sejak 1999 membawa inovasi dan kualitas terbaik.
      </p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-1">

    <!-- Prinsip Perusahaan -->
    <section class="py-20 px-6 flex flex-wrap gap-12 items-center justify-center max-w-6xl mx-auto">
      <div class="flex-1 max-w-xl" data-aos="fade-right">
        <h2 class="text-3xl font-semibold border-2 border-black inline-block px-6 py-2 rounded-full">Prinsip Perusahaan</h2>
        <p class="mt-6 text-lg leading-relaxed">
          Menyediakan produk berkualitas tinggi dengan harga terjangkau untuk pelanggan global dengan semangat inovasi.
        </p>
      </div>
      <div class="flex-1 max-w-md" data-aos="fade-left">
        <img src="prinsip.jpg" alt="Gedung Honda" class="rounded-xl shadow-md w-full" />
      </div>
    </section>

    <!-- VISI MANAJEMEN -->
<section class="py-20 px-6 flex flex-wrap gap-12 items-center justify-center max-w-6xl mx-auto">
  <div class="flex-1 max-w-xl" data-aos="fade-right">
    <h2 class="text-3xl font-semibold border-2 border-black inline-block px-6 py-2 rounded-full">Visi Manajemen</h2>
    <p class="mt-6 text-lg leading-relaxed">
      Berupaya menjadi perusahaan yang berorientasi pada pelanggan dan membangun kualitas yang tinggi dari perusahaan dan produknya.
    </p>
    <p class="mt-4 text-lg leading-relaxed">
      Mewujudkan kemitraan yang senantiasa mengupayakan keselarasan alur kerja dan berkontribusi terhadap perkembangan industri otomotif Indonesia.
    </p>
    <p class="mt-4 text-lg leading-relaxed">
      Memastikan setiap karyawan bangga bekerja di PT Honda Prospect Motor dengan menghormati setiap individu.
    </p>
  </div>
  <div class="flex-1 max-w-md" data-aos="fade-left">
    <img src="about-2.png" alt="Tim kerja Honda menyatukan tangan" class="rounded-xl shadow-md w-full" />
  </div>
</section>


    <!-- BRANDING -->
    <section class="py-20 px-6 bg-white" data-aos="fade-up">
      <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-center items-center md:gap-10 gap-6">
        
        <!-- Kiri -->
        <div class="text-center md:text-right md:w-1/2 space-y-2">
          <div class="text-4xl font-bold text-[#5a4c36]">Venus Car</div>
          <div class="text-lg font-medium tracking-wide text-gray-600">The Power of Dreams</div>
        </div>
    
        <!-- Kanan -->
        <div class="text-center md:text-left md:w-1/2 space-y-2">
          <h1 class="text-3xl md:text-4xl font-bold text-black">How we move you.</h1>
          <div class="text-base font-semibold tracking-wider text-[#5a4c36]">CREATE ▸ TRANSCEND, AUGMENT</div>
        </div>
    
      </div>
    </section>

<!-- DREAMS CHAIN -->
<section class="py-16 bg-white" data-aos="fade-up">
  <div class="flex flex-wrap justify-center items-start gap-10 px-4 max-w-6xl mx-auto">
    
    <!-- DREAMS -->
    <div class="w-48 text-center" data-aos="fade-up" data-aos-delay="100">
      <h2 class="text-3xl font-semibold">Dreams</h2>
      <p class="mt-1 text-sm text-gray-700">Setiap mimpi individu.</p>
    </div>

    <!-- CREATE -->
    <div class="w-48 text-center" data-aos="fade-up" data-aos-delay="200">
      <h2 class="text-3xl font-semibold">CREATE</h2>
      <p class="mt-1 text-sm text-gray-700">Mengubah kreativitas menjadi inovasi untuk mewujudkan mimpi.</p>
    </div>

    <!-- Panah -->
    <div class="flex items-center justify-center w-10 pt-5" data-aos="fade-up" data-aos-delay="250">
      <span class="text-xl font-bold text-black">▸</span>
    </div>

    <!-- TRANSCEND -->
    <div class="w-48 text-center" data-aos="fade-up" data-aos-delay="300">
      <h2 class="text-3xl font-semibold">TRANSCEND</h2>
      <p class="mt-1 text-sm text-gray-700">Melampaui berbagai keterbatasan waktu dan tempat.</p>
    </div>

    <!-- AUGMENT -->
    <div class="w-48 text-center" data-aos="fade-up" data-aos-delay="400">
      <h2 class="text-3xl font-semibold">AUGMENT</h2>
      <p class="mt-1 text-sm text-gray-700">Meningkatkan kemampuan dan potensi manusia.</p>
    </div>

  </div>
  <section class="max-w-4xl mx-auto px-4 py-8 relative">
    <div class="relative overflow-hidden rounded-3xl shadow-lg group">
      <img src="created.png" alt="Honda Design" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" />
  
      <span class="absolute top-4 left-4 bg-white/90 text-[#1a1a1a] text-2xl font-extrabold px-6 py-3 rounded-full shadow-lg tracking-widest
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700">
        CREATE
      </span>
  
      <p class="absolute bottom-4 right-4 bg-white/90 text-black text-lg px-4 py-2 rounded-lg shadow-md max-w-md text-right leading-snug
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 delay-200">
        Honda terus berinovasi tanpa batas, menciptakan solusi yang menginspirasi masa depan mobilitas.
      </p>
    </div>
  </section>
  
  <section class="max-w-4xl mx-auto px-4 py-8 relative">
    <div class="relative overflow-hidden rounded-3xl shadow-lg group">
      <img src="transced.jpg" alt="Honda Design" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" />
  
      <span class="absolute top-4 left-4 bg-white/90 text-[#1a1a1a] text-2xl font-extrabold px-6 py-3 rounded-full shadow-lg tracking-widest
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700">
        TRANSCED
      </span>
  
      <p class="absolute bottom-4 right-4 bg-white/90 text-black text-lg px-4 py-2 rounded-lg shadow-md max-w-md text-right leading-snug
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 delay-200">
        Melampaui batas, menjelajah lebih jauh karena setiap perjalanan adalah awal dari kemungkinan baru.
      </p>
    </div>
  </section>
  
  <section class="max-w-4xl mx-auto px-4 py-8 relative">
    <div class="relative overflow-hidden rounded-3xl shadow-lg group">
      <img src="augment.jpg" alt="Honda Design" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" />
  
      <span class="absolute top-4 left-4 bg-white/90 text-[#1a1a1a] text-2xl font-extrabold px-6 py-3 rounded-full shadow-lg tracking-widest
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700">
        AUGMENT
      </span>
  
      <p class="absolute bottom-4 right-4 bg-white/90 text-black text-lg px-4 py-2 rounded-lg shadow-md max-w-md text-right leading-snug
      opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 delay-200">
        Mengembangkan visi menjadi kenyataan, membawa teknologi menuju mimpi yang semakin nyata.
      </p>
    </div>
  </section>
  
  

<!-- FOOTER -->
<footer class="bg-black text-white py-10 px-8 mt-12" data-aos="fade-up" style="background-color: #000;">
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


  <!-- AOS Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
  duration: 1000,
  once: false 
});

  </script>
</body>
</html>
