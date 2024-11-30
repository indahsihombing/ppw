<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="js/dashboard.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="img/logo.png" alt="Logo" class="logo-image">
      </div>
      <ul class="menu">
        <li class="menu-item">
            <a href="{{ route('dashboard') }}">
              <img src="img/home.png" alt="Dashboard Icon" class="menu-icon">
              Dashboard
            </a>
          </li>
        <li class="menu-item">
            <a href="{{ route('lacak') }}">
                <img src="img/form.png" alt="Laporan Icon" class="menu-icon">
                Laporan
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('ulasan') }}">
              <img src="img/review.png" alt="Ulasan Icon" class="menu-icon">
              Ulasan
            </a>
          </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header class="header">
        <div class="user-actions">
          <img src="img/profile.png" alt="User Avatar" class="user-avatar">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Keluar</button>
        </form>
        </div>
      </header>

      <div class="dashboard">
        <h2 class="dashboard-title">Dashboard</h2>
        

        <!-- Statistic Cards -->
        <div class="stats">
          <div class="stat-card">
            <div class="stat-info">
              <h3>Total Laporan Masuk</h3>
 
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-info">
              <h3>Total Laporan Selesai</h3>

            </div>
          </div>
          <div class="stat-card">
            <div class="stat-info">
              <h3>Total Laporan Ditolak</h3>

            </div>
          </div>
        </div>
        <script src="js/dashboard.js"></script>
      </body>
      </html>


