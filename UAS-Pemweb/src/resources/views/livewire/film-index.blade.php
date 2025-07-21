<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Manajemen Data Film</h2>
        <a href="#" class="btn btn-primary">+ Tambah Film</a>
    </div>

    {{-- Info --}}
    <div class="alert alert-info">
        Di halaman ini, admin dapat melihat daftar film yang tersedia, serta melakukan pengelolaan seperti menambah, mengedit, atau menghapus film.
    </div>

    {{-- Tabel Film --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Judul Film</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Data dummy sementara --}}
            <tr>
                <td>1</td>
                <td>Spider-Man: No Way Home</td>
                <td>Aksi, Petualangan</td>
                <td>2 jam 28 menit</td>
                <td>Peter Parker menghadapi tantangan multiverse.</td>
                <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Elemental</td>
                <td>Animasi, Fantasi</td>
                <td>1 jam 49 menit</td>
                <td>Kisah api dan air yang bertemu di kota elemen.</td>
                <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
