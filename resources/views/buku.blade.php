<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center m-4">Tabel Buku</h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.' )}}</td>
                    <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('Y-m-d') }}</td>
                    <td>
                        <a href="/buku/edit/{{ $buku->id }}">
                            <button type="button" class="btn btn-primary">
                                Edit
                            </button>
                        </a>

                        <a href="/buku/hapus/{{ $buku->id }}">
                            <button type="button" class="btn btn-danger">
                                Hapus
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p>Jumlah data yang Anda miliki adalah {{ count($data_buku) }} </p>

        <p>jumlah total harga semua buku adalah {{"Rp " .number_format($totalharga, 2, ',', '.' )}} </p>
    </div>
</body>

</html>
