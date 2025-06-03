<!-- EDIT PRODUK TANPA TAILWIND -->
<h1>Edit Produk</h1>

<form method="POST" action="{{ route('produk.update', ['id' => $produk->id]) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama" value="{{ $produk->nama }}"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td><textarea name="deskripsi">{{ $produk->deskripsi }}</textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" name="harga" value="{{ $produk->harga }}"></td>
        </tr>
    </table>
    <button type="submit">Simpan Perubahan</button>
</form>
<!-- EDIT PRODUK MENGGUNAKAN TAILWIND 

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    
    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Edit Produk</h1>

        <form action="{{ route('produk.update', ['id' => $produk->id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nama" class="block font-semibold text-gray-700">Nama Produk</label>
                <input type="text" name="nama" id="nama" value="{{ $produk->nama }}" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="deskripsi" class="block font-semibold text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $produk->deskripsi }}</textarea>
            </div>

            <div>
                <label for="harga" class="block font-semibold text-gray-700">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ url('/listproduk') }}" class="text-gray-600 hover:underline">← Kembali</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md">Simpan Perubahan</button>
            </div>
        </form>
    </div>

</body>
</html>
-->