<!-- LIST PRODUK TANPA TAILWIND -->
 <div class="ml-10 mt-20">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($data as $index => $produk)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $produk->nama }}</td>
    <td>{{ $produk->deskripsi }}</td>
    <td>{{ $produk->harga }}</td>
    <td>
    <!-- Tombol Edit -->
    <a href="{{ route('produk.edit', ['id' => $produk->id]) }}" style="display: inline-block; margin-right: 5px;">
        <button type="button">Edit</button>
    </a>

    <!-- Tombol Hapus -->
    <form action="{{ route('produk.delete', ['id' => $produk->id]) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure want to delete {{ $produk->nama }}?')">
            Delete
        </button>
    </form>
</td>
</tr>
@endforeach
        </tbody>
    </table>
</div> <div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea class="form-control" id="deskripsi" name="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" class="form-control" id="harga" name="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<!-- LIST PRODUK MENGGUNAKAN TAILWIND
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script> {{-- CDN Tailwind --}}
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="max-w-5xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Daftar Produk</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border border-gray-300 rounded-md">
                <thead class="bg-blue-100 text-gray-700 rounded-md">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama Produk</th>
                        <th class="px-4 py-2 border">Deskripsi</th>
                        <th class="px-4 py-2 border">Harga</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $produk)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border">{{ $produk->nama }}</td>
                        <td class="px-4 py-2 border">{{ $produk->deskripsi }}</td>
                        <td class="px-4 py-2 border">Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2 border whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('produk.edit', ['id' => $produk->id]) }}">
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded transition duration-200">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{ route('produk.delete', ['id' => $produk->id]) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure want to delete {{ $produk->nama }}?')"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded transition duration-200">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        -->

        <!-- Form Input Produk -->
         <!--
        <div class="mt-10">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Input Produk Baru</h2>
            <form method="POST" action="{{ route('produk.simpan') }}" class="bg-gray-50 p-6 rounded-md shadow-sm">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block mb-1 font-medium text-gray-700">Nama Produk:</label>
                    <input type="text" id="nama" name="nama" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block mb-1 font-medium text-gray-700">Deskripsi Produk:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
                </div>
                <div class="mb-6">
                    <label for="harga" class="block mb-1 font-medium text-gray-700">Harga Produk (Rp):</label>
                    <input type="number" id="harga" name="harga" required min="0"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-md transition duration-200">
                    Simpan Produk
                </button>
            </form>
        </div>
    </div>

</body>
</html>
-->