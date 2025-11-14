<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dino_rent.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="/images/logo.png" alt="Dino Rent Logo">
            <span>Admin Dashboard</span>
        </div>
        <nav class="menu">
            <a href="#">Beranda</a>
            <a href="/kelola-produk">Kelola Produk</a>
            <a href="#">Laporan</a>
            <a href="#">Pengaturan</a>
        </nav>
        <div class="actions">
            <button class="logout-btn" onclick="window.location.href='/logout'">Keluar</button>
        </div>
    </header>
    <main class="admin-content">
        <h1>Selamat Datang, Admin</h1>
        <p>Kelola semua data dan laporan dengan mudah.</p>
        <div class="admin-sections">
            <div class="section">
                <h2>Kelola Produk</h2>
                <p>Tambah, edit, atau hapus produk yang tersedia.</p>
            </div>
            <div class="section">
                <h2>Laporan</h2>
                <p>Lihat laporan pemesanan dan aktivitas pengguna.</p>
            </div>
            <div class="section">
                <h2>Pengaturan</h2>
                <p>Atur preferensi dan konfigurasi sistem.</p>
            </div>
        </div>
    </main>
</body>
</html>