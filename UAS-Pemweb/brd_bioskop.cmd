@echo off
:: Business Requirements Document - Sistem Manajemen Reservasi Tempat Duduk di Bioskop

echo Judul Proyek: Sistem Manajemen Reservasi Tempat Duduk di Bioskop
echo.

echo 1. Latar Belakang:
echo Dalam operasional sebuah bioskop, pengelolaan jadwal penayangan film dan alokasi tempat duduk menjadi hal penting...
echo.

echo 2. Tujuan Sistem:
echo - Mempermudah admin mengelola data film dan jadwal penayangan.
echo - Menjadwalkan penayangan film secara rapi.
echo - Mengatur layout tempat duduk sesuai kapasitas studio.
echo - Menentukan status kursi berdasarkan jadwal.
echo - Mencatat dan memantau reservasi kursi.
echo - Menyediakan data laporan pemesanan.
echo.

echo 3. Ruang Lingkup Sistem:
echo - Sistem hanya untuk admin bioskop.
echo - CRUD data film.
echo - Penjadwalan film berdasarkan studio dan waktu.
echo - Pengaturan layout kursi.
echo - Update status kursi.
echo - Monitoring data reservasi.
echo - Laporan pemesanan kursi.
echo.

echo 4A. Kebutuhan Fungsional:
echo - Login admin (username dan password).
echo - CRUD data film (judul, durasi, genre, deskripsi).
echo - Penjadwalan tayang (tanggal, jam, studio).
echo - Pengaturan layout kursi (baris dan kolom).
echo - Update status kursi (tersedia/terisi).
echo.

echo 4B. Kebutuhan Non-Fungsional:
echo - Tampilan responsif (desktop dan mobile).
echo - Waktu respon maksimal 3 detik.
echo - Keamanan akses (hanya admin).
echo - UI mudah dipahami.
echo - Penyimpanan data aman.
echo - Backup otomatis dan berkala.
echo.

echo 5. Aktor Sistem:
echo - Admin: akses penuh terhadap semua fungsi sistem.
echo - Admin bertanggung jawab atas data film, jadwal, kursi, dan laporan reservasi.
echo.

echo 6. Use Case Utama:
echo - Login ke sistem.
echo - Menambah, mengedit, menghapus data film.
echo - Menambahkan dan mengelola jadwal tayang.
echo - Mengatur tempat duduk per jadwal.
echo - Melihat data reservasi pelanggan.
echo - Mencetak laporan reservasi.
echo.

echo 7. Alur Sistem:
echo - Admin login.
echo - Kelola film dan jadwal.
echo - Atur layout dan status kursi.
echo - Lihat data reservasi.
echo.

echo 8. Analisis 5W + 1H:
echo Apa     : Sistem web untuk mengelola jadwal dan kursi bioskop.
echo Mengapa : Untuk efisiensi dan akurasi.
echo Siapa   : Admin bioskop.
echo Di mana : Diakses dari komputer bioskop.
echo Kapan   : Selama operasional bioskop.
echo Bagaimana: Admin login dan kelola semua data.
echo.

echo 9. Manfaat Sistem:
echo - Pengelolaan film dan kursi jadi lebih terstruktur.
echo - Minim kesalahan manual.
echo - Efisiensi dan kecepatan meningkat.
echo - Laporan tersedia untuk evaluasi.
echo.

echo 10. Stakeholder:
echo - Admin Bioskop
echo - Manajemen Bioskop
echo - Tim Developer
echo.

echo 11. Roles dan Hak Akses:
echo - Hanya ada peran Admin.
echo - Akses penuh terhadap fitur.
echo - Login, CRUD film, jadwal, kursi, laporan.
echo.

echo 12. Kekurangan dan Tantangan:
echo - Pelanggan tidak bisa pesan langsung.
echo - Update data manual oleh admin.
echo - Admin perlu pelatihan singkat.
echo - Ketergantungan pada keakuratan input data.
echo.

echo Kesimpulan:
echo Sistem ini membantu admin bioskop dalam mengelola jadwal, film, dan kursi secara efisien.
echo Sistem ini mendukung peningkatan layanan dan pengambilan keputusan melalui laporan.
echo.

pause
