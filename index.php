<?php
// Proses form kontak
$message = '';
$success = false;

if ($_POST) {
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $pesan = htmlspecialchars($_POST['pesan'] ?? '');
    
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $message = "Terima kasih $nama! Pesan Anda telah diterima:\n\n" .
                  "Nama: $nama\n" .
                  "Email: $email\n" .
                  "Pesan: $pesan\n\n" .
                  "Pesan akan segera diproses oleh panitia.";
        $success = true;
    } else {
        $message = "Mohon lengkapi semua field!";
        $success = false;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komisi Remaja & Pemuda Gereja</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-fire"></i>
                <span>KOREMPA LOMBUZAUA</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#tentang" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="#kegiatan" class="nav-link">Kegiatan</a></li>
                <li class="nav-item"><a href="#galeri" class="nav-link">Galeri</a></li>
                <li class="nav-item"><a href="#kontak" class="nav-link">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">SELAMAT DATANG DI WEBSITE <br> Komisi Remaja & Pemuda Gereja</h1>
            <p class="hero-subtitle">"Janganlah kamu menjadi lalai, tetapi hendaklah kamu meneliti bahwa imanmu bukan kosong, tetapi berbuah dengan perbuatan."<br><strong>Yakobus 2:17</strong></p>
            <a href="#kegiatan" class="cta-button">Lihat Kegiatan Kami</a>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="tentang">
        <div class="container">
            <h2 class="section-title">Tentang Kami</h2>
            
            <div class="tentang-grid">
                <div class="tentang-card">
                    <i class="fas fa-book-open"></i>
                    <h3>Sejarah Singkat</h3>
                    <p>Didirikan tahun 2015, Komisi Remaja & Pemuda telah menjadi wadah pelayanan bagi 150+ remaja dan pemuda untuk bertumbuh dalam kasih dan pelayanan Tuhan.</p>
                </div>
                
                <div class="tentang-card">
                    <i class="fas fa-eye"></i>
                    <h3>Visi</h3>
                    <p>Menjadikan generasi remaja dan pemuda yang berapi-api dalam pelayanan, berpaut pada firman Tuhan, dan menjadi terang bagi dunia.</p>
                </div>
                
                <div class="tentang-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Misi</h3>
                    <p>1. Membangun karakter Kristiani<br>2. Melatih kepemimpinan rohani<br>3. Mengembangkan bakat pelayanan</p>
                </div>
            </div>

            <div class="struktur">
                <h3>Struktur Pengurus 2022</h3>
                <div class="struktur-grid">
                    <div class="struktur-item">
                        <h4>Ketua</h4>
                        <p>Putrawan Harefa</p>
                    </div>
                    <div class="struktur-item">
                        <h4>Sekretaris</h4>
                        <p>Pontianus Harefa</p>
                    </div>
                    <div class="struktur-item">
                        <h4>Bendahara</h4>
                        <p>Damanotona Harefa</p>
                    </div>
                    <div class="struktur-item">
                        <h4>Koordinator Pelayanan</h4>
                        <p>Welkarnia Harefa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kegiatan -->
    <section id="kegiatan" class="kegiatan">
        <div class="container">
            <h2 class="section-title">Kegiatan Kami</h2>
            <div class="kegiatan-grid">
                <div class="kegiatan-card">
                    <div class="card-icon">
                        <i class="fas fa-pray"></i>
                    </div>
                    <h3>Ibadah Remaja</h3>
                    <p>Setiap Sabtu pukul 19:00 WIB. Ibadah pemuda dan khotbah relevan untuk generasi muda.</p>
                    <span class="kegiatan-date">Sabtu, 19:00 WIB</span>
                </div>
                
                <div class="kegiatan-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Persekutuan Pemuda</h3>
                    <p>Malam minggu untuk latihan pemuda.</p>
                    <span class="kegiatan-date">Sabtu, 19:00 WIB</span>
                </div>
                
                <div class="kegiatan-card">
                    <div class="card-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Pelayanan Sosial</h3>
                    <p>Bakti sosial, kunjungan di gereja lainnya.</p>
                    <span class="kegiatan-date">Per 6 Bulan</span>
                </div>
                
                <div class="kegiatan-card">
                    <div class="card-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3>Workshop Worship</h3>
                    <p>Pelatihan musik rohani dan worship leading untuk pelayan musik.</p>
                    <span class="kegiatan-date">3 kali dalam seminggu</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="galeri">
        <div class="container">
            <h2 class="section-title">Galeri Kegiatan</h2>
            <div class="galeri-grid">
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop" alt="Ibadah Remaja">
                    <div class="galeri-overlay">
                        <h4>Ibadah Remaja</h4>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400&h=300&fit=crop" alt="Persekutuan">
                    <div class="galeri-overlay">
                        <h4>Persekutuan Pemuda</h4>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=400&h=300&fit=crop" alt="Bakti Sosial">
                    <div class="galeri-overlay">
                        <h4>Bakti Sosial</h4>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Workshop">
                    <div class="galeri-overlay">
                        <h4>Workshop Worship</h4>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587206?w=400&h=300&fit=crop" alt="Retret">
                    <div class="galeri-overlay">
                        <h4>Retret Remaja</h4>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=400&h=300&fit=crop" alt="Pelayanan">
                    <div class="galeri-overlay">
                        <h4>Pelayanan Musik</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="kontak">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            
            <?php if ($message): ?>
                <div class="alert <?php echo $success ? 'alert-success' : 'alert-error'; ?>">
                    <i class="fas fa-<?php echo $success ? 'check-circle' : 'exclamation-circle'; ?>"></i>
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <div class="kontak-grid">
                <div class="kontak-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Gereja No. 123<br>Kota Sejahtera</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telepon</h4>
                            <p>(021) 123-4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>krpg@gereja.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Jam Buka</h4>
                            <p>Senin-Minggu<br>08:00 - 21:00</p>
                        </div>
                    </div>
                </div>
                
                <form method="POST" class="kontak-form">
                    <div class="form-group">
                        <label for="nama"><i class="fas fa-user"></i> Nama Lengkap *</label>
                        <input type="text" id="nama" name="nama" required 
                               value="<?php echo $_POST['nama'] ?? ''; ?>" placeholder="Masukkan nama lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email *</label>
                        <input type="email" id="email" name="email" required 
                               value="<?php echo $_POST['email'] ?? ''; ?>" placeholder="example@email.com">
                    </div>
                    <div class="form-group">
                        <label for="pesan"><i class="fas fa-comment"></i> Pesan *</label>
                        <textarea id="pesan" name="pesan" rows="5" required 
                                  placeholder="Ceritakan apa yang ingin Anda sampaikan..."><?php echo $_POST['pesan'] ?? ''; ?></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-fire"></i>
                        <span>KRPG</span>
                    </div>
                    <p>Komisi Remaja & Pemuda Gereja - Menyalakan Api Rohani Generasi Muda</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#kegiatan">Kegiatan</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Komisi Remaja & Pemuda Gereja. Dibuat dengan ❤️ untuk kemuliaan Tuhan.</p>
            </div>
        </div>
    </footer>
</body>
</html>