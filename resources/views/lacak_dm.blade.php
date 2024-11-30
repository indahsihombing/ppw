<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lacak_dm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

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
        <h1>Lacak Status</h1>
    </div>
</header>

    <style>
        /* Custom CSS to resize the table */
        table.table-sm {
            width: 80%; /* Adjust the table width */
            margin: 0 auto; /* Center the table */
        }

        /* Optional: adjust cell padding to make it more compact */
        table.table-sm th, table.table-sm td {
            padding: 8px 12px; /* Reduced padding for smaller table */
        }
    </style>


<body>

    <!-- Main content -->


    <div class="status-header-kecil">
        <p>Showing 1-5 of {{ $reports->count() }} items.</p>
    </div>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>No.</th>
                <th>Deskripsi Kerusakan</th>
                <th>Lokasi Kerusakan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $index => $report)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $report->deskripsi_kerusakan }}</td>
                <td>{{ $report->lokasi_kerusakan }}</td>
                <td>
                    @if($report->status == 'accepted')
                    <span class="text-success">Diterima</span>
                    @elseif($report->status == 'rejected')
                    <span class="text-danger">Ditolak</span>
                    <p>Alasan: {{ $report->rejection_reason }}</p>
                    @else
                    <span class="text-warning">Dalam Proses</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        <a href="#" class="prev">&lt;&lt;</a>
        <a href="#" class="page active">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="next">&gt;&gt;</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lacak.js" defer></script>
    <script src="js/index.js" defer></script>
    @include('footer')
</body>

</html>
