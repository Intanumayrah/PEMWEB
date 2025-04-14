## Tugas Wajib Pemrograman Website

### 1. Analisis (5W + 1H) dan SWOT
Analisis dilakukan untuk memahami kebutuhan pengembangan web dengan pendekatan **5W + 1H** dan **SWOT**.

### 2. Catatan dan Ngoding
Membuat kode HTML dasar yang mencakup:
- **index.html** (halaman utama)
- Tag dasar: `<a>`, `<div>`, `<form>`, `<h1-h6>`, `<img>`, `<p>`, `<ul>`, `<li>`

### 3. Proyek Portofolio
- Sebelum UTS: **Website dengan Dashboard** (berbeda kasus dan fitur)
- Sebelum UAS: **Company Profile** (berbeda kasus)

## Pembahasan Pertama

### 1. Apa itu HTML dan Website?

#### a. HTML
HTML (HyperText Markup Language) adalah bahasa dasar yang digunakan untuk membuat dan menyusun halaman website. HTML berfungsi sebagai "kerangka" website yang menentukan elemen-elemen seperti teks, gambar, tabel, link, dan lainnya agar bisa ditampilkan di browser.

Contoh penggunaan **image tag**:
```html
<img src="profile.jpg" alt="Foto Profil">
```

#### b. Pemrograman Website
Proses membuat dan mengembangkan sebuah website agar bisa berfungsi sesuai kebutuhan. HTML hanyalah salah satu bagian dari pemrograman web. Untuk membuat website lebih menarik dan interaktif, diperlukan CSS dan JavaScript.

#### c. Ubuntu
Ubuntu adalah sistem operasi berbasis Linux yang stabil, aman, dan sering digunakan untuk pengembangan serta pengelolaan server web.

#### d. Docker
Docker adalah platform yang memungkinkan pembuatan, pengemasan, dan menjalankan aplikasi dalam container, memastikan lingkungan yang konsisten di berbagai sistem.

### 2. Membuat Codingan HTML
Contoh kode **index.html**:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang di Website Saya</h1>
    <p>Ini adalah contoh halaman HTML sederhana.</p>
    <ul>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
    </ul>
</body>
</html>
```

### 3. Langkah-langkah Menampilkan Website di Localhost
1. Simpan file **index.html** di dalam folder proyek.
2. Jika menggunakan **XAMPP**, jalankan Apache:
   - Buka XAMPP Control Panel → Start Apache
   - Simpan file di `htdocs`
   - Akses di browser: `http://localhost/index.html`
3. Jika menggunakan **Live Server di VS Code**:
   - Instal ekstensi **Live Server**
   - Klik kanan file `index.html` → Pilih **Open with Live Server**

### 4. Cara Menghidupkan Docker
1. **Instal Docker**
   - Download dan instal Docker dari [docker.com](https://www.docker.com/)
   - Jalankan perintah berikut untuk memeriksa instalasi:
     ```sh
     docker --version
     ```

2. **Menjalankan Container**
   - Contoh menjalankan server Nginx dalam Docker:
     ```sh
     docker run -d -p 8080:80 nginx
     ```
   - Akses di browser: `http://localhost:8080`

Dengan mengikuti langkah-langkah ini, Anda dapat memahami dasar pemrograman web serta bagaimana mengelola lingkungan pengembangan menggunakan Docker dan Ubuntu. 🚀
