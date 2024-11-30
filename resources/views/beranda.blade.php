<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delcare | Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    @include('navbar')
    
</head>
<body>

    <!-- Help Section -->
    <main class="main-content">
        <div class="help-section">
            <div class="help-card">
                <img src="{{ asset('img/online-registration.png') }}" alt="Pengiriman Formulir">                
                <a href="{{ route('form') }}"><p>Kirim Laporan</p></a>
            </div>
            <div class="help-card">
                <img src="{{ asset('img/tracking.png') }}"  alt="Lacak Status">
                <a href="{{ route('lacak_dm') }}"><p>Lacak Status</p></a>
            </div>
        </div>
    </main>

    <section class="steps-section">
        <h2>Langkah Mudah Mengirim Laporan Kerusakan</h2>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>Masuk</h3>
                <p>Masuk ke dalam website Delcare menggunakan akun dan kata sandi yang sudah dibagikan sebelumnya. Pastikan memakai akun milik sendiri.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3>Kirim Laporan</h3>
                <p>Pilih opsi Kirim Laporan untuk mengirimkan laporan kerusakan.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Pengisian Laporan</h3>
                <p>Isilah laporan tersebut dengan sebenar-benarnya dan sertakan bukti kerusakan untuk mempercepat tindakan perbaikan.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3>Lacak Status</h3>
                <p>Pilih opsi ini untuk melihat aktivitas laporan yang sudah anda kirimkan.</p>
            </div>
            <div class="step-card">
                <div class="step-number">5</div>
                <h3>Cek Status Secara Berkala</h3>
                <p>Duktek dan Maintenance akan memberikan feedback untuk laporan yang kamu kirimkan.</p>
            </div>
            <div class="step-card">
                <div class="step-number">6</div>
                <h3>Ulasan</h3>
                <p>Berikan ulasanmu dengan jujur tentang performa perbaikan yang dilakukan.</p>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <h2>Pertanyaan Populer</h2>
        
        <!-- FAQ Item 1 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa itu Program Kartu Prakerja?</h3>
                <span class="icon">−</span>
            </div>
            <div class="faq-answer">
                <p>Program Kartu Prakerja adalah program beasiswa pelatihan untuk meningkatkan kompetensi kerja dan kewirausahaan. Program ini ditujukan bukan hanya untuk pencari kerja, tapi juga mereka yang sudah bekerja maupun buruh yang ingin mendapatkan peningkatan skill atau kompetensi, juga pekerja/buruh yang terkena pemutusan hubungan kerja, termasuk pelaku usaha mikro dan kecil.</p>
                <button class="copy-link">Salin Link</button>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa saja ketentuan untuk menjadi penerima Kartu Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Berikut adalah ketentuan untuk menjadi penerima Kartu Prakerja...</p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa saja tahapan daftar Kartu Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Tahapan untuk mendaftar Kartu Prakerja adalah sebagai berikut...</p>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Bagaimana cara masuk ke akun Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Untuk masuk ke akun Prakerja, Anda perlu...</p>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/faq.js') }}"></script>
    @include('footer')
</body>
</html>
