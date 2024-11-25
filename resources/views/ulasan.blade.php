<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ulasan.css">
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


</nav>
            <!-- Main content -->
            <div class="main-content">
                <h2>FORM ULASAN</h2>
                <p>Harap mengisi form berikut ini sesuai dengan tindakan yang sudah dilakukan.</p>
            
                <form id="ulasan-form">
                    <div class="form-group">
                        <label>1. Bagaimana Anda menilai kualitas perbaikan yang dilakukan oleh tim maintenance/Duktek?</label>
                        <div class="rating-group">
                            <label><input type="radio" name="kualitas" value="Sangat Baik"> Sangat Baik</label>
                            <label><input type="radio" name="kualitas" value="Baik"> Baik</label>
                            <label><input type="radio" name="kualitas" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kualitas" value="Buruk"> Buruk</label>
                            <label><input type="radio" name="kualitas" value="Sangat Buruk"> Sangat Buruk</label>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label>2. Seberapa cepat tim maintenance/Duktek merespons laporan kerusakan yang Anda kirimkan?</label>
                        <div class="rating-group">
                            <label><input type="radio" name="respon" value="Sangat Cepat"> Sangat Cepat</label>
                            <label><input type="radio" name="respon" value="Cepat"> Cepat</label>
                            <label><input type="radio" name="respon" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="respon" value="Lambat"> Lambat</label>
                            <label><input type="radio" name="respon" value="Sangat Lambat"> Sangat Lambat</label>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label>3. Seberapa jelas informasi yang diberikan mengenai status perbaikan laporan Anda?</label>
                        <div class="rating-group">
                            <label><input type="radio" name="informasi" value="Sangat Jelas"> Sangat Jelas</label>
                            <label><input type="radio" name="informasi" value="Jelas"> Jelas</label>
                            <label><input type="radio" name="informasi" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="informasi" value="Tidak Jelas"> Tidak Jelas</label>
                            <label><input type="radio" name="informasi" value="Sangat Tidak Jelas"> Sangat Tidak Jelas</label>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label>4. Seberapa puas Anda dengan layanan yang Anda terima secara keseluruhan?</label>
                        <div class="rating-group">
                            <label><input type="radio" name="kepuasan" value="Sangat Puas"> Sangat Puas</label>
                            <label><input type="radio" name="kepuasan" value="Puas"> Puas</label>
                            <label><input type="radio" name="kepuasan" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kepuasan" value="Tidak Puas"> Tidak Puas</label>
                            <label><input type="radio" name="kepuasan" value="Sangat Tidak Puas"> Sangat Tidak Puas</label>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label>5. Apakah Anda memiliki rekomendasi atau saran untuk meningkatkan layanan kami? (Opsional)</label>
                        <textarea name="rekomendasi" rows="4"></textarea>
                    </div>
            
                    <button type="submit" class="submit-btn">Kirim</button>
                </form>
            </div>
            
<!-- Popup Modal -->
<div id="popupModal" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <p><i class="checkmark">✔</i> Berhasil!</p>
        <p>Ulasan anda sudah dikirimkan</p>
        <button id="closePopup">OK</button>
    </div>
</div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="jss/ulasan.js" defer></script>
    
</body>
</html>