<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dino Rent</title>
    <link rel="stylesheet" href="{{ asset('css/dino_rent.css') }}">
</head>

<body></body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">
            <img src="/images/logo.png" alt="Dino Rent Logo">
            <span>Dino Rent</span>
        </div>

        <nav class="menu">
            <a href="#">Beranda</a>
            <a href="#tentang-kami">Tentang Kami</a>
            <a href="#mobil">Mobil</a>
            <a href="#">Artikel</a>
        </nav>

        <div class="actions">
            <a href="#" class="icon">📞</a>
            <a href="https://wa.me/+62 857-1848-2554" class="icon" target="_blank">👤</a>
            <button class="login-btn" onclick="window.location.href='/login'">Masuk</button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <main class="hero">
        <div class="hero-content">
            <h1>Sewa Mobil Impian Anda<br>dengan Mudah</h1>
            <p>Pilihan terbaik untuk perjalanan Anda. Harga terjangkau, layanan terpercaya.</p>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/car-removebg-preview.png') }}" alt="Mobil" width="430">
        </div>
    </main>

    <!-- TENTANG KAMI -->
    <section id="tentang-kami" class="tentang-kami">
        <div class="tentang-kami-content">
            <h2>Tentang Kami</h2>

            <p>Selamat datang di Dino Rent — solusi terbaik untuk kebutuhan transportasi Anda! Kami adalah perusahaan rental mobil yang berdedikasi untuk memberikan pelayanan terbaik, kendaraan berkualitas, dan pengalaman berkendara yang nyaman bagi setiap pelanggan.</p>

            <p>Didirikan dengan semangat untuk menghadirkan kemudahan dalam perjalanan, kami menyediakan berbagai pilihan mobil — mulai dari kendaraan keluarga yang luas hingga mobil mewah untuk acara spesial.</p>

            <p>Semua armada kami selalu dalam kondisi prima, bersih, dan terawat, siap menemani perjalanan Anda ke mana pun tujuan Anda.</p>

            <p>Kami percaya bahwa perjalanan yang menyenangkan dimulai dari pelayanan yang tulus. Karena itu, tim kami selalu siap membantu dengan pelayanan cepat, ramah, dan profesional, baik untuk pemesanan harian, mingguan, maupun bulanan.</p>
        </div>
    </section>

    <!-- MENGAPA MEMILIH KAMI -->
    <section id="mengapa-memilih-kami" class="mengapa-memilih-kami">
        <div class="mengapa-memilih-kami-content">
            <h2>Mengapa Memilih Kami?</h2>
            <p>Layanan terbaik untuk pengalaman rental mobil Anda</p>
            <div class="features">
                <div class="feature">
                    <img src="/images/pilihan kami.png" alt="Pilihan Lengkap">
                    <h3>Pilihan Lengkap</h3>
                    <p>Ratusan mobil dari berbagai merek dan tipe untuk memenuhi kebutuhan Anda</p>
                </div>
                <div class="feature">
                    <img src="/images/asuransi terjamin.png" alt="Asuransi Terjamin">
                    <h3>Asuransi Terjamin</h3>
                    <p>Semua mobil dilengkapi dengan asuransi komprehensif untuk keamanan Anda</p>
                </div>
                <div class="feature">
                    <img src="/images/tersedia.png" alt="Tersedia 24/7">
                    <h3>Tersedia 24/7</h3>
                    <p>Layanan pelanggan kami siap membantu Anda kapan saja</p>
                </div>
                <div class="feature">
                    <img src="/images/headphone.png" alt="Dukungan Pelanggan">
                    <h3>Dukungan Pelanggan</h3>
                    <p>Tim support yang responsif dan siap membantu perjalanan Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUK KAMI -->
    <section id="produk-kami" class="produk-kami">
        <div class="produk-kami-content">
            <h2>Produk Kami</h2>
            <p>Mobil Tersedia</p>
            <p>Pilih mobil yang sesuai dengan kebutuhan perjalanan Anda</p>
            <div class="mobil-list">
                <div class="mobil-item">
                    <img src="/images/download (2).jpg" alt="Toyota Avanza">
                    <h3>Toyota</h3>
                    <h4>Avanza</h4>
                    <p><span>👥 2</span> <span>Manual</span> <span>Bensin</span></p>
                    <p>Rp. 2.000.000 <span>Per Hari</span></p>
                    <button>Sewa Sekarang</button>
                </div>
                <div class="mobil-item">
                    <img src="/images/download (2).jpg" alt="Toyota Avanza">
                    <h3>Toyota</h3>
                    <h4>Avanza</h4>
                    <p><span>👥 2</span> <span>Manual</span> <span>Bensin</span></p>
                    <p>Rp. 2.000.000 <span>Per Hari</span></p>
                    <button>Sewa Sekarang</button>
                </div>
                <div class="mobil-item">
                    <img src="/images/download (2).jpg" alt="Toyota Avanza">
                    <h3>Toyota</h3>
                    <h4>Avanza</h4>
                    <p><span>👥 2</span> <span>Manual</span> <span>Bensin</span></p>
                    <p>Rp. 2.000.000 <span>Per Hari</span></p>
                    <button>Sewa Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERKINI -->
    <section id="berita-terkini" class="berita-terkini">
        <div class="berita-terkini-content">
            <h2>Berita Terkini Dunia Otomotif</h2>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="/images/car-news1.jpg" alt="Berita Mobil">
                    <p>Daftar Mobil untuk perjalanan jauh yang populer 2025</p>
                </div>
                <div class="carousel-item">
                    <img src="/images/car-news2.jpg" alt="Berita Mobil">
                    <p>Teknologi terbaru dalam dunia otomotif</p>
                </div>
                <div class="carousel-item">
                    <img src="/images/car-news3.jpg" alt="Berita Mobil">
                    <p>Tips merawat mobil agar tetap prima</p>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="prev">&#8249;</button>
                <button class="next">&#8250;</button>
            </div>
        </div>
    </section>

    <!-- ADMIN DASHBOARD -->
    <section id="admin-dashboard" class="admin-dashboard">
        <div class="sidebar">
            <h3>Dashboard Admin</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Artikel</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Produk</h2>
            <div class="content-box">
                <p>Konten produk akan ditampilkan di sini.</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Dino Rent</h3>
                <p>Solusi terpercaya untuk kebutuhan rental mobil Anda dengan harga terjangkau dan layanan terbaik.</p>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="#">Rental Harian</a></li>
                    <li><a href="#">Rental Bulanan</a></li>
                    <li><a href="#">Dengan Sopir</a></li>
                    <li><a href="#">Airport Transfer</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Perusahaan</h3>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p>Email: info@dinorental.com</p>
                <p>Telepon: +62 812-2345-678</p>
                <p>Alamat: Cimanggu, Indonesia</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Dino Rent. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
