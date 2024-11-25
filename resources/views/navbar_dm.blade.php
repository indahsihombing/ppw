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
                <li class="nav-item-profile6">
                    <img src="img/profile.png" alt="" style="height: 35px;">
                </li>
                <li class="nav-item-username">
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>