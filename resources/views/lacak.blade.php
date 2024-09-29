<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lacak.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpeg" alt="" style="height: 30px;"> DelCare
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
                    <a class="nav-link" href="#">iss22050@del.ac.id</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
                <a class="nav-link active" aria-current="page" href="#">
                    <img src="img/form.png" alt="Home Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Form" -->
                    Form
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/lacak-status.png" alt="File Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Lacak Status" -->
                    Lacak Status
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/review.png" alt="Review Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Ulasan" -->
                    Ulasan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/panduan.png" alt="Guide Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Panduan" -->
                    Panduan
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- Main content -->

<h2>Lacak Status</h2>
<p>Showing 1-5 of 10 items.</p>

<table>
  <tr>
    <th>#</th>
    <th>Deksripsi Kerusakan</th>
    <th>Lokasi Kerusakan</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Kerusakan idea hub yang tidak dapat hidup</td>
    <td>Gedung 711</td>
    <td><span class="status-container status-ditunda">Ditunda</span></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Lampu saung tengah gedung 7 redup</td>
    <td>Gedung 7</td>
    <td><span class="status-container status-sukses">Sukses</span></td>
  </tr>
  <tr>
    <td>3</td>
    <td>AC panas</td>
    <td>Gedung 512</td>
    <td><span class="status-container status-diterima">Diterima</span></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Keran air kamar mandi rusak</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><span class="status-container status-diterima">Diterima</span></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Penyangga bunkbed atas nama yohana tidak ada</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><span class="status-container status-ditolak">Ditolak</span></td>
  </tr>
</table>

</body>
</html>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="jss/index.js" defer></script>
    