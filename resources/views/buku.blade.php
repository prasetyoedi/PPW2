@include('layout')

<h1 class="text-center m-4">Tabel Buku</h1>
<div class="container">
    <a href="{{ route('buku.create') }}">
        <button type="button" class="btn btn-primary mb-5">
            Tambah Buku Baru
        </button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ 'Rp ' . number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('buku.edit', ['id' => $buku->id]) }}">
                        <button type="button" class="btn btn-primary">
                            Edit
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('yakin mau dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah data yang Anda miliki adalah {{ count($data_buku) }} </p>
    <p>jumlah total harga semua buku adalah {{ 'Rp ' . number_format($totalharga, 2, ',', '.') }} </p>
</div>
