<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakerja Help Page</title>
    <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
</head>
<body>
<!-- Header Section -->
<header class="header">
    <div class="header-content">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Delcare Logo" style="height: 70px;"> <!-- Ganti dengan path logo Anda -->
        </div>
        <nav class="nav">
            <a href="{{ route('beranda') }}" class="{{ request()->is('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('panduan') }}" class="{{ request()->is('panduan') ? 'active' : '' }}">Panduan</a>
        </nav>
        <div class="auth-buttons">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Keluar</button>
            </form>
            <i class="fa fa-user profile-icon"></i>
            <!-- Tampilkan nama pengguna yang sedang login -->
            @if(Auth::check())
                <span class="user-name">{{ Auth::user()->name }}</span>
            @endif
        </div>
    </div>
    <!-- Title Section within the Header for a seamless look -->
    <div class="title-section">
        <h1>Panduan</h1>
    </div>
</header>
    
    <section class="featured-article">
        <img src="img/laptop.jpg" alt="Featured" class="featured-image">
        <div class="featured-content">
            <a href="{{ route('artikel_1') }}" class="no-underline">Tips Merawat Laptop Agar Tahan Lama!</a>            <p>Laptop adalah perangkat esensial bagi mahasiswa. Artikel ini membahas cara membersihkan layar dan keyboard, pentingnya menggunakan cooling pad, serta tips menjaga baterai agar tetap awet.</p>
            <span class="date">08 November 2024</span>
        </div>
    </section>
    
    <section class="latest-articles">
        <h3>Artikel Terbaru</h3>
        <div class="article-cards">
            <!-- Article Card 1 -->
            <div class="article-card">
                <img src="img/charger.jpg" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Cara Mengatasi Kerusakan Charger Laptop: Kabel Putus Hingga Overheating</h4>
                    <p>Kerusakan charger sering mengganggu aktivitas mahasiswa. Artikel ini menjelaskan penyebab umum kerusakan seperti kabel putus atau adaptor panas, dan bagaimana memperbaikinya dengan aman.</p>
                         <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 2 -->
            <div class="article-card">
                <img src="img/speaker.jpg" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Panduan Memperbaiki Speaker Rusak: Suara Pecah atau Tidak Menyala</h4>
                    <p>Speaker laptop atau perangkat audio sering menjadi alat hiburan di asrama. Artikel ini membahas penyebab umum kerusakan dan langkah perbaikan sederhana yang dapat dilakukan mahasiswa.</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 3 -->
            <div class="article-card">
                <img src="img/toilet.jpg" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Mengatasi Toilet Mampet dan Flush Rusak di Fasilitas Kampus dan Asrama</h4>
                    <p>Toilet mampet dan flush yang tidak berfungsi adalah masalah umum di kampus dan asrama. Artikel ini membahas cara sederhana mengatasi toilet tersumbat menggunakan alat seperti plunger, serta langkah memperbaiki sistem flush yang macet atau bocor. Juga disertakan tips pencegahan agar toilet tetap berfungsi optimal.</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>

            <!-- Article Card 1 -->
            <div class="article-card">
                <img src="img/lemari.jpg" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Merawat Furnitur di Asrama: Tips Memperpanjang Usia Lemari dan Meja Belajar</h4>
                    <p>Lemari dan meja belajar di asrama sering kali terbuat dari bahan kayu atau MDF. Artikel ini memberikan tips membersihkan, mencegah serangan rayap, dan langkah perbaikan ringan jika ada kerusakan.</p>
                        <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 2 -->
            <div class="article-card">
                <img src="img/kamarmandi.jpg" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Mengatasi Kerusakan Umum pada Kamar Mandi Asrama: Saluran Tersumbat dan Keran Bocor</h4>
                    <p>Kamar mandi asrama sering menghadapi masalah seperti saluran air tersumbat dan keran bocor. Artikel ini membahas langkah-langkah praktis, mulai dari membersihkan pipa saluran hingga mengganti seal keran yang rusak. Disertai tips menjaga kebersihan untuk mencegah masalah berulang.</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 3 -->
            <div class="article-card">
                <img src="img/sakelar.webp" alt="Featured" class="featured-image">
                <div class="article-info">
                    <h4>Perbaikan Lampu dan Saklar Rusak di Fasilitas Kampus: Panduan Sederhana untuk Mahasiswa</h4>
                    <p>Lampu yang berkedip atau saklar rusak dapat mengganggu aktivitas di ruang belajar atau asrama. Artikel ini memberikan panduan dasar mengecek penyebab kerusakan, mengganti lampu yang mati, dan kapan harus memanggil teknisi kampus untuk perbaikan lebih lanjut.</p>
                    <span class="date">31 Oktober 2024</span>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    <script src="js/panduan.js"></script>
</body>
</html>
