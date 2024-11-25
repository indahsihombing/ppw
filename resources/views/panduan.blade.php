<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/panduan.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/navbar.css">
    @include('sidebar')
    @include('navbar')
</head>
<body>


<!-- Notifikasi -->
<div id="notif-panel" class="notif-panel">
    <div class="notif-header">
        <h5>Kamu memiliki 4 Notifikasi Baru!</h5>
        <hr>
    </div>
    <ul id="notif-list">
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
        <li>
            <img src="img/silang.png" alt="Rejected" style="height: 20px;"> Permintaan anda ditolak
        </li>
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
    </ul>
    
    <!-- Garis tambahan disembunyikan di sini -->
    <hr id="extra-line" style="display: none;">

    <!-- Notifikasi tambahan yang disembunyikan -->
    <div id="extra-notif" style="display: none;">
        <ul>
            <li>
                <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
            </li>
            <li>
                <img src="img/silang.png" alt="Rejected" style="height: 20px;"> Permintaan anda ditolak
            </li>
        </ul>
    </div>
    
    <hr>
    <a href="#" id="show-more" class="show-more">Lihat Semua Notifikasi</a>
</div>

<!-- Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('form') }}">
                    <img src="img/form.png" alt="Home Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Form" -->
                    Form
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('lacak_dm') }}">
                    <img src="img/lacak-status.png" alt="File Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Lacak Status" -->
                    Lacak Status
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ulasan') }}">
                    <img src="img/review.png" alt="Review Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Ulasan" -->
                    Ulasan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('panduan') }}">
                    <img src="img/panduan.png" alt="Guide Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Panduan" -->
                    Panduan
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- Main Content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Panduan</h1>
    </div>
    <div class="content">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="accordionExample">
           
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Berapa lama waktu menunggu setelah laporan dikirimkan?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Waktu tunggu bisa bervariasi tergantung prioritas dari kerusakan tersebut. 
                        Pihak maintenance/duktek akan selalu siaga memeriksa laporan masuk sehingga
                        untuk laporan dengan prioritas tinggi, akan diberi penanganan secepatnya. Untuk 
                        permasalahan lainnya umumnya 1x24 jam.
                    </div>
                </div>
            </div>

             

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apa yang kita lakukan jika permohonan laporan kita ditolak?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Jika permohonan laporan ditolak, Anda dapat menghubungi pihak terkait untuk mendapatkan penjelasan lebih lanjut mengenai alasan penolakan tersebut. Pastikan bahwa laporan yang Anda kirimkan sudah lengkap dan sesuai dengan prosedur yang berlaku.
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bagaimana jika kerusakan yang baru saja diperbaiki ternyata rusak kembali? Apakah perlu mengirim laporan kerusakan kembali?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        ..............                    
                    </div>
                </div>
            </div>

            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Siapa yang saya hubungi ketika laporan tidak ditangani lebih dari 1x24 jam?                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        ............
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bagaimana jika kerusakan sudah teratasi sebelum pihak maintenance/duktek 
                        datang untuk penanganan? Apakah bisa di cancel jika sudah diapprove?                     </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    ................                    
                    </div>
                </div>
            </div>



            
                                       
                </div>
               
            </div>
        </div>
    </div>

    <div class="content" style="display: flex; align-items: flex-start;">
        <!-- Gambar di samping paragraf -->
        <img src="img/proyektor.jpg" alt="Proyektor" style="margin-right: 15px; margin-top: 8px; width: 200px;">
    
        <div>
            <h2>5 Masalah Umum yang Terjadi pada Proyektor</h2>
            <p>Proyektor adalah perangkat yang sangat berguna dalam berbagai kegiatan, mulai dari presentasi sampai pemaparan materi. Namun, seperti halnya perangkat elektronik lainnya, proyektor juga rentan mengalami masalah. Berikut adalah lima masalah umum yang sering terjadi pada proyektor :</p>
            <p><a href="{{ url('https://www.jaringansibuk.com/2022/05/beberapa-masalah-solusinya-pada.html') }}">Baca selengkapnya...</a></p>
        </div>
    </div>
    

    <div class="content" style="display: flex;">
        <!-- Gambar di sebelah kiri -->
        <img src="img/kipas.jpg" alt="Exhaust Fan" style="margin-right: 15px; margin-top: 8px; width: 200px; height: 145px;">
    
        <!-- Bagian konten di sebelah kanan gambar -->
        <div>
            <!-- Heading sejajar di atas paragraf -->
            <h2 style="margin: 0; margin-bottom: 10px;">Beberapa Tanda Kerusakan pada Exhaust Fan Kamar Mandi</h2>
            <p>Salah satu cara untuk mengurangi kelembapan di kamar mandi adalah dengan menambahkan exhaust fan. Namun sering berjalannya waktu, exhaust fan akan mengalami berbagai masalah yang mengarah pada kerusakan. Sayangnya, masih banyak yang mengabaikan tanda kerusakan pada exhaust fan.</p>
            <p><a href="{{ url('https://semeruintisukses.com/problem-pada-exhaust-fan-panduan-menemukan-dan-mengatasi/') }}">Baca selengkapnya...</a></p>
        </div>
    </div>
            
    </main>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>