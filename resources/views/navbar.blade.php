<!-- Navbar -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpeg" alt="" style="height: 60px;"> DELCARE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item-notif">
                    <img id="notif-icon" src="img/notifikasi.jpeg" alt="" style="height: 40px; cursor: pointer;">
                </li>
                <li class="nav-item-profile6">
                    <img src="img/profile.png" alt="" style="height: 35px;">
                </li>
                <li class="nav-item-username">
                    <a class="nav-link" href="#">{{ Auth::user()->email }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Notifikasi -->
<div id="notif-panel" class="notif-panel">
    <div class="notif-header">
        
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
    
    <body style="padding-top: 70px;"> <!-- Sesuaikan tinggi padding dengan navbar -->

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

<script src="js/notif.js" defer></script>

