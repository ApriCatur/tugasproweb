<!DOCTYPE html>
<html>
<head>
    <title>List Produk</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-3xl font-bold mb-6">
        Data Produk
    </h1>

    {{-- FORM INPUT --}}
    <form method="POST" action="{{ route('produk.simpan') }}"
          class="mb-8">

        @csrf

        <input type="text"
               name="nama"
               placeholder="Nama Produk"
               class="border p-2 w-full mb-3">

        <input type="text"
               name="deskripsi"
               placeholder="Deskripsi"
               class="border p-2 w-full mb-3">

        <input type="number"
               name="harga"
               placeholder="Harga"
               class="border p-2 w-full mb-3">

        <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">

            Simpan Produk

        </button>

    </form>

    {{-- LIST PRODUK --}}
    @foreach ($products as $product)

        <div class="border-b py-3">

            <h2 class="font-bold text-lg">
                {{ $product->nama }}
            </h2>

            <p>
                {{ $product->deskripsi }}
            </p>

            <p class="text-green-600 font-semibold">
                Rp {{ number_format($product->harga) }}
            </p>

        </div>

    @endforeach

</div>

</body>
</html>
