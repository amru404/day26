<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="card">
    <h1>Data Product!</h1>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">stock</th>
                    <th scope="col">harga</th>
                    <th scope="col">kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1; ?>
                @foreach ($product as $p)
                <tr>
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <th>{{$p->nama}}</th>
                    <th>{{$p->deskripsi}}</th>
                    <th>{{$p->stock}}</th>
                    <th>{{$p->harga}}</th>
                    <th>{{$p->kategori}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>
