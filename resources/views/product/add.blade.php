<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="card">
    <h1>Data Product!</h1>
    <div class="container">
    <h1>Buat Pesanan Baru</h1>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <!-- Nomor Order -->
        <div class="form-group">
            <label for="nama">Nama Product</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">deskripsi Product</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
        </div>

        <!-- User ID -->
        <div class="form-group">
            <label for="harga">Harga Product</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>

        <!-- Tanggal Order -->
        <div class="form-group">
            <label for="stock">stock Order</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>

        <!-- Alamat Pengiriman -->
        <div class="form-group">
            <label for="*">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" required>
        </div>

        <hr>

        <button type="submit" class="btn btn-primary">Simpan Order</button>
    </form>
</div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>
</html>
