<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakerja di GovInsider Live Indonesia 2024</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/isi_artikel.css') }}">
</head>
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
        <h1>Artikel</h1>
    </div>
</header>
<body>
    <div class="container">
        <div class="header1">
            <h1>Tips Merawat Laptop Agar Tahan Lama!</h1>
            <div class="meta">
                <span class="date">08 November 2024</span>
            </div>
        </div>
        <div class="image">
            <img src="img/laptop.jpg" alt="Acara GovInsider Live Indonesia 2024">
        </div>
        <div class="content">
            <p>Laptop adalah perangkat esensial bagi mahasiswa untuk mendukung kegiatan belajar, mengerjakan tugas, hingga menikmati hiburan. Agar laptop tetap awet dan berfungsi optimal, perawatan rutin sangat penting. Salah satu langkah sederhana adalah membersihkan layar dan keyboard secara berkala. Gunakan kain mikrofiber untuk membersihkan layar agar terhindar dari goresan, dan gunakan blower udara atau kuas kecil untuk membersihkan debu di sela-sela keyboard. Hindari penggunaan cairan pembersih yang mengandung alkohol berlebih karena dapat merusak permukaan laptop.</p>
            <p>Overheating adalah salah satu penyebab umum kerusakan pada laptop. Untuk mencegahnya, pastikan laptop memiliki ventilasi yang baik selama penggunaan. Menggunakan cooling pad adalah cara yang efektif untuk menjaga suhu laptop tetap stabil, terutama saat menjalankan aplikasi berat seperti software desain atau game. Hindari menggunakan laptop di atas permukaan empuk seperti kasur, karena dapat menghalangi aliran udara dan meningkatkan risiko panas berlebih.</p>
            <p>Baterai laptop juga memerlukan perhatian khusus agar daya tahannya tetap optimal. Hindari membiarkan baterai benar-benar habis sebelum mengisi ulang, dan usahakan untuk mulai mengisi daya saat baterai mencapai 20-30%. Sebaliknya, cabut pengisi daya setelah baterai penuh untuk mencegah overcharging. Penggunaan fitur "battery saver" juga dapat membantu mengurangi konsumsi daya saat Anda tidak membutuhkan performa tinggi.</p>
            <p>Selain perawatan fisik, pastikan sistem laptop selalu diperbarui. Update software dan antivirus secara berkala dapat mencegah serangan malware yang dapat merusak sistem atau mencuri data penting. Selain itu, hapus program atau file yang tidak diperlukan untuk menghindari kinerja laptop menjadi lambat. Dengan menjaga software tetap up-to-date, laptop Anda dapat berjalan lebih lancar dan aman.</p>
            <p>Perawatan laptop yang konsisten akan membantu memperpanjang masa pakainya, terutama di lingkungan kampus yang penuh aktivitas. Laptop yang dirawat dengan baik tidak hanya menghemat biaya perbaikan, tetapi juga meningkatkan produktivitas. Dengan langkah-langkah sederhana seperti menjaga kebersihan, mengelola baterai, dan memastikan sistem tetap aman, Anda dapat menikmati pengalaman menggunakan laptop yang lebih optimal dan tahan lama.</p>
        </div>
    </div>
    @include('footer')
</body>
</html>
