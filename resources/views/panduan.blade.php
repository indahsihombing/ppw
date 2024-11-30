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
        </div>
    </div>
    <!-- Title Section within the Header for a seamless look -->
    <div class="title-section">
        <h1>Panduan</h1>
    </div>
</header>
    
    <section class="featured-article">
        <img src="featured-image.jpg" alt="Featured" class="featured-image">
        <div class="featured-content">
            <h2>Sudah Jadi Alumni Prakerja? Ayo Isi Survei dan Menangkan Hadiah Total 25 Juta Rupiah!</h2>
            <p>Sobat Prakerja, 5 tahun sudah Prakerja berjalan. Sudah lebih dari 18,9 juta penerima dari 514 kabupaten/kota merasakan manfaat Prakerja. Menutup tahun ini,...</p>
            <span class="date">08 November 2024</span>
        </div>
    </section>
    
    <section class="latest-articles">
        <h3>Artikel Terbaru</h3>
        <div class="article-cards">
            <!-- Article Card 1 -->
            <div class="article-card">
                <img src="article-image1.jpg" alt="Article 1">
                <div class="article-info">
                    <h4>Prakerja Kembali Raih Apresiasi Kala Hadiri Mongolia Social Protection Forum</h4>
                    <p>Mongolia, 29 Oktober 2024 – Prakerja kembali mendapatkan apresiasi dari mitra internasional...</p>
                         <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 2 -->
            <div class="article-card">
                <img src="article-image2.jpg" alt="Article 2">
                <div class="article-info">
                    <h4>Panggilan untuk Alumni Prakerja: Survei Alumni Sudah Dibuka!</h4>
                    <p>Sejak tahun 2020, Program Kartu Prakerja telah mendorong lebih dari 18,9 juta orang untuk meningkatkan keterampilannya...</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 3 -->
            <div class="article-card">
                <img src="article-image3.jpg" alt="Article 3">
                <div class="article-info">
                    <h4>Kumpul Jasa Pekanbaru Dimulai: Alumni Prakerja Berkontribusi bagi UMKM dan...</h4>
                    <p>Hai, Sobat Prakerja! Setelah sukses dalam berbagai program pemberdayaan...</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>

            <!-- Article Card 1 -->
            <div class="article-card">
                <img src="article-image1.jpg" alt="Article 4">
                <div class="article-info">
                    <h4>Prakerja Kembali Raih Apresiasi Kala Hadiri Mongolia Social Protection Forum</h4>
                    <p>Mongolia, 29 Oktober 2024 – Prakerja kembali mendapatkan apresiasi dari mitra internasional...</p>
                        <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 2 -->
            <div class="article-card">
                <img src="article-image2.jpg" alt="Article 5">
                <div class="article-info">
                    <h4>Panggilan untuk Alumni Prakerja: Survei Alumni Sudah Dibuka!</h4>
                    <p>Sejak tahun 2020, Program Kartu Prakerja telah mendorong lebih dari 18,9 juta orang untuk meningkatkan keterampilannya...</p>
                    <span class="date">01 November 2024</span>
                </div>
            </div>
            <!-- Article Card 3 -->
            <div class="article-card">
                <img src="article-image3.jpg" alt="Article 6">
                <div class="article-info">
                    <h4>Kumpul Jasa Pekanbaru Dimulai: Alumni Prakerja Berkontribusi bagi UMKM dan...</h4>
                    <p>Hai, Sobat Prakerja! Setelah sukses dalam berbagai program pemberdayaan...</p>
                    <span class="date">31 Oktober 2024</span>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    <script src="js/panduan.js"></script>
</body>
</html>
