<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lacak_ulasan.css">
    <link rel="stylesheet" href="css/sidebar_dm.css">
    <link rel="stylesheet" href="css/navbar_dm.css">
    @include('sidebar_dm')
    @include('navbar_dm')
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


<!-- Main content -->


<div class="status-header">
    <h2>    LACAK STATUS</h2>
</div>

    <div class="status-header-kecil">
</p>Showing 1-5 of 10 items.</p>
  </div>

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
    <td><button type="button" class="btn btn-secondary">Lihat Ulasan</button></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Lampu saung tengah gedung 7 redup</td>
    <td>Gedung 7</td>
    <td><button type="button" class="btn btn-secondary">Lihat Ulasan</button></td>
  </tr>
  <tr>
    <td>3</td>
    <td>AC panas</td>
    <td>Gedung 512</td>
    <td><button type="button" class="btn btn-secondary">Lihat Ulasan</button></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Keran air kamar mandi rusak</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><button type="button" class="btn btn-secondary">Lihat Ulasan</button></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Penyangga bunkbed atas nama yohana tidak ada</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><button type="button" class="btn btn-secondary">Lihat Ulasan</button></td>
  </tr>
</table>

<div class="pagination">
    <a href="#" class="prev">&lt;&lt;</a>
    <a href="#" class="page active">1</a>
    <a href="#" class="page ">2</a>
    <a href="#" class="next">&gt;&gt;</a>
</div>

</body>
</html>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="jss/index.js" defer></script>